<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedors', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_sucursal')->unsigned();
            $table->string('nombre');

            $table->foreign('id_sucursal')->references('id')->on('sucursals');

            $table->timestamps();

        });

        Schema::create('cliente_vendedor', function(Blueprint $table){

            $table->increments('id');
            $table->integer('id_vendedor')->unsigned();
            $table->integer('id_cliente')->unsigned();

            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_vendedor')->references('id')->on('vendedors');

        });

        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cliente_vendedor');
        Schema::drop('vendedors');
        
    }
}
