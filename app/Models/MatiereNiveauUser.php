<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatiereNiveauUser extends Model
{
    use HasFactory;

    public function matieres(){
       return $this->belongsTo(Matiere::class, 'matiere_id', 'id');
    }

    public function niveaux(){
       return $this->belongsTo(Niveau::class, 'niveau_id', 'id');
    }

    public function users(){
       return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
