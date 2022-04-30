<?php

namespace App\Models;

use App\Models\Note;
use App\Models\Homework;
use App\Models\Presence;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matiere extends Model
{
    use HasFactory;

    public function presences(){
        return $this->hasMany(Presence::class);
    }

    public function notes(){
        return $this->hasMany(Note::class);
    }

    public function homeworks(){
        return $this->hasMany(Homework::class);
    }

    public function niveaux(){
        $this->belongsToMany(Niveau::class);
    }

    public function users(){
        $this->belongsToMany(User::class);
    }

    public function reponses(){
        return $this->hasMany(Reponse::class);
    }
}
