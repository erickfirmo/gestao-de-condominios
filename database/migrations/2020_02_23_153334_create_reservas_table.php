<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('observacoes', 200);
            $table->string('inicio', 20);
            $table->string('termino', 20);
            $table->string('status', 20);
            
            $table->unsignedBigInteger('area_comum_id');
            $table->foreign('area_comum_id')
                ->references('id')
                ->on('areas_comuns');
            
            $table->unsignedBigInteger('morador_id');
            $table->foreign('morador_id')
                ->references('id')
                ->on('moradores');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('user');

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
        Schema::dropIfExists('reservas');
    }
}
