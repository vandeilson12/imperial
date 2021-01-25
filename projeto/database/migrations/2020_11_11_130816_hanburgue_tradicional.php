<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HanburgueTradicional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        if(!Schema::hasTable('hanburgue_tradicional')){
        Schema::create('hanburgue_tradicional', function (Blueprint $table) {
            $table->increments('id');
            $table->text('salada');
            $table->text('carnes');
            $table->text('queijo');
            $table->text('presunto');
            $table->text('ovos');
            $table->text('batata_palha');            
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
        Schema::dropIfExists('hanburgue_tradicional');
    }
}
