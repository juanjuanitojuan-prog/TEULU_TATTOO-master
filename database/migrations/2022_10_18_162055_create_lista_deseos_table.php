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
        Schema::create('ListaDeseos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Id_productos_deseados');
            $table->string('Id_verificar');
            $table->string('Id_gestion_deseos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ListaDeseos');
    }
};
