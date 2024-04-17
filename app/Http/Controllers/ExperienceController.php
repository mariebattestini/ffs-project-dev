<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience; // Assurez-vous d'importer le modèle Experience

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $unpublishedExperiences = Experience::whereNull('published_at')->get();
        return view('dashboard', compact('unpublishedExperiences'));
        $experiences = Experience::all();
        return view('experiences.index', compact('experiences'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function publish(Experience $experience)
    {
        $experience->published_at = now();
        $experience->save();

        return redirect('/')->with('success', 'L\'expérience a été publiée avec succès.');
    }


    public function create()
    {
        //
    }
    public function edit(Experience $experience)
    {
        return view('experiences.edit', compact('experience'));
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
    // Contrôleur ExperienceController
    public function show(Experience $experience)
    {
        $experience->load('modifications');
        return view('experiences.show', compact('experience'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            // Ajoutez les règles de validation pour les autres champs
        ]);

        $experience->update($validatedData);

        return redirect()->route('experiences.show', $experience->id)->with('success', 'L\'expérience a été modifiée avec succès.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
