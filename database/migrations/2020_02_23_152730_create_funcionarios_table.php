<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_completo', 80);
            $table->string('identidade', 11)->unique();
            $table->enum('genero', ['masc', 'fem', 'nd']);
            $table->string('entrada', 30);
            $table->string('saida', 30);
            $table->string('foto')->nullable();
            $table->string('telefone_1', 11);
            $table->string('telefone_2', 11)->nullable();
            $table->string('cargo', 30);

            $table->unsignedBigInteger('condominio_id');
            $table->foreign('condominio_id')
                ->references('id')
                ->on('condominios');

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
        Schema::dropIfExists('funcionarios');
    }
}
