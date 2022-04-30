<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use App\Models\Matiere;
use App\Models\MatiereUser;
use Illuminate\Http\Request;
use App\Models\MatiereNiveauUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user()->id;

        $shows = MatiereNiveauUser::where('user_id','=', $user)->get();

        return view('matiere' , compact('shows'));
    }

    public function add(){
        return view('add.add_matiere');
    }

    public function suivre(){

        $matieres = Matiere::all();

        $niveaux = Niveau::all();

        $users = User::all();

        return view('add.suivre_mat', compact('matieres', 'niveaux', 'users'));
    }

    public function suivi_mat(Request $request){

        $user = Auth::user()->id;

        $suivi = new MatiereNiveauUser();

        $suivi->matiere_id = $request->matiere;

        $suivi->niveau_id = $request->niveau;

        $suivi->user_id = $user;

        $suivi->save();

        return back()->with('success','Ajouté avec succès!');

        echo 'succès';
    }

    public function admin_index(){
        $shows = Matiere::all();

        return view('admins.AdminMatiere', compact('shows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matiere = new Matiere();

        $matiere->libelle_mat = $request->libelle;

        $matiere->save();

        return back()->with('success','Créé avec succès!');

        echo 'succès';
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function show(Matiere $matiere)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function edit(Matiere $matiere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matiere $matiere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matiere $matiere)
    {
        //
    }

    public function matiere_eleve(){
        $matieres = Matiere::all();

        
    }
}
