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
        Schema::create('compradors', function (Blueprint $table) {
            $table->id();
            $table->string('nombrecompleto',50);
            $table->integer('edad');
            $table->string('correo',50);
            $table->string('telefono',20);
            $table->string('nacionalidad',10);
            $table->string('calificacion',2)->nullable();
            $table->string('descuento',2)->nullable();
            $table->integer('salarios')->nullable();

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
        Schema::dropIfExists('compradors');
    }
};
