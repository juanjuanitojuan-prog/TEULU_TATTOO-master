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
        Schema::create('Ciudades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Depto');
            $table->timestamps();
            $table->string('nombre_ciudad');
            $table->string('nombre_ciudad');

            $table->foreign('ID_Depto')->references('id')->on('Departamentos4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Ciudades');
    }
};
