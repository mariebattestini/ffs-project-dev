<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;


class FormController extends Controller
{
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

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'date' => 'required|date_format:Y-m-d',
            'activite' => 'required',
            'nom_site_pratique' => 'required',
            'commune' => 'required',
            'description' => 'required',
            'analyse_evenement' => 'required',
            'choix' => 'required',
            'titre' => 'required',
        ]);


        $form = Form::create($validatedData);

        $request->session()->flash('success', 'Expérience enregistrée avec succès.');

        return redirect('/');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
