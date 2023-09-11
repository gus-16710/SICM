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
        Schema::create('PermisoUserExterno', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('Modulo');
            $table->foreign('Modulo')->references('id')->on('Modulos');
            $table->unsignedInteger('Usuario');
            $table->foreign('Usuario')->references('id')->on('tbl_usuarios');
            $table->integer('idUsuarioInterno')->nullable();
            $table->dateTime('fechaRegistro')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
