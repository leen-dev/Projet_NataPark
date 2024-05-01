<?php

namespace App\Http\Controllers;

use App\Models\Nageur;
use Illuminate\Http\Request;

class NageurController extends Controller
{
    public function NewNageur(Request $request)
    {
        $request -> validate([
            'nom' => 'required',
            'prenoms' => 'required',
            'email' => 'required|email',
            'programme' => 'required',

        ]);

        $Nageur = new Nageur();
        $Nageur -> nom = $request -> nom;
        $Nageur -> prenoms = $request -> prenoms;
        $Nageur -> email = $request -> email;
        $Nageur -> programme = $request -> programme;
        $Nageur -> save();

        //return view('Accueil');

        return redirect('/Formulaire') -> with('status', 'Votre inscription a ete validee avec succes.');

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
    public function show(Nageur $nageur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nageur $nageur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nageur $nageur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nageur $nageur)
    {
        //
    }
}
