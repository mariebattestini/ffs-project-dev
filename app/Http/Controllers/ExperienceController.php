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

        return redirect()->route('experiences.index')->with('success', 'L\'expérience a été publiée avec succès.');
    }

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
    public function show(Experience $experience)
    {
        $experience->load('modifications');
        return view('experiences.show', compact('experience'));
    }
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
