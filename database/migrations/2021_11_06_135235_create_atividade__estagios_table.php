<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtividadeEstagiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividade__estagios', function (Blueprint $table) {
            $table->id();
            $table->string('nome_atividade');
            $table->unsignedBigInteger('estagiario_id');
            $table->foreign('estagiario_id')->references('id')->on('estagiarios');
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
        Schema::dropIfExists('atividade__estagios');
    }
}
