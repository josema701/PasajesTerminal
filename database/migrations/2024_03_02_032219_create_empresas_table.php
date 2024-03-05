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
        // NIT, FUNDAEMPRESA, CERTIFICADO DE COOPERATIVA,datos representante legal, (Documentacion necesaria) DATO - FOTO,

        // propietario_id,
        // nombre,
        // representante
        // nit,
        // foto_nit,
        // foto_seprec,
        // foto_fundaempresa,
        // foto_cooperativa,
        // foto,
        // direccion,

        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('propietario_id')->constrained('users');
            $table->string('nombre')->nullable();
            $table->string('representante')->nullable();
            $table->string('nit')->nullable();
            $table->string('foto_nit')->nullable();
            $table->string('foto_seprec')->nullable();
            $table->string('foto_fundaempresa')->nullable();
            $table->string('foto_cooperativa')->nullable();
            $table->string('logo')->nullable();
            $table->string('foto')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('telefono2')->nullable();
            $table->string('email')->nullable();
            $table->boolean('estado')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
