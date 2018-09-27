<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AddArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = DB::table('categories')->get();
        $units = DB::table('units')->get();

        return view('add_article', ['category' => $category, 'units' => $units]);
    }

    public function store()
    {
        $article = Article::create([
            'name' => request('name'),
            'category_id' => (int) request('category'),
            'unit_id' => (int) request('units'),
            'sales_price' => (float) request('price'),
        ]);
        session()->flash('message', 'Article ajouter avec succée');

        return redirect()->back()->with('message', 'Articlle ajouter avec succées');
    }
}
