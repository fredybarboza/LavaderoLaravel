<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('id')->autoincrement();
            $table->string('id_servicio');
            $table->string('monto');
            $table->string('nombre');
            $table->string('ci');
            $table->string('descripcion_vehiculo');
            $table->string('color_vehiculo');
            $table->string('chapa_vehiculo');
            $table->string('estado')->default('0');
            $table->string('id_empleado_encargado')->nullable();
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
        Schema::dropIfExists('pedidos');
    }
}
