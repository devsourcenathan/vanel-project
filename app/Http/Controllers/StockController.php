<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    function index()
    {
        $stocks = Stock::all();

        return view('pages.stock.index', compact('stocks'));
    }
    function store(Request $request)
    {
        $stock = new Stock();

        $stock->code = $request->code;
        $stock->ref = $request->ref;
        $stock->designation = $request->designation;
        $stock->categories = $request->categories;
        $stock->qte = $request->qte;
        $stock->prix_unitaire = $request->prix_unitaire;
        $stock->stock = $request->stock;
        $stock->duree_moyenne = $request->duree_moyenne;
        $stock->emplacement = $request->emplacement;
        $stock->prix_total = intval($request->qte) * intval($request->prix_unitaire);
        $stock->duree_total = intval($request->qte) * intval($request->duree_moyenne);

        $stock->save();

        return redirect('/stock');
    }

    public function show($id)
    {
        $stockItem = Stock::findOrFail($id);

        return response()->json($stockItem);
    }

    public function update(Request $request, $id)
    {
        $stockItem = Stock::findOrFail($id);

        // Logique de validation et de mise à jour de l'élément de stock

        return response()->json('Stock item updated successfully');
    }

    public function destroy($id)
    {
        $stockItem = Stock::findOrFail($id);

        // Logique de suppression de l'élément de stock

        return response()->json('Stock item deleted successfully');
    }
}
