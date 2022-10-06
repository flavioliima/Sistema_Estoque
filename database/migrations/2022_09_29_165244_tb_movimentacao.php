<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('tb_movimentacao', function (Blueprint $table){
            $table->bigIncrements('id');

            $table->integer('id_produto');
            $table->integer('id_tipo_estoque');
            $table->integer('id_categoria');

            $table->string('descricao');
            $table->date('data_entrada');
            $table->integer('quantidade');
            $table->decimal('valor_unitario', 12, 2);
            $table->string('tipo_movimentacao', 8);
            $table->decimal('subtotal', 12, 2);

            $table->foreign('id_produto')->references('id')->on('tb_estoque')->onDelete('cascade');
            $table->foreign('id_tipo_estoque')->references('id')->on('tb_tipo_estoque')->onDelete('cascade');
            $table->foreign('id_categoria')->references('id')->on('tb_categoria')->onDelete('cascade');
        });
    }


    public function down()
    {
        //
    }
};
