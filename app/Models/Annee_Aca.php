<?php

namespace App\Models;

use App\Models\Note;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Annee_Aca extends Model
{
    use HasFactory;

    public function notes(){
        return $this->hasMany(Note::class);
    }

    public function reponses(){
        return $this->hasMany(Reponse::class);
    }

    public function emplois(){
        return $this->hasMany(Emploi::class);
    }
}
