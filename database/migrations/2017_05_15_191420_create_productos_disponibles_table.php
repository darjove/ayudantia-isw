<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosDisponiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_disponibles',function(Blueprint $table){

            $table->increments('id');
            $table->integer('id_catalogo')->unsigned();
            $table->integer('cantidad_disponible');

            $table->foreign('id_catalogo')->references('id')->on('catalogos');

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
        Schema::drop('productos_disponibles');
    }
}
