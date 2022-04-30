<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnneeMatiereNiveau extends Model
{
    use HasFactory;

    public function niveaux(){
        return $this->belongsTo(Niveau::class, 'niveau_id', 'id');
    }

    public function matieres(){
        return $this->belongsTo(Matiere::class, 'matiere_id', 'id');
    }

    public function annees(){
        return $this->belongsTo(Annee_Aca::class, 'annee__aca_id', 'id');
    }
}
