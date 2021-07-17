<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo');
            $table->string('nombre',40);
            $table->string('descripcion',255);
            $table->string('categoria');
            $table->string('color');
            $table->integer('cantidad');
            $table->string('valor',8,2);
            $table->string('imagen',255);
            $table->string('imagenGrande',255);
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
        Schema::dropIfExists('productos');
    }
}
