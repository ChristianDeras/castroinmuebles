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
        Schema::create('remodelaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombrecompleto',50);
            $table->string('correo',50);
            $table->string('telefono',20);
            $table->string('tipo',50);
            $table->decimal('presupuesto',10,2);
            $table->string('departamento',50);
            $table->string('municipio',50);
            $table->boolean('estado');
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
        Schema::dropIfExists('remodelaciones');
    }
};
