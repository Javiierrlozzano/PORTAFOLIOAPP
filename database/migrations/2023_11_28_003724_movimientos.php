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
        Schema::create('Movimientos', function (Blueprint $table) {
            $table->id();
            $table->string('Consecutivo')->nullable();
            $table->string('idEntrada')->nullable();
            $table->string('Origen')->nullable();
            $table->string('Destino')->nullable();
            $table->string('CodigoMovimiento')->nullable();
            $table->bigInteger('TipoMovimientos_Id')->unsigned()->nullable();;
            $table->bigInteger('CreadorMovimeinto_id')->unsigned()->nullable();;
            $table->bigInteger('Actualizacion_id')->unsigned()->nullable();;
            $table->string('Estado')->nullable();
            $table->string('Comentarios1')->nullable();
            $table->string('Comentarios2')->nullable();
            $table->timestamps();

            $table->foreign('TipoMovimientos_Id')->references('id')->on('TipoMovimientos')->onDelete('cascade');
            $table->foreign('CreadorMovimeinto_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('Actualizacion_id')->references('id')->on('users')->onDelete('cascade');
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
