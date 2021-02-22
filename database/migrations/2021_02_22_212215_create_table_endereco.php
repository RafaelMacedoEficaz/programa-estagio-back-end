<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEndereco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('streets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rua', 250);
            $table->string('numero', 20);
            $table->string('complemento', 250);
            $table->string('bairro', 250);
            $table->string('cidade', 150);
            $table->string('uf', 2);
            $table->integer('user_test_id')->unsigned();
            $table->foreign('user_test_id')
                    ->references('id')
                    ->on('users_tests');
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
        Schema::dropIfExists('street');
    }
}
