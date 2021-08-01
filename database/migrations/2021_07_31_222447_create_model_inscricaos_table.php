<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelInscricaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('inscricoes', function (Blueprint $table) {
                $table->id();
                $table->string('nomeAluno');
                $table->string('email')->unique();
                $table->string('cpf');
                $table->string('endereco');
                $table->string('empresa');
                $table->string('telefone');
                $table->string('celular');
                $table->string('tipo');
                $table->bigInteger('cursoId')->unsigned(); 
                $table->foreign('cursoId')->references('id')->on('cursos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('inscricoes');
    }
}
