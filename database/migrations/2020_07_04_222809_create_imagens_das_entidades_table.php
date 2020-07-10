<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagensDasEntidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagens_das_entidades', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('imagem_id');
            $table->foreign('imagem_id')
                ->references('id')
                ->on('imagens')
                ->onDelete('cascade');

            // entidade_id
            $table->unsignedBigInteger('parent_id');
            $table->string('parent_class', 30);

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
        Schema::dropIfExists('imagens_das_entidades');
    }
}
