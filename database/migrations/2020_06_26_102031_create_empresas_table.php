<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();            
            $table->string('email',60)->unique();
            $table->string('nome',45)->unique();
            $table->string('nTelemovel',16)->unique();
            $table->string('morada',180);
            $table->boolean('estado');
            $table->string('descricao',220);
            $table->string('cdPostal',16);
            $table->string('contacto',45)->unique();
            $table->string('nContribuinte',16)->unique();
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
        Schema::dropIfExists('empresas');
    }
}
