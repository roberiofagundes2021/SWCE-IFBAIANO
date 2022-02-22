<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatoSupervisorEstgiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contato__supervisor__estgios', function (Blueprint $table) {
            $table->id();
            $table->integer('telefone');
            $table->integer('celular');
            $table->string('email');
            $table->unsignedBigInteger('supervisor__estagiarios_id');
            $table->foreign('supervisor__estagiarios_id')->references('id')->on('supervisor__estagiarios');
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
        Schema::dropIfExists('contato__supervisor__estgios');
    }
}
