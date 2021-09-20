<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->integer('nfactura');
            $table->integer('codigo');
            $table->integer('cedula');
            $table->string('nombres',40);
            $table->string('apellidos',40);
            $table->string('telefono');
            $table->string('direccion');
            $table->decimal('valor',8,3);
            $table->timestamps();
            $table->foreign('codigo')->references('codigo')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
