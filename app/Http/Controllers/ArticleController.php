<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::orderBy('created_at', 'desc')->simplePaginate(6);
        // dd($article);
        return view('article.index', ['article' => $article]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
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
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpg,png|max:5120',
        ]);

        try {
            $path = $request->file('image')->store('public/images');

            Article::create([
                'title' => $request->input('title'),
                'subtitle' => $request->input('subtitle'),
                'content' => $request->input('content'),
                'image' => Storage::url($path),
                'created_at' => Carbon::now()->toRfc2822String(),
                'updated_at' => Carbon::now()->toRfc2822String()
            ]);

            return redirect()->route('article.index')->with('success', 'Article created!');
        } catch (\Throwable $th) {
            return redirect()->route('article.create')->with('failed', $th);
        }
    }

    public function storeImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png|max:5120',
        ]);

        try {
            $path = $request->file('image')->store('public/images');
            return ['location' => Storage::url($path)];
        } catch (\Throwable $th) {
            return redirect()->route('article.create')->with('failed', $th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('article.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        // dd($article);
        return view('article.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $id)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,png|max:5120',
        ]);

        // kalau upload gambar
        if($request->file('image')){
            $path = $request->image->store('public/images');
        }else{
            $path = $id->image;
        }

        try {
            $id->update([
                'title' => $request->input('title'),
                'subtitle' => $request->input('subtitle'),
                'content' => $request->input('content'),
                'image' => $path,
                'updated_at' => Carbon::now()->toRfc2822String(),
            ]);

            return redirect()->route('article.index')->with('success', 'Artikel berhasil diedit!');
        } catch (\Throwable $th) {
            return redirect()->route('article.edit')->with('failed', $th);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $id)
    {
        $id->delete();

        return redirect()->route('article.index')->with('success', 'Artikel berhasil dihapus!');
    }
}
