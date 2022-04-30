<?php

namespace App\Models;

use App\Models\Niveau;
use App\Models\Matiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Homework extends Model
{
    use HasFactory;

    public function matieres(){
        return $this->belongsTo(Matiere::class, 'matiere_id', 'id');
    }

    public function niveaux(){
        return $this->belongsTo(Niveau::class, 'niveau_id', 'id');
    }
}
