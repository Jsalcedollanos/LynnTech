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
            $table->integer('codigo')->unique();
            $table->string('nombre',40);
            $table->string('descripcion',1100);
            $table->string('etiqueta',100)->default(null);
            $table->string('categoria');
            $table->string('color');
            $table->integer('cantidad');
            $table->decimal('valor',8,3);
            $table->decimal('descuento',8,3)->default(0);
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
