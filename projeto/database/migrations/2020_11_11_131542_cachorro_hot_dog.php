<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CachorroHotDog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('cachorro_hot_dog')){
        Schema::create('cachorro_hot_dog', function (Blueprint $table) {
            $table->increments('id');
            $table->text('carne_moida');
            $table->text('milho');
            $table->text('ervilha');
            $table->text('salsicha');            
            $table->text('salada');            
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
        Schema::dropIfExists('cachorro_hot_dog');
    }
}
