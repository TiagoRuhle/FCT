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
            $table->string('contato');
            $table->date('dtNascimento');            
            $table->string('foto')->default('imagens/defaultuser.png');
            $table->timestamps();

            $table->foreign('estadoaluno_id')->references('id')->on('estadosalunos')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('tipotrabalho_id')->references('id')->on('tipostrabalhos')->onDelete('cascade');
            $table->foreign('localizacao_id')->references('id')->on('localizacaos')->onDelete('cascade');
        });

        Schema::create('alunos_localizacaos', function (Blueprint $table) {
            $table->id();                      
            $table->bigInteger('aluno_id')->unsigned(); 
            $table->bigInteger('localizacao_id')->unsigned(); 
            $table->timestamps();

            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
            $table->foreign('localizacao_id')->references('id')->on('localizacaos')->onDelete('cascade');
        });

        Schema::create('alunos_area', function (Blueprint $table) {
            $table->id();                      
            $table->bigInteger('aluno_id')->unsigned(); 
            $table->bigInteger('area_id')->unsigned(); 
            $table->timestamps();

            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
        });

        Schema::create('alunos_tipostrabalhos', function (Blueprint $table) {
            $table->id();                      
            $table->bigInteger('aluno_id')->unsigned(); 
            $table->bigInteger('tipotrabalhos_id')->unsigned(); 
            $table->timestamps();

            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
            $table->foreign('tipotrabalhos_id')->references('id')->on('tipostrabalhos')->onDelete('cascade');
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
