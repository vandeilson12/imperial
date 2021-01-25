<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bebidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('bebidas')){
        Schema::create('bebidas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('goiaba');
            $table->text('caja');
            $table->text('maracuja');
            $table->text('cupuacu');            
            $table->text('bacuri');            
            $table->text('lata_350');            
            $table->text('litro_1');
            $table->text('litro_2');
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
        Schema::dropIfExists('bebidas');
    }
}
