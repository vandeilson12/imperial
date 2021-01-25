<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Encomendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('encomendas')){
        Schema::create('encomendas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('pastel')->nullable();
            $table->text('coxinha')->nullable();
            $table->text('bola_de_queijo')->nullable();
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
        Schema::dropIfExists('encomendas');
    }
}
