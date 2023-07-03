<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_produtos', function (Blueprint $table) {
            $table->increments('codigo');
            $table->unsignedBigInteger('codproduto')->unsigned();
            $table->string('foto');
            $table->timestamps();

            $table->foreign('codproduto')->references('codigo')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foto_produtos');
    }
}
