<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $articles = Article::orderBy('id','desc')->paginate(6);
        return view('artikel.artikel' , ['artikel'=> $articles]);
    }

    public function show($slug)
    {
        $article = Article::where('slug',$slug)->first();
        return view('artikel.subartikel', compact('article'));
    }

    public function create()
    {
        return view('artikel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tittle' => 'required|max:255|min:3',
            'subject' => 'required',
        ]);
         Article::create([
            'tittle'=> $request->tittle,
            'slug'=>Str::slug($request->tittle, '-'),
            'subject'=> $request->subject


         ]);

        // $article  = new Article;
        // $article -> tittle = $request -> tittle;
        // $article -> subject = $request -> subject;
        // $article -> save();

        return redirect('/artikel');

    }
    public function edit($id)
    {
        $artikel = Article::find($id);

        return view('artikel.edit', ['artikel'=> $artikel]);
    }

    public function update(Request $request, $id)
    {
        // $artikel = Article::find($id);
        // $artikel -> tittle = $request -> tittle;
        // $artikel -> subject = $request -> subject;
        // $artikel -> save();

        Article::find($id)->update([
            'tittle'=> $request->tittle,
            'subject'=> $request->subject

        ]);
        return redirect('/artikel');
    }

    public function destroy($id)
    {

        Article::find($id)->delete();
        return redirect('/artikel');


    }
}
