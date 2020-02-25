<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 30);
            $table->string('especie', 30);
            $table->string('raca', 30);
            $table->string('cor', 30);
            $table->string('descricao', 200);
            $trable->unsignedBigInteger('morador_id');
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
        Schema::dropIfExists('pets');
    }
}
