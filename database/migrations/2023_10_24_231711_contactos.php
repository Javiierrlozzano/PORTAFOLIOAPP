<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id();
            $table->string('direccion')->nullable();
            $table->string('long')->nullable();
            $table->string('Latitud')->nullable();
            $table->string('telefono');
            $table->string('celular')->nullable();
            $table->string('estado')->nullable();
            $table->bigInteger('clientes_id')->unsigned();
            $table->timestamps();

            $table->foreign('clientes_id')->references('id')->on('clientes')->onDelete('cascade');
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
    }
};
