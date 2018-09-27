<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = DB::table('articles')->get();

        return view('articles', ['articles' => $articles]);
    }

    public function add()
    {
        $article = Article::create([
            'name' => request('name'),
            'category_id' => (int) request('category'),
            'unit_id' => (int) request('units'),
            'sales_price' => (float) request('price'),
        ]);
        session()->flash('message', 'Article ajouter avec succée');

        return redirect()->back()->with('message', 'Article ajouter avec succès');
    }

    public function updateShow($id)
    {
        $article = Article::find($id);
        $category = DB::table('categories')->get();
        $units = DB::table('units')->get();

        return view('update_article', ['article' => $article, 'category' => $category, 'units' => $units]);
    }

    public function modify(Request $request, $id)
    {
        $article = Article::find($id);
        $name = $article->name;
        $article->name = request('name');
        $article->category_id = request('category');
        $article->unit_id = request('units');
        $article->sales_price = request('price');
        $article->save();

        return redirect('articles')->with('message', 'Article '.$name.' modifier avec succées');
    }

    public function delete(Request $request, $id)
    {
        $article = Article::find($id);
        $name = $article->name;
        $article->delete();

        return redirect('articles')->with('message', 'Article '.$name.' supprimer avec succées ');
    }
}
