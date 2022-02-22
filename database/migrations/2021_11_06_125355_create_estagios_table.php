<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstagiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        Schema::create('estagios', function (Blueprint $table) {
            $table->id();
             $table->string('nome');
            $table->string('tipo_estagio');
            $table->unsignedBigInteger('coordenacao_curso_id');
            $table->foreign('coordenacao_curso_id')->references('id')->on('coordenacao__cursos');
            $table->unsignedBigInteger('nri_id');
            $table->foreign('nri_id')->references('id')->on('n_r_i_s');
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
        Schema::dropIfExists('estagios');
    }
}
