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
        Schema::create('detfacturas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('protucto_id')->unsigned()->nullable();;
            $table->string('Cantidad');
            $table->string('Valorunidad');
            $table->string('ValorTotal');
            $table->string('Descuento');
            $table->bigInteger('facturas_id')->unsigned();
            $table->string('ValorEvioTotal')->nullable();
           
            $table->timestamps();
            $table->foreign('protucto_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('facturas_id')->references('id')->on('facturas')->onDelete('cascade');
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
