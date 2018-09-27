<?php

namespace App\Http\Controllers;

use App\Models\Movement;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AddMovementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = DB::table('articles')->get();
        $units = DB::table('units')->get();
        $type = DB::table('movement_types')->get();
        $purchases = DB::table('purchases')->get();
        $sales = DB::table('sales')->get();

        return view('movement', [
            'articles' => $articles,
            'units' => $units,
            'type' => $type,
            'purchases' => $purchases,
            'sales' => $sales,
        ]);
    }

    public function store()
    {
        $movement = Movement::create([
            'article_id' => request('article'),
            'quantity' => request('quantity'),
            'date_time' => request('date'),
            'movement_type_id' => request('type'),
            'purchase_id' => request('purchase'),
            'sale_id' => request('sales'),
        ]);

        return redirect()->back()->with('message', 'Mouvement ajouter avec succès');
    }
}
