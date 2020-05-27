<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestadoresDeServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestadores_de_servicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 40);
            $table->string('entrada', 20);
            $table->string('saida', 20);
            $table->string('identidade', 11);

            $table->unsignedBigInteger('morador_id');
            $table->foreign('morador_id')
                ->references('id')
                ->on('moradores')
                ->onDelete('cascade');
                
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
        Schema::dropIfExists('prestadores_de_servicos');
    }
}
