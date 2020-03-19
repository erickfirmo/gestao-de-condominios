<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('modelo', 40);
            $table->enum('tipo', ['Carro', 'Motocicleta', 'Van', 'Mini Van', 'Micro-Ônibus', 'Outros']);
            $table->string('cor', 20);
            $table->string('descricao', 200);
            $table->string('placa', 7)->unique();
            $table->unsignedBigInteger('morador_id');
            $table->timestamps();

            $table->foreign('morador_id')
                ->references('id')
                ->on('moradores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
}
