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
            Schema::create('TipoMovimientos', function (Blueprint $table) {
                $table->id();
                $table->string('Nombre')->nullable();
                $table->string('Codigo')->nullable();
                $table->string('DescuentoExistencia')->nullable();
                $table->string('AñadeExistencia')->nullable();
                $table->string('Bloquea')->nullable();
                $table->string('Alertar')->nullable();
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
