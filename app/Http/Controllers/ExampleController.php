<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        return view('ExampleController');
    }

    public function store(Request $request)
    {
        // Traitement des données reçues depuis le formulaire
        
        return redirect()->back()->with('success', 'Données enregistrées avec succès!');
    }
}
