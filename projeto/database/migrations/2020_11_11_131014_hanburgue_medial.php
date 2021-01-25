<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HanburgueMedial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('hanburgue_medial')){
        Schema::create('hanburgue_medial', function (Blueprint $table) {
            $table->increments('id');
            $table->text('carnes');
            $table->text('salada');
            $table->text('queijo');
            $table->text('presunto');
            $table->text('ovo');
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
        Schema::dropIfExists('hanburgue_medial');
    }
}
