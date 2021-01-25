<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Compra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

      
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_adm');
            $table->text('id_usuario')->nullable();
            $table->text('name')->nullable();
            $table->text('cartao')->nullable();
            $table->text('delivery')->nullable();
            $table->text('valor')->nullable();
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
        Schema::dropIfExists('compras');
    }
}
