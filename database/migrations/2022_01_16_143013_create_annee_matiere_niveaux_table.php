<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnneeMatiereNiveauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annee_matiere_niveaux', function (Blueprint $table) {
            $table->id();
            $table->foreignId('annee__aca_id')->constrained();
            $table->foreignId('matiere_id')->constrained();
            $table->foreignId('niveau_id')->constrained();
            $table->string('nom');
            $table->string('upload');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annee_matiere_niveaux');
    }
}
