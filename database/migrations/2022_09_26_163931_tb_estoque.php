<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('tb_estoque', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('id_tipo_estoque');
            $table->integer('id_categoria');
            $table->string('nome_produto', 300);
            $table->string('fornecedor', 300);
            $table->date('data');

            $table->foreign('id_tipo_estoque')->references('id')->on('tb_estoque')->onDelete('cascade');
            $table->foreign('id_categoria')->references('id')->on('tb_categoria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
