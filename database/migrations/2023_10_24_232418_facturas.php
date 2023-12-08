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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->string('NumeroFactura')->nullable();
            $table->string('Valortotal')->nullable();
            $table->string('Estado')->nullable();
            $table->string('MedioPago')->nullable();
            $table->string('ValorEvio')->nullable();
            $table->bigInteger('Clientes_id')->unsigned()->nullable();;
            $table->bigInteger('Empresa_id')->unsigned();
            $table->bigInteger('contactos_id')->unsigned()->nullable();;
            $table->timestamps();
            $table->foreign('contactos_id')->references('id')->on('contactos')->onDelete('cascade');
            $table->foreign('Clientes_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('Empresa_id')->references('id')->on('empresas')->onDelete('cascade');
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
