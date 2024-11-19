<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('salientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo');
            $table->string('tipo_empleado');
            $table->integer('dias_incapacidad');
            $table->string('cedula')->unique();
            $table->integer('codigo_incapacidad');
            $table->string('correo');
            $table->date('fecha_radicado');
            $table->string('incapacidad_pdf')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salientes');
    }
};
