<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('foto_de_perfil');
            $table->timestamp('email_verified_at')->nullable();

            $table->unsignedBigInteger('funcionario_id');
            $table->foreign('funcionario_id')
                ->references('id')
                ->on('funcionarios');

            $table->string('api_token', 80)
                ->unique()
                ->nullable()
                ->default(null);

            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('admins');
    }
}