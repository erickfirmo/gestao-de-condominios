<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_do_entregador', 40);
            $table->string('receptor', 40);
            $table->string('descricao', 200);
            $table->string('status', 20);
            
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
        Schema::dropIfExists('entregas');
    }
}
