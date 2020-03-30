<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moradores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 80);
            $table->enum('genero', ['masc', 'fem', 'nd']);
            $table->string('observacoes', 400)->nullable();
            $table->boolean('proprietario')->nullable();

            $table->unsignedBigInteger('imovel_id');
            $table->foreign('imovel_id')
                ->references('id')
                ->on('imoveis')
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
        Schema::dropIfExists('moradores');
    }
}
