<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Customer;
use App\Models\District;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CartController extends Controller
{
    private function getCarts()
    {
        $carts = json_decode(request()->cookie('dw-carts'), true);
        $carts = $carts != '' ? $carts : []; // ada gak cartnya? kalau gaada, array nya kosong

        return $carts;
    }

    // get daftar district dari db
    public function getDistrict()
    {
        $districts = District::where('city_id', request()->city_id)->get();
        return response()->json([
            'status' => 'success',
            'data' => $districts
        ]);
    }

    // get daftar city dari db
    public function getCity()
    {
        $cities = City::where('province_id', request()->province_id)->get();
        return response()->json([
            'status' => 'success',
            'data' => $cities
        ]);
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'qty' => 'required|integer'
        ]);

        // ambil cookie request, convert ke array
        $carts = $this->getCarts();

        // kalau cart ada
        if ($carts && array_key_exists($request->product_id, $carts)) {
            $carts[$request->product_id]['qty'] += $request->qty;
        } else {
            $product = Product::find($request->product_id);

            // dd($product);

            $carts[$request->product_id] = [
                'qty' => $request->qty,
                'product_id' => $product->id,
                'product_name' => $product->name,
                'product_price' => $product->price,
                'product_image' => $product->image
            ];
        }

        // assign cookie lagi selama 2800 menit
        $cookie = cookie('dw-carts', json_encode($carts), 2800);

        return redirect()->back()->cookie($cookie)->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    public function listCart()
    {
        $carts = $this->getCarts();

        // dd($carts);

        // cari subtotal
        // setiap qty dari tiap barang dikali sama harganya
        $subtotal = collect($carts)->sum(function ($q) {
            return $q['qty'] * $q['product_price'];
        });

        return view('marketplace.cart.index', ['carts' => $carts, 'subtotal' => $subtotal]);
    }

    public function updateCart(Request $request)
    {
        $carts = $this->getCarts();

        try {
            foreach ($request->product_id as $key => $row) {
                if ($request->qty[$key] == 0) {
                    unset($carts[$row]);
                } else {
                    $carts[$row]['qty'] = $request->qty[$key];
                }
            }
            $cookie = cookie('dw-carts', json_encode($carts), 2800);
            return redirect()->back()->cookie($cookie)->with('success', 'Keranjang anda berhasil diperbarui!');
        } catch (\Throwable $th) {
            //throw $th;
            $cookie = cookie('dw-carts', json_encode($carts), 2800);
            return redirect()->back()->cookie($cookie)->with('error', 'Keranjang anda masih kosong!');
        }


    }

    public function checkout()
    {
        $carts = $this->getCarts();

        if (!$carts) return redirect()->back()->with('error', 'Keranjang anda masih kosong!');

        $provinces = Province::orderBy('created_at', 'desc')->get();

        $subtotal = collect($carts)->sum(function ($q) {
            return $q['qty'] * $q['product_price'];
        });

        return view('marketplace.cart.checkout', ['provinces' => $provinces, 'carts' => $carts, 'subtotal' => $subtotal]);
    }

    public function processCheckout(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:100',
            'customer_phone' => 'required',
            'email' => 'required|email',
            'customer_address' => 'required|string',
            'province_id' => 'required|exists:provinces,id',
            'city_id' => 'required|exists:cities,id',
            'district_id' => 'required|exists:districts,id'
        ]);

        // open transaksi DB
        DB::beginTransaction();

        try {
            // ambil data customer
            $customer = Customer::where('email', $request->email)->first();

            $carts = $this->getCarts();

            $subtotal = collect($carts)->sum(function ($q) {
                return $q['qty'] * $q['product_price'];
            });

            // create data customer
            $customer = Customer::create([
                'name' => $request->customer_name,
                'email' => $request->email,
                'phone_number' => $request->customer_phone,
                'address' => $request->customer_address,
                'district_id' => $request->district_id,
                'status' => false
            ]);

            // create data transaksi order
            $order = Order::create([
                'invoice' => Str::random(4) . '-' . time(), //INVOICENYA KITA BUAT DARI STRING RANDOM DAN WAKTU
                'customer_id' => $customer->id,
                'customer_name' => $customer->name,
                'customer_phone' => $request->customer_phone,
                'customer_address' => $request->customer_address,
                'district_id' => $request->district_id,
                'subtotal' => $subtotal
            ]);

            // loop detail order, create data ordernya satu"
            foreach ($carts as $row) {
                $product = Product::find($row['product_id']);

                OrderDetail::create([
                    'order_id' => $order->id,
                    'product_id' => $row['product_id'],
                    'price' => $row['product_price'],
                    'qty' => $row['qty'],
                    'weight' => $product->weight
                ]);
            }

            // commit ke DB
            DB::commit();

            // kosongin cart dan cookie
            $carts = [];
            $cookie = cookie('dw-carts', json_encode($carts), 2800);

            return redirect(route('marketplace.finish_checkout', $order->invoice))->cookie($cookie);
        } catch (\Throwable $th) {
            // batalin transaksi
            DB::rollback();

            return redirect()->back()->with('error', $th);
        }
    }

    public function checkoutFinish($invoice)
    {
        $order = Order::with(['district.city'])->where('invoice', $invoice)->first();

        // dd($order);
        return view('marketplace.cart.finish', ['order' => $order]);
    }
}
