<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstagiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estagiarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome',60);
            $table->unsignedBigInteger('estagio_id');
            $table->foreign('estagio_id')->references('id')->on('estagios');
            $table->unsignedBigInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->unsignedBigInteger('professor_orientador_id');
            $table->foreign('professor_orientador_id')->references('id')->on('professor__orientadors');
            $table->unsignedBigInteger('supervisor_estagiario_id');
            $table->foreign('supervisor_estagiario_id')->references('id')->on('supervisor__estagiarios');
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
        Schema::dropIfExists('estagiarios');
    }
}
