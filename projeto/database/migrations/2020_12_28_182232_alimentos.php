<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alimentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('alimentos')){
            Schema::create('alimentos', function (Blueprint $table) {
                $table->increments('id');
                $table->text('name')->nullable();
                $table->text('preco')->nullable();
                $table->text('img')->nullable();
                $table->text('categoria')->nullable();
                $table->text('subcategoria')->nullable();
                $table->text('descricao')->nullable();
                $table->text('detalhes')->nullable();
                $table->timestamps();
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
        Schema::dropIfExists('alimentos');
    }
}
