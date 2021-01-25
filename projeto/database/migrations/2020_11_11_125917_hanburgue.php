<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hanburgue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
     
        Schema::create('hanburgue', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tradicional_id');
            $table->unsignedInteger('medial_id');
            $table->unsignedInteger('x_imperial_id');
            $table->timestamps('entrega_date');
            $table->timestamps();

        });

        Schema::table('hanburgue', function (Blueprint $table) {

            $table->foreign('tradicional_id')
                    ->references('id')
                    ->on('hanburgue_tradicional')
                    ->onDelete('cascade');

            $table->foreign('medial_id')
                    ->references('id')
                    ->on('hanburgue_medial')
                    ->onDelete('cascade');

            $table->foreign('x_imperial_id')
                    ->references('id')
                    ->on('hanburgue_x_imperial')
                    ->onDelete('cascade');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('hanburgue');
    }
}
