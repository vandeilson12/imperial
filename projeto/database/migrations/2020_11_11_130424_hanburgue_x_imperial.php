<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HanburgueXImperial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('hanburgue_x_imperial')){
        Schema::create('hanburgue_x_imperial', function (Blueprint $table) {
            $table->increments('id');
            $table->text('carnes');
            $table->text('salada');
            $table->text('ovos');
            $table->text('batata_palha');
            $table->text('cheddar');
            $table->text('calabreza');
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
        Schema::dropIfExists('hanburgue_x_imperial');
    }
}
