<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatoProfessorOrientadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contato__professor__orientadors', function (Blueprint $table) {
            $table->id();
             $table->integer('celular');
            $table->integer('telefone');
            $table->string('email');
            $table->unsignedBigInteger('orientadors_id');
            $table->foreign('orientadors_id')->references('id')->on('professor__orientadors');
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
        Schema::dropIfExists('contato__professor__orientadors');
    }
}
