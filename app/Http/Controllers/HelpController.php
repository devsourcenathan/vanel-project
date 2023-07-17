<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Help;

class HelpController extends Controller
{
    public function index()
    {
        $helpItems = Help::all();
        return view('pages.help', compact('helpItems'));
    }

    public function store(Request $request)
    {
        // Logique de validation et de création d'un nouvel élément d'aide

        return response()->json('Help item created successfully');
    }

    public function show($id)
    {
        $helpItem = Help::findOrFail($id);

        return response()->json($helpItem);
    }

    public function update(Request $request, $id)
    {
        $helpItem = Help::findOrFail($id);

        // Logique de validation et de mise à jour de l'élément d'aide

        return response()->json('Help item updated successfully');
    }

    public function destroy($id)
    {
        $helpItem = Help::findOrFail($id);

        // Logique de suppression de l'élément d'aide

        return response()->json('Help item deleted successfully');
    }
}
