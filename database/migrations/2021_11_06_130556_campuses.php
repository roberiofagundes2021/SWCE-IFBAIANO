<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Campuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('campuses', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('diretor');
            $table->unsignedBigInteger('instituicao_id');
            $table->foreign('instituicao_id')->references('id')->on('instituicaos');
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
        //
    }
}
