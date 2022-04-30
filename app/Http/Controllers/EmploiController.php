<?php

namespace App\Http\Controllers;

use App\Models\Annee_Aca;
use App\Models\Emploi;
use App\Models\Niveau;
use Illuminate\Http\Request;

class EmploiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emplois = Emploi::all();

        return view('admins.emploi', compact('emplois'));
    }

    public function add(){

        $niveaux = Niveau::all();

        $annees = Annee_Aca::all();

        return view('admins.add_emplois', compact('niveaux', 'annees'));
    }

    public function eleve_index(){

        $emplois = Emploi::all();

        return view('eleve.emploi', compact('emplois'));
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

        $emplois = new Emploi();

        $emplois->niveau_id = $request->niveau;

        $emplois->annee__aca_id = $request->annee;

        $emplois->upload = $path;

        $emplois->save();

        return back()->with('success','Créé avec succès!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emploi  $emploi
     * @return \Illuminate\Http\Response
     */
    public function show(Emploi $emploi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emploi  $emploi
     * @return \Illuminate\Http\Response
     */
    public function edit(Emploi $emploi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emploi  $emploi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emploi $emploi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emploi  $emploi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emploi $emploi)
    {
        //
    }
}
