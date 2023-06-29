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
            $table->string('nombre');
            $table->string('raza');
            $table->integer('edad');
            $table->integer('peso');
            // Agrega aquí cualquier otra columna que necesites
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('perros');
    }
};
