<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondominiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condominios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 60)->unique();
            $table->string('descricao', 280)->nullable();
            $table->string('cep', 9);
            $table->string('logradouro', 80);
            $table->unsignedInteger('numero');
            $table->string('bairro', 40);
            $table->string('cidade', 40);
            $table->unsignedBigInteger('uf_id');
            $table->string('complemento', 120)->nullable();
            $table->string('observacoes', 200)->nullable();
            $table->unsignedBigInteger('empresa_id');

            $table->foreign('uf_id')
                ->references('id')
                ->on('ufs');

            $table->foreign('empresa_id')
                ->references('id')
                ->on('empresas')
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
        Schema::dropIfExists('condominios');
    }
}
