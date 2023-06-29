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
        Schema::create('detallesolicitud', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('solicitud_id');
            $table->foreign('solicitud_id')->references('id')->on('solicitudes')->onDelete('cascade');
            $table->integer('P1');
            $table->text('P2');
            $table->text('P3');
            // Agrega aquí cualquier otra columna que necesites
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detallesolicitud');
    }
};
