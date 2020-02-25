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
            $table->string('descricao', 400);
            $table->string('status', 20);
            $table->string('data', 20);
            $table->string('hora', 20);
            $table->enum('gravidade', ['baixa', 'media', 'alta']);

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->unsignedBigInteger('condominio_id');
            $table->foreign('condominio_id')
                ->references('id')
                ->on('condominios');
                
            $table->unsignedBigInteger('morador_id');
            $table->foreign('morador_id')
                ->references('id')
                ->on('moradores');


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
