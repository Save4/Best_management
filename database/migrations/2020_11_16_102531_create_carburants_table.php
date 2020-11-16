<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarburantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carburants', function (Blueprint $table) {
          $table->bigIncrements('id');
         $table->unsignedBigInteger('mission_id');
         $table->unsignedBigInteger('fournisseur_id');
        $table->string('produit');
        $table->integer('quantite');
        $table->integer('prix_unitaire');
        $table->integer('prix_total');
        $table->string('unite');
        $table->timestamps();
        $table->foreign('mission_id')
               ->references('id')
               ->on('missions')
               ->onUpdate('cascade')
               ->onDelete('cascade');
      
       $table->foreign('fournisseur_id')
               ->references('id')
               ->on('fournisseurs')
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
        Schema::dropIfExists('carburants');
    }
}
