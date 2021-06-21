<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::with(['category'])->orderBy('created_at', 'desc');

        // query search
        if (request()->q != '') {
            $product = $product->where('name', 'LIKE', '%' . request()->q . '%');
        }

        $product = $product->paginate(10);

        return view('products.index', ['product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::orderBy('name', 'desc')->get();

        return view('products.create', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|integer',
            'weight' => 'required|integer',
            'image' => 'required|image|mimes:png,jpeg,jpg',
        ]);

        $path = $request->file('image')->store('public/images');

        Product::create([
            'name' => $request->name,
            'slug' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'image' => Storage::url($path),
            'price' => $request->price,
            'weight' => $request->weight,
            'status' => $request->status,
        ]);

        return redirect(route('product.index'))->with('success', 'Produk baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $category = Category::orderBy('name', 'desc')->get();

        return view('products.edit', ['product' => $product, 'category' => $category]);
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
        $product = Product::find($id);

        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|integer',
            'weight' => 'required|integer',
            'image' => 'image|mimes:png,jpeg,jpg',
        ]);

        if($request->file('image')){
            $path = $request->file('image')->store('public/images');
        }else{
            $path = $product->image;
        }

        try {
            $product->update([
                'name' => $request->name,
                'slug' => $request->name,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'image' => Storage::url($path),
                'price' => $request->price,
                'weight' => $request->weight,
                'status' => $request->status,
            ]);

            return redirect(route('product.index'))->with('success', 'Produk berhasil diedit');
        } catch (\Throwable $th) {
            return redirect(route('product.index'))->with('error', $th);
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
        $product = Product::find($id);

        File::delete(storage_path($product->image));

        $product->delete();

        return redirect(route('product.index'))->with('success', 'Produk berhasil dihapus!');
    }
}
