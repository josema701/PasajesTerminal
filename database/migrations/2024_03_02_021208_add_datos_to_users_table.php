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
        // nacionalidad,
        // documento,
        // tipo_documento,
        // telefono,
        // empresa_id
        Schema::table('users', function (Blueprint $table) {
            $table->string('nacionalidad')->nullable();
            $table->string('documento')->nullable();
            $table->string('tipo_documento')->nullable();
            $table->string('telefono')->nullable();
            $table->foreignId('empresa_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nacionalidad');
            $table->dropColumn('documento');
            $table->dropColumn('tipo_documento');
            $table->dropColumn('telefono');
            $table->dropColumn('empresa_id');
        });
    }
};
