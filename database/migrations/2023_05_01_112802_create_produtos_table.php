<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('codigo')->index();
            $table->string('descricao');
            $table->mediumText('resumo');
            $table->decimal('preco', 8, 2);
            $table->timestamps();
            $table->unsignedBigInteger('cod_cor');
            $table->unsignedBigInteger('cod_categoria');
            $table->foreign('cod_cor')->references('codigo')->on('cores');
            $table->foreign('cod_categoria')->references('codigo')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
