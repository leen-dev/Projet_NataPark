<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function NewMessage(Request $request)
    {
        $request -> validate([
            'nom' => 'required',
            'prenoms' => 'required',
            'email' => 'required|email',
            'message' => 'required',

        ]);

        $Message = new Message();
        $Message -> nom = $request -> nom;
        $Message -> prenoms = $request -> prenoms;
        $Message -> email = $request -> email;
        $Message -> message = $request -> message;
        $Message -> save();

        //return view('Accueil');

        return redirect('/Contacts') -> with('status', 'Votre message a ete envoyee avec succes.');

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
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
