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
        Schema::create('ActualizacionPrecios', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('protucto_id')->unsigned()->nullable();;
                $table->string('PrecioActual')->nullable();
                $table->string('Utilidad%')->nullable();
                $table->string('ValorUtilidad')->nullable();
                $table->string('PrecioPublico')->nullable();
                $table->string('OrigenProducto_id')->nullable();
                $table->string('Estado')->nullable();
                $table->timestamps();
                $table->foreign('protucto_id')->references('id')->on('productos')->onDelete('cascade');
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
