<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CachorroQuente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('cachorro_quente')){
        Schema::create('cachorro_quente', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('hot_dog_id');
            $table->unsignedInteger('hot_tudo_id');
            $table->timestamps();

            $table->foreign('hot_dog_id')
                    ->references('id')
                    ->on('cachorro_hot_dog')
                    ->onDelete('cascade');

            $table->foreign('hot_tudo_id')
                    ->references('id')
                    ->on('cachorro_hot_tudo')
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
        Schema::dropIfExists('cachorro_quente');
    }
}
