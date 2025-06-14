<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->decimal('precio', 8, 2);
            $table->string('cache');
            $table->timestamps();
        }); // <-- Asegúrate de cerrar correctamente esta llave
    } // <-- No olvides cerrar el método up()

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    } // <-- Cierre del método down()
}; // <-- Cierre final de la clase (importante)