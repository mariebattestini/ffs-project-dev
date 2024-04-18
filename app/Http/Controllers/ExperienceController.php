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
        return view('edit', compact('experience'));
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
        // Mettre à jour les champs de l'expérience avec les données du formulaire
        $experience->update($request->all());

        // Enregistrer la modification dans le tableau
        $modification = new Modification();
        $modification->experience_id = $experience->id;
        $modification->moderateur_id = Auth::id(); // Supposant que vous avez un utilisateur authentifié
        $modification->save();

        return redirect()->back()->with('success', 'L\'expérience a été modifiée avec succès.');

    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
