<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_completo', 80);
            $table->string('identidade', 11);
            $table->enum('gerero', ['masc', 'fem', 'nd']);
            $table->enum('servico_temporario', ['s', 'n']);
            $table->unsignedInteger('duracao');
            $table->string('inicio', 30);
            $table->string('finalizacao', 30);
            $table->string('foto');
            $table->string('telefone_1', 11);
            $table->string('telefone_2', 11);
            $table->string('jornada_semanal', 30);
            $table->string('carga_horaria');
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
        Schema::dropIfExists('funcionarios');
    }
}
