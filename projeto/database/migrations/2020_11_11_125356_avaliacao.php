<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Avaliacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('avaliacao')){
        Schema::create('avaliacao', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('compra_id');
            $table->unsignedInteger('usuario_id');
            $table->timestamps();
        });

         Schema::table('avaliacao', function (Blueprint $table) {
            $table->foreign('compra_id')
                    ->references('id')
                    ->on('compra')
                    ->onDelete('cascade');

            $table->foreign('usuario_id')
                    ->references('id')
                    ->on('cliente')
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
        Schema::dropIfExists('avaliacao');
    }
}
