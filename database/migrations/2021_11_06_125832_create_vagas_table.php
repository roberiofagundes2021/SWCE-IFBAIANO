<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
             $table->string('descricao');
            $table->integer('quantidade_vagas');
            $table->unsignedBigInteger('estagio_id');
            $table->foreign('estagio_id')->references('id')->on('estagios');
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
        Schema::dropIfExists('vagas');
    }
}
