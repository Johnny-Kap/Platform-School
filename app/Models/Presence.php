<?php

namespace App\Models;

use App\Models\User;
use App\Models\Matiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Presence extends Model
{
    use HasFactory;

    public function matieres(){
        return $this->belongsTo(Matiere::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
