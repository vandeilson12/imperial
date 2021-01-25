<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
   
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('email');
            $table->unsignedInteger('id_compra');
            $table->timestamps();

                $table->foreign('id_compra')
                    ->references('id')
                    ->on('users')
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
        Schema::dropIfExists('cliente');
    }
}
