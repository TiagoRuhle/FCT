<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('estadoaluno_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('tipotrabalho_id')->unsigned();
            $table->bigInteger('localizacao_id')->unsigned();
            $table->string('contatoAluno');
            $table->date('dtNascimento');
            $table->string('nomeAluno');
            $table->timestamps();

            $table->foreign('estadoaluno_id')->references('id')->on('estadosalunos')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('tipotrabalho_id')->references('id')->on('tipostrabalhos')->onDelete('cascade');
            $table->foreign('localizacao_id')->references('id')->on('localizacoes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
