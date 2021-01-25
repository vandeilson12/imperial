<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('categoria')){
        Schema::create('categoria', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('hanburgue_id');
            $table->unsignedInteger('cachorro_quente_id');
            $table->unsignedInteger('pizza_id');
            $table->unsignedInteger('bebidas');
            $table->timestamps();

        });

        Schema::table('categoria', function (Blueprint $table) {

            $table->foreign('hanburgue_id')
                    ->references('id')
                    ->on('hanburgue')
                    ->onDelete('cascade');

            $table->foreign('cachorro_quente_id')
                    ->references('id')
                    ->on('cachorro_quente')
                    ->onDelete('cascade');

            $table->foreign('pizza_id')
                    ->references('id')
                    ->on('pizza')
                    ->onDelete('cascade');

            $table->foreign('bebidas_id')
                    ->references('id')
                    ->on('bebidas')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('categoria');
    }
}
