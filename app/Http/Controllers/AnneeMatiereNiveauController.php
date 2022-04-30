<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use App\Models\Matiere;
use App\Models\Annee_Aca;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;
use App\Models\AnneeMatiereNiveau;
use Illuminate\Support\Facades\Storage;

class AnneeMatiereNiveauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $cours = AnneeMatiereNiveau::all();
        
        return view('cours', compact('cours'));
    }

    public function eleve_index()
    {
        $cours = AnneeMatiereNiveau::all();

        return view('eleve.cours', compact('cours'));
    }


    public function add(){

        $niveaux = Niveau::all();

        $matieres = Matiere::all();

        $annees = Annee_Aca::all();

        return view('add.add_cours', compact('niveaux', 'matieres', 'annees'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = time() . '.' . $request->file->extension();

        $path = $request->file('file')->storeAs('avatars', $filename, 'public');

        // $name = Storage::disk('public')->put('work', $request->file);

        // $urls = Storage::url($name);

        $cours = new AnneeMatiereNiveau();

        $cours->nom = $request->nom;

        $cours->niveau_id = $request->niveau;

        $cours->matiere_id = $request->matiere;

        $cours->annee__aca_id = $request->annee;

        $cours->upload = $path;

        $cours->save();

        return back()->with('success','Créé avec succès!');

        echo 'succès';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnneeMatiereNiveau  $anneeMatiereNiveau
     * @return \Illuminate\Http\Response
     */
    public function show(AnneeMatiereNiveau $anneeMatiereNiveau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnneeMatiereNiveau  $anneeMatiereNiveau
     * @return \Illuminate\Http\Response
     */
    public function edit(AnneeMatiereNiveau $anneeMatiereNiveau)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnneeMatiereNiveau  $anneeMatiereNiveau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnneeMatiereNiveau $anneeMatiereNiveau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnneeMatiereNiveau  $anneeMatiereNiveau
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnneeMatiereNiveau $anneeMatiereNiveau)
    {
        //
    }
}
