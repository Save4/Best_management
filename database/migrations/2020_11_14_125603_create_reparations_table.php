<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReparationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparations', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('vehicule_id');
          $table->unsignedBigInteger('chauffeur_id');
         $table->string('type_reparation');
         $table->string('piece');
         $table->integer('prix_piece');
         $table->integer('main_oeuvre');
         $table->integer('montant_total');
         $table->timestamps();
         $table->foreign('vehicule_id')
                ->references('id')
                ->on('vehicules')
                ->onUpdate('cascade')
                ->onDelete('cascade');
         $table->foreign('chauffeur_id')
                ->references('id')
                ->on('chauffeurs')
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
        Schema::dropIfExists('reparations');
    }
}
