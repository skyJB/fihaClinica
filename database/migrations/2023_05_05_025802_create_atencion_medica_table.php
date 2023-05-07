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
        Schema::create('atencion_medica', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ficha_clinica');
            $table->foreign('id_ficha_clinica')->references('id')->on('ficha_clinica');
            $table->dateTime('fecha_hora');
            $table->string('descripcion', 1000);
            $table->string('tipo_atencion',1000);
            $table->string('desiciones_paciente',1000);
            
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
        Schema::dropIfExists('atencion_medica');
    }
};
