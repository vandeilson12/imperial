<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Delivery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('delivery')){
        Schema::create('delivery', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('compra_id');
            $table->timestamps('pedido_date');
            $table->timestamps('entrega_date');
            $table->timestamps();
    });

        Schema::table('delivery', function (Blueprint $table) {
            $table->foreign('compra_id')
                    ->references('id')
                    ->on('compra')
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
        Schema::dropIfExists('delivery');
    }
}
