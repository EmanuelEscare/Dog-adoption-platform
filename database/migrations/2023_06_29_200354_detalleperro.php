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
        Schema::create('detalleperro', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('perro_id');
            $table->foreign('perro_id')->references('id')->on('perros')->onDelete('cascade');
            $table->string('foto_url');
            // Agrega aquí cualquier otra columna que necesites
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detalleperro');
    }
};
