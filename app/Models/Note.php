<?php

namespace App\Models;

use App\Models\User;
use App\Models\Matiere;
use App\Models\Annee_Aca;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    public function matieres(){
        return $this->belongsTo(Matiere::class, 'matiere_id', 'id');
    }

    public function annee_acas(){
        return $this->belongsTo(Annee_Aca::class, 'annee__aca_id', 'id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
