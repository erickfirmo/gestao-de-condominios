<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('numero');
            $table->string('bloco', 10);
            $table->string('andar', 3);
            $table->string('descricao', 200);
            $table->string('observacoes', 200);

            $table->unsignedBigInteger('condominio_id');
            $table->foreign('condominio_id')
                ->references('id')
                ->on('condominios')
                ->onDelete('cascade');;

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
        Schema::dropIfExists('imoveis');
    }
}
