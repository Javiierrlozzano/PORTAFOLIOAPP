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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('NombreProducto');
            $table->string('Estado');
            $table->string('Valor');
            $table->string('Imagen');
            $table->string('Descuento');
            $table->string('ValorEvio')->nullable();
            $table->bigInteger('Categoria_id')->unsigned();
            $table->timestamps();
            $table->foreign('Categoria_id')->references('id')->on('categorias')->onDelete('cascade');
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
