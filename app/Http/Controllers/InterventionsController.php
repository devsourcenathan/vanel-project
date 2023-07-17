<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intervention;

class InterventionsController extends Controller
{
    public function index()
    {
        $interventions = Intervention::all();

        return view('pages.interventions.index', compact('interventions'));
    }

    public function store(Request $request)
    {
        $intervention = new Intervention();

        $intervention->anomalie = $request->anomalie;
        $intervention->description = $request->description;
        $intervention->type = $request->type;
        $intervention->code = $request->code;
        $intervention->nom = $request->nom;
        $intervention->sous_module = $request->sous_module;
        $intervention->status = $request->status;
        $intervention->Commentaire = $request->Commentaire;
        $intervention->matricule = $request->matricule;

        $intervention->save();

        return redirect('/interventions');
    }

    public function show($id)
    {
        $intervention = Intervention::findOrFail($id);

        return response()->json($intervention);
    }

    public function update(Request $request, $id)
    {
        $intervention = Intervention::findOrFail($id);

        // Logique de validation et de mise à jour de l'intervention

        return response()->json('Intervention updated successfully');
    }

    public function destroy($id)
    {
        $intervention = Intervention::findOrFail($id);

        // Logique de suppression de l'intervention

        return response()->json('Intervention deleted successfully');
    }
}
