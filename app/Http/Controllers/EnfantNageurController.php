<?php

namespace App\Http\Controllers;

use App\Models\EnfantNageur;
use Illuminate\Http\Request;

class EnfantNageurController extends Controller
{

    public function NewEnfantNageur(Request $request)
    {
        $request -> validate([
            'nom' => 'required',
            'prenoms' => 'required',
            'nom_du_parent' => 'required',
            'prenoms_du_parent' => 'required',
            'email' => 'required|email',
            'programme_de_lenfant' => 'required',

        ]);

        $EnfantNageur = new EnfantNageur();
        $EnfantNageur -> nom = $request -> nom;
        $EnfantNageur -> prenoms = $request -> prenoms;
        $EnfantNageur -> nom_du_parent = $request -> nom;
        $EnfantNageur -> prenoms_du_parent = $request -> prenoms;
        $EnfantNageur -> email = $request -> email;
        $EnfantNageur -> programme_de_lenfant = $request -> programme;
        $EnfantNageur-> save();

        //return view('Accueil');

        return redirect('/FormEnfant') -> with('status', 'Votre inscription a ete validee avec succes.');

    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EnfantNageur $enfantNageur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EnfantNageur $enfantNageur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EnfantNageur $enfantNageur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EnfantNageur $enfantNageur)
    {
        //
    }
}
