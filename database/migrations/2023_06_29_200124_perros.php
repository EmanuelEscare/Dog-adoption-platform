<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 30);
            $table->string('raza', 255);
            $table->integer('edad');
            $table->integer('peso');
            $table->tinyInteger('sexo');
            $table->string('descripcion', 1000)->nullable();
            $table->integer('disponibilidad');
            $table->date('fecha_registro');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('perros');
    }
};
