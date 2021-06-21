<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // with for relationships with 'parent'
        $category = Category::with(['parent'])->orderBy('created_at', 'desc')->paginate(10);
        $parent = Category::getParent()->orderBy('name', 'asc')->get();
        // dd($category, $parent);
        return view('categories.index', ['category' => $category, 'parent' => $parent]);
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
        $request->validate([
            'name' => 'required|string|max:50|unique:categories',
        ]);

        $request->request->add(['slug' => $request->name]);

        Category::create($request->all());

        // dd($request);
        return redirect(route('category.index'))->with('success', 'Kategori baru berhasil ditambahkan!');
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
        $parent = Category::getParent()->orderBy('name', 'asc')->get();
        $category = Category::find($id);

        // dd($parent, $category);
        return view('categories.edit', ['category' => $category, 'parent' => $parent]);
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
        $request->validate([
            'name' => 'required|string|max:50|unique:categories,name,' . $id
        ]);

        $category = Category::find($id);
        $category->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
        ]);

        // dd($category);
        return redirect(route('category.index'))->with('success', 'Kategori berhasil diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::withCount(['child', 'product'])->find($id);

        if ($category->child_count == 0 && $category->product_count == 0) {
            $category->delete();

            // echo 'berhasil dihapus';
            return redirect(route('category.index'))->with('success', 'Kategori berhasil dihapus!');
        }

        // echo 'masih memiliki subkategori';
        return redirect(route('category.index'))->with('error', 'Kategori ini memiliki subkategori');
    }
}
