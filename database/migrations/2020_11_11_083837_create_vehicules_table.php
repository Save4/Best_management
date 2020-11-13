<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('modele_id');
         $table->unsignedBigInteger('categorie_id');
         $table->string('boite_vitesse');
         $table->string('type_moteur');
         $table->string('plaque')->unique();
         $table->integer('nombre_place');
         $table->timestamps();
         $table->foreign('modele_id')
                ->references('id')
                ->on('modeles')
                ->onUpdate('cascade')
                ->onDelete('cascade');
         $table->foreign('categorie_id')
                ->references('id')
                ->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicules');
    }
}
