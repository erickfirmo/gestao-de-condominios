<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosDosCondominiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios_dos_condominios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('funcionario_id');
            $table->unsignedBigInteger('condominio_id');
            $table->timestamps();

            $table->foreign('funcionario_id')
            ->references('id')
            ->on('funcionarios')
            ->onDelete('cascade');

            $table->foreign('condominio_id')
            ->references('id')
            ->on('condominios')
            ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios_dos_condominios');
    }
}
