<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Endereco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
        Schema::create('endereco', function (Blueprint $table) {
            $table->increments('id');
            $table->text('cep')->nullable();
            $table->text('rua')->nullable();
            $table->text('casa')->nullable();
            $table->text('referencia')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('endereco');
    }
}
