<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function matieres(){
        return $this->belongsTo(Matiere::class, 'matiere_id', 'id');
    }

    public function annee_acas(){
        return $this->belongsTo(Annee_Aca::class, 'annee__aca_id', 'id');
    }
}
