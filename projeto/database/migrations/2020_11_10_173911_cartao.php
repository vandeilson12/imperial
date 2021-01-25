<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cartao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        if(!Schema::hasTable('cartao')){
        Schema::create('cartao', function (Blueprint $table) {
            $table->increments('id');
            $table->text('cvv')->nullable();
            $table->text('validade')->nullable();
            $table->text('tipo_cartao')->nullable();
            $table->text('numero_cartao')->nullable();
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
        Schema::dropIfExists('cartao');
    }
}
