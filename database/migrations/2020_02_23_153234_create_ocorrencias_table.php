<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcorrenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocorrencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 40);
            $table->string('descricao', 400);
            $table->string('data', 20);
            $table->string('hora', 20);
            $table->enum('gravidade', ['baixa', 'média', 'alta']);
                
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
        Schema::dropIfExists('ocorrencias');
    }
}
