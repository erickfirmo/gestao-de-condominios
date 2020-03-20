<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('razao_social', 60)->unique();
            $table->string('nome_fantasia', 60);
            $table->string('cnpj', 18)->unique();
            $table->string('email', 40);
            $table->string('telefone_1', 20);
            $table->string('telefone_2', 20)->nullable();
            $table->string('responsavel_para_contato', 50);
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
        Schema::dropIfExists('empresas');
    }
}
