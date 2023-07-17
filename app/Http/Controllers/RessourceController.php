<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ressource;

class RessourceController extends Controller
{
    public function index()
    {
        $ressources = Ressource::all();

        return view('pages.ressources.index', compact('ressources'));
    }

    public function store(Request $request)
    {
        $ressource = new Ressource();

        $ressource->matricule = $request->matricule;
        $ressource->nom = $request->nom;
        $ressource->prenom = $request->prenom;
        $ressource->mobile = $request->mobile;
        $ressource->email = $request->email;
        $ressource->civilite = $request->civilite;
        $ressource->fonction = $request->fonction;
        $ressource->departement = $request->departement;
        $ressource->type_contrat = $request->type_contrat;

        $ressource->save();

        return redirect('/ressources');
    }

    public function show($id)
    {
        $ressource = Ressource::findOrFail($id);

        return response()->json($ressource);
    }

    public function update(Request $request, $id)
    {
        $ressource = Ressource::findOrFail($id);

        // Logique de validation et de mise à jour de la ressource

        return response()->json('Ressource updated successfully');
    }

    public function destroy($id)
    {
        $ressource = Ressource::findOrFail($id);

        // Logique de suppression de la ressource

        return response()->json('Ressource deleted successfully');
    }
}
