<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('identidade', 11)->unique();
            $table->enum('genero', ['Masculino', 'Feminino', 'Não Definido']);
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

            $table->rememberToken();
            $table->timestamps();
            
            $table->unsignedBigInteger('role_id')->index();
            $table->foreign('role_id')
                ->references('id')
                ->on('roles')->default(3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
