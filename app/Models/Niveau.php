<?php

namespace App\Models;

use App\Models\Homework;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Niveau extends Model
{
    use HasFactory;

    public function homeworks(){
        return $this->hasMany(Homework::class);
    }

    public function matieres(){
        $this->belongsToMany(Matiere::class);
    }

    public function users(){
        $this->belongsToMany(User::class);
    }

    public function emplois(){
        return $this->hasMany(Emploi::class);
    }
}
