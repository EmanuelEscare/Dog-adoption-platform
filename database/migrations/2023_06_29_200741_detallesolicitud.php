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
            $table->foreignId('solicitudes_id')
            ->references('id')->on('solicitudes')
            ->onDelete('cascade');
            $table->integer('P1');
            $table->string('P2', 1000);
            $table->string('P3', 1000);
            $table->string('P4', 1000);
            $table->string('P5', 1000);
            $table->string('P6', 1000);
            $table->integer('P7');
            $table->integer('P8');
            $table->string('P9', 500);
            $table->float('P10');
            $table->integer('P11');
            $table->integer('P12');
            $table->string('P13', 1000);
            $table->string('P14', 1000);
            $table->string('P15', 1000);
            $table->string('P16', 1000);
            $table->string('P17', 1000);
            $table->float('P18');
            $table->string('P19', 255);
            $table->integer('P20');
            $table->integer('P21');
            $table->integer('P22');
            $table->integer('P23');
            $table->integer('P24');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detallesolicitud');
    }
};
