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
        Schema::create('perrosolicitud', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('solicitudes_id');
            $table->foreign('solicitudes_id')->references('id')->on('solicitudes')->onDelete('cascade');
            $table->unsignedBigInteger('perro_id');
            $table->foreign('perro_id')->references('id')->on('perros')->onDelete('cascade');
            $table->integer('status')->default(0);
            // Agrega aquí cualquier otra columna que necesites
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('perrosolicitud');
    }
};
