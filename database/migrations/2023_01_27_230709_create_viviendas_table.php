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
        Schema::create('viviendas', function (Blueprint $table) {
            $table->id();
            $table->string('nombreinmueble');
            $table->string('descripcion');
            $table->string('detalle');
            $table->decimal('precio',10,2);
            $table->integer('habitaciones');
            $table->integer('sanitarios');
            $table->string('imagen');
            $table->string('imagen360');
            $table->integer('plantas');
            $table->string('estado');
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
        Schema::dropIfExists('viviendas');
    }
};
