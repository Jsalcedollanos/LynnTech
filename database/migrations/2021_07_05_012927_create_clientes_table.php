<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->integer('cedula');
            $table->string('primer_nombre',15);
            $table->string('segundo_nombre',15);
            $table->string('primer_apellido',15);
            $table->string('segundo_apellido',15);
            $table->string('telefono');
            $table->string('ciudad',20);
            $table->string('direccion',20);
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
        Schema::dropIfExists('clientes');
    }
}
