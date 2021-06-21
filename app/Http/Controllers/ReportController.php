<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::orderBy('created_at', 'desc')->paginate(10);

        // dd($order);

        return view('dashboard.reports.index', ['order' => $order]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $order = Order::find($id);
        // $orderDetail = OrderDetail::where('order_id', $order->id)->get();

        $order = Order::with(['district.city.province', 'details', 'details.product'])
            ->where('invoice', $id)->first();
        // dd($order);

        return view('dashboard.reports.show', ['order' => $order]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        $request->validate([
            'status' => 'required'
        ]);

        switch ($request->input('status')) {
            case 1:
                $status = "1";
                break;
            case 2:
                $status = "2";
                break;
            case 3:
                $status = "3";
                break;
            case 4:
                $status = "4";
                break;
        }

        try {
            $order->update([
                'status' => $status
            ]);

            return redirect()->route('reports.index')->with('success', 'Status berhasil diubah');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('reports.index')->with('error', $th);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();

        return redirect()->route('reports.index')->with('success', 'Pesanan berhasil dihapus');
    }

    public function whatsapp($id)
    {
        $order = Order::with(['district.city.province', 'details', 'details.product'])
            ->where('invoice', $id)->first();

        $productString = "";
        foreach ($order->details as $key) {
            $productString = $productString . $key->product->name . " (" . $key->qty . " item)\n";
        }

        // dd($productString);

        $priceNumber = number_format($order->subtotal,2,",",".");

        $message = urlencode("
        Halo, kami dari admin BUMDes Mina Harapan. Terimakasih sudah membeli produk kami!\n\n===\n\nSebelumnya kami meminta izin untuk memberikan info mengenai proses pembayarannya ya:\n\nProduk yang dipesan : \n$productString \nTotal Pembayaran : Rp $priceNumber \n\nUntuk pembayaran bisa melalui: \n- Bank BCA : xxxx-xxx-xxx a/n Anonymous \n- Bank Mandiri : xxxxxxxxxxxxx a/n Anonymous \n- GoPay, OVOm DANA, ShopeePay : xxxxxxxxxxxx a/n Anonymous \n\n===\n\nSetelah transfer, harap memberikan konfirmasi sebagai berikut untuk keperluan verifikasi kami ya:\n\nAtas nama (sesuai rekening) :\nMetode Pembayaran :\nTanggal Transfer :\n\nSekali lagi terima kasih dan mohon ditunggu untuk informasi pengambilan barang produk yang sudah dipesan, semoga harinya menyenangkan!\n
        ");

        // dd($message);

        return redirect()->to("https://wa.me/$order->customer_phone/?text=$message");
    }
}
