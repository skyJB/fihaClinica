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
        Schema::create('ficha_clinica', function (Blueprint $table) {
            $table->id();
            $table->string('num_identificador', 20);
            $table->unsignedBigInteger('id_paciente');
            $table->foreign('id_paciente')->references('id')->on('paciente');
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
        Schema::dropIfExists('ficha_clinica');
    }
};
