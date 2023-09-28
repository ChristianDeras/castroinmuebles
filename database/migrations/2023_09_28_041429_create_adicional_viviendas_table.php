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
        Schema::create('adicional_viviendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vivienda_id'); // Definir una columna que almacene la clave foránea
            $table->string('Detalle1');
            $table->string('Detalle2');
            $table->string('Detalle3');
            $table->string('Detalle4');
            $table->timestamps();

            $table->foreign('vivienda_id')->references('id')->on('viviendas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adicional_viviendas');
    }
};
