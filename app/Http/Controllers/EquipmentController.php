<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    function index()
    {
        $equipments = Equipment::all();

        return view('pages.equipment', compact('equipments'));
    }
    function store(Request $request)
    {
        $stock = new Equipment();

        $stock->code = $request->code;
        $stock->nom = $request->nom;
        $stock->marque = $request->marque;
        $stock->description = $request->description;
        $stock->prix_unitaire = $request->prix_unitaire;
        $stock->localisation = $request->localisation;
        $stock->vie = $request->vie;
        $stock->heures = $request->heures;
        $stock->date_exploitation = $request->date_exploitation;
        $stock->date_achat = $request->date_achat;
        $stock->etat = $request->etat;

        $stock->save();

        return redirect('/equipment');
    }
}
