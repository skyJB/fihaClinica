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
        Schema::create('paciente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo', 100);
            $table->string('num_identificacion', 20);
            $table->string('sexo', 10);
            $table->date('fecha_nacimiento');
            $table->string('domicilio', 200);
            $table->string('ocupacion', 100);
            $table->string('sistema_salud', 100);
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
        Schema::dropIfExists('paciente');
    }
};
