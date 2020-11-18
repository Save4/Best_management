<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutreConsommationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autre_consommations', function (Blueprint $table) {
            $table->bigIncrements('id');
          $table->unsignedBigInteger('vehicule_id');
         $table->unsignedBigInteger('fournisseur_id');
         $table->string('type_consommation');
         $table->integer('montant');
         $table->string('monaie');
         $table->date('date_fin');
         $table->timestamps();
         $table->foreign('vehicule_id')
                ->references('id')
                ->on('vehicules')
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
        Schema::dropIfExists('autre_consommations');
    }
}
