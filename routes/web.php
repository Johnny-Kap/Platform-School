<?php

use App\Models\Niveau;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $niveaux = Niveau::all();
    return view('/auth/login', compact('niveaux'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/w', [App\Http\Controllers\HomeController::class, 'welcome'])->name('home.w');
Route::get('/matiere', [App\Http\Controllers\MatiereController::class, 'index'])->name('matiere');
Route::get('/cours', [App\Http\Controllers\AnneeMatiereNiveauController::class, 'index'])->name('cours');
Route::get('/presence', [App\Http\Controllers\PresenceController::class, 'index'])->name('presence');
Route::get('/homework', [App\Http\Controllers\HomeworkController::class, 'index'])->name('homework');
Route::get('/notes', [App\Http\Controllers\NoteController::class, 'index'])->name('note');
Route::get('/cours/add', [App\Http\Controllers\AnneeMatiereNiveauController::class, 'add'])->name('add.cours');
Route::post('/cours/added', [App\Http\Controllers\AnneeMatiereNiveauController::class, 'store'])->name('added.cours');
Route::get('/homework/add_homework', [App\Http\Controllers\HomeworkController::class, 'add'])->name('add_homework');
Route::post('/homework/add_homework/add', [App\Http\Controllers\HomeworkController::class, 'store'])->name('store.work');
Route::get('/matiere/add_matiere', [App\Http\Controllers\MatiereController::class, 'add'])->name('add_matiere');
Route::post('/matiere/add_matiere/store', [App\Http\Controllers\MatiereController::class, 'store'])->name('store_mat');
Route::post('/matiere/suivre_matire/store', [App\Http\Controllers\MatiereController::class, 'suivi_mat'])->name('suivi_mat');
Route::get('/notes/add_note', [App\Http\Controllers\NoteController::class, 'add'])->name('add_note');
Route::post('/notes/add_note/note', [App\Http\Controllers\NoteController::class, 'store'])->name('note_added');
Route::get('/presence/add_presence', [App\Http\Controllers\PresenceController::class, 'add'])->name('add_presence');
Route::get('/matiere/suivre_matiere', [App\Http\Controllers\MatiereController::class, 'suivre'])->name('suivre_mat');
Route::get('/eleve/cours', [App\Http\Controllers\AnneeMatiereNiveauController::class, 'eleve_index'])->name('eleve.cours');
Route::get('/eleve/homework', [App\Http\Controllers\HomeworkController::class, 'eleve_index'])->name('eleve.work');
Route::get('/eleve/reponse', [App\Http\Controllers\ReponseController::class, 'index'])->name('reponse');
Route::get('/eleve/reponse/add', [App\Http\Controllers\ReponseController::class, 'add'])->name('add.reponse');
Route::post('/eleve/reponse/add', [App\Http\Controllers\ReponseController::class, 'store'])->name('reponse.added');
Route::get('/eleve/notes', [App\Http\Controllers\NoteController::class, 'eleve_index'])->name('eleve.note');
Route::get('/eleve/emploi', [App\Http\Controllers\EmploiController::class, 'eleve_index'])->name('eleve.emploi');
Route::get('/admin/matiere', [App\Http\Controllers\MatiereController::class, 'admin_index'])->name('admin.matiere');
Route::get('/admin/eleve', [App\Http\Controllers\EleveController::class, 'index'])->name('admin.eleve');
Route::post('/admin/eleve/add', [App\Http\Controllers\EleveController::class, 'store'])->name('eleve.add');
Route::get('/admin/emploi', [App\Http\Controllers\EmploiController::class, 'index'])->name('admin.emploi');
Route::get('/admin/emploi/add', [App\Http\Controllers\EmploiController::class, 'add'])->name('add.emploi');
Route::post('/admin/emploi/added', [App\Http\Controllers\EmploiController::class, 'store'])->name('added.emploi');
Auth::routes();
