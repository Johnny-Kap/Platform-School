<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Niveau;
use App\Models\Matiere;
use App\Models\Homework;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $works = Homework::all();

        return view('exercices', compact('works'));
    }

    public function eleve_index()
    {

        $works = Homework::all();

        return view('eleve.exercices', compact('works'));
    }


    public function add(){

        $matieres = Matiere::all();

        $niveaux = Niveau::all();

        return view('add.add_homework', compact('matieres', 'niveaux'));
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

        $works = new Homework();

        $works->matiere_id = $request->matiere;

        $works->niveau_id = $request->niveau;

        $works->upload = $path;

        $works->save();

        return back()->with('success','Créé avec succès!');

        echo 'succès';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function show(Homework $homework)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function edit(Homework $homework)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homework $homework)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homework $homework)
    {
        //
    }
}
