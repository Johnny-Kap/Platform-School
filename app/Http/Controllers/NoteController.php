<?php

namespace App\Http\Controllers;

use App\Models\Annee_Aca;
use App\Models\Homework;
use App\Models\Matiere;
use App\Models\Niveau;
use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $notes = Note::all();

        return view('notes', compact('notes'));
    }

    public function eleve_index(){

        $user = Auth::user()->id;

        $notes = Note::where('user_id','=', $user)->get();

        return view('eleve.notes', compact('notes'));
    }

    public function add(){

        
        $matieres = Matiere::all();

        $annees = Annee_Aca::all();

        $users = User::all();

        return view('add.add_note', compact('matieres', 'annees', 'users'));
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
        $notes = new Note();

        $notes->user_id = $request->user;

        $notes->matiere_id = $request->matiere;

        $notes->annee__aca_id = $request->annee;

        $notes->note = $request->note;

        $notes->save();

        return back()->with('success','Ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        //
    }
}
