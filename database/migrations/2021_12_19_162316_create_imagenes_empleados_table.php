<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenesEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes_empleados', function (Blueprint $table) {
            $table->id();
            $table->string('tipoImagen', 50)->nullable();
            $table->string('nomImagen', 50)->nullable();
            $table->foreignId('idempleado');
            
            $table->foreign('idempleado')->references('id')->on('empleado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagenes_empleados');
    }
}
