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
        Schema::create('MovimientosDetallados', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('protucto_id')->unsigned()->nullable();;
            $table->string('Cantidad')->nullable();
            $table->string('CantidadExistencias')->nullable();
            $table->string('Total')->nullable();
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
    }
};
