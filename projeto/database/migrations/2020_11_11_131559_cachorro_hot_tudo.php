<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CachorroHotTudo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('cachorro_hot_tudo')){
        Schema::create('cachorro_hot_tudo', function (Blueprint $table) {
            $table->increments('id');
            $table->text('carne_moida');
            $table->text('salada');
            $table->text('calabreza');
            $table->text('milho');            
            $table->text('ervilha');            
            $table->text('salsicha');            
            $table->text('queijo');            
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
        Schema::dropIfExists('cachorro_hot_tudo');
    }
}
