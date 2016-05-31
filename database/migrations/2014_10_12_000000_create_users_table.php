<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 15);
            $table->string('apellido', 15);
            $table->string('usuario', 15)->unique();
            $table->string('contraseña');
            $table->string('telefono',10);
            $table->string('numero_licencia', 20)->unique();
            $table->string('direccion', 30);
            $table->integer('horas_acumuladas');
            $table->boolean('bono')->default(false);
            $table->enum('tipo', ['cliente','admin'])->default('cliente');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
