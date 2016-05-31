<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha_factura');
            $table->string('descripcion');
            $table->string('valor_total');
            $table->integer('solicitud_renta_id')->unsigned();
            $table->foreign('solicitud_renta_id')->references('id')->on('solicitud_renta')->onDelete('cascade');
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
        Schema::drop('factura');
    }
}
