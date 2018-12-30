<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donante', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo')->unique();
            $table->string('dni', 8);
            $table->string('celular', 9);
            $table->date('fecha');
            $table->enum('genero', ['Masculino', 'Femenino']);
            $table->enum('sangre', ['A', 'B', 'AB', 'O', null]);
            $table->enum('factor', ['+', '-', null]);
            $table->string('lugar');
            $table->string('foto')->default('images\avatar.png');
            $table->string('password');
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
        Schema::dropIfExists('donante');
    }
}
