<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use App\Models\Reponse;
use App\Models\Annee_Aca;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reponses = Reponse::all();

        return view('eleve.reponses', compact('reponses'));
    }

    public function add(){

        $users = User::all();

        $matieres = Matiere::all();

        $annees = Annee_Aca::all();

        return view('eleve.add_reponse', compact('matieres', 'annees', 'users'));
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
        
        $user = Auth::user()->id;

        $filename = time() . '.' . $request->file->extension();

        $path = $request->file('file')->storeAs('avatars', $filename, 'public');

        // $name = Storage::disk('public')->put('work', $request->file);

        // $urls = Storage::url($name);

        $reponses = new Reponse();

        $reponses->user_id = $user;

        $reponses->matiere_id = $request->matiere;

        $reponses->annee__aca_id = $request->annee;

        $reponses->titre = $path;

        $reponses->save();

        return back()->with('success','Ajouté avec succès!');

        echo 'succès';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reponse  $reponse
     * @return \Illuminate\Http\Response
     */
    public function show(Reponse $reponse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reponse  $reponse
     * @return \Illuminate\Http\Response
     */
    public function edit(Reponse $reponse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reponse  $reponse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reponse $reponse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reponse  $reponse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reponse $reponse)
    {
        //
    }
}
