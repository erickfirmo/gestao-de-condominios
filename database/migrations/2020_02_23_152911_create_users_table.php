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

            $table->unsignedBigInteger('funcionario_id');
            $table->foreign('funcionario_id')
                ->references('id')
                ->on('funcionarios');

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
