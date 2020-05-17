<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDadosescolaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dadosescolares', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('curso_id')->unsigned();
            $table->tinyInteger('media');
            $table->tinyInteger('notaEstagio');
            $table->string('localEstagio');
            $table->tinyInteger('notaPap');
            $table->string('temaPap');
            $table->timestamps();
            
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');  
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dadosescolares');
    }
}
