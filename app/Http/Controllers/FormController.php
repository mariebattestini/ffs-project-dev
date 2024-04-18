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
        // Validation des données
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'numero' => 'required|numeric|digits:10', // Numéro de téléphone à 10 chiffres
            'email' => 'required|email', // Format d'email valide
            'date' => 'required|date_format:Y-m-d', // Format de date attendu : YYYY-MM-DD
            'activite' => 'required',
            'nom_site_pratique' => 'required',
            'commune' => 'required',
            'description' => 'required',
            'analyse_evenement' => 'required',
            'choix' => 'required',
            'titre' => 'required'
        ]);


        // Création d'une nouvelle instance du modèle Form
        $form = Form::create($validatedData);

        // Ajouter un message de succès à la session flash
        $request->session()->flash('success', 'Expérience enregistrée avec succès.');

        // Rediriger vers la page d'accueil
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
