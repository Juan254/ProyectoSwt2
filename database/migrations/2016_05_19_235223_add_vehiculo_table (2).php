<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVehiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->string('marca', 15);
            $table->string('capacidad', 2);
            $table->string('color', 15);
            $table->string('modelo', 15);
            $table->string('placa', 7)->unique();;
            $table->string('kilometraje', 20);
            $table->string('precio_hora', 10);
            $table->boolean('disponibilidad');
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
        Schema::drop('vehiculo');
    }
}
