<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabalhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabalhos', function (Blueprint $table) {
            $table->id();            
            $table->boolean('estado');
            $table->string('nome',45)->unique();
            $table->string('descricao',220);
            $table->biginteger('empresa_id')->unsigned();
            $table->timestamps();

            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
        });

        Schema::create('trabalhos_area', function (Blueprint $table) {
            $table->id();                      
            $table->bigInteger('trabalho_id')->unsigned(); 
            $table->bigInteger('area_id')->unsigned(); 
            $table->timestamps();

            $table->foreign('trabalho_id')->references('id')->on('trabalhos')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabalhos');
    }
}
