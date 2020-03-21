<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasComunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas_comuns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 40);
            $table->string('abertura', 20);
            $table->string('fechamento', 20);
            $table->string('status', 20);
            $table->string('descricao', 200);
            $table->string('observacoes', 400);

            $table->unsignedBigInteger('condominio_id');
            $table->foreign('condominio_id')
                ->references('id')
                ->on('condominios')
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
        Schema::dropIfExists('areas_comuns');
    }
}
