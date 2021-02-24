<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('seu_email', 250);
            $table->string('nome', 200);
            $table->string('email', 250);
            $table->string('telefone', 15);
            $table->string('rua', 250);
            $table->string('numero', 20);
            $table->string('complemento', 250);
            $table->string('bairro', 250);
            $table->string('cep', 9);
            $table->string('cidade', 150);
            $table->string('uf', 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
