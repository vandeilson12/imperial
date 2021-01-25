<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PedidosProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('pedidosproduto')){
            Schema::create('pedidosproduto', function (Blueprint $table) {
                $table->increments('id');
                $table->text('id_usuario')->nullable();
                $table->text('nome_produto')->nullable();
                $table->text('obs')->nullable();
                $table->text('quantidade')->nullable();
                $table->text('preco')->nullable();
                $table->text('status');
                $table->timestamps();
            });

            Schema::create('pedidosproduto', function (Blueprint $table) {
                $table->text('status')->enum('RE', 'PA', 'CA')->default('PROGRESS');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('pedidosproduto');
    }
}