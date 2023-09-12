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
        Schema::create('tbl_instituciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nombre");
            $table->string("regSanitario");
            $table->string("telefono");
            $table->string("RFC");
            $table->integer('idEstado')->nullable();
            $table->integer('idMunicipio')->nullable();
            $table->string("colonia");
            $table->string("calle");
            $table->string("cp");
            $table->integer('idEdoFiscal')->nullable();
            $table->integer('idMpioFiscal')->nullable();
            $table->string("coloniaFiscal");
            $table->string("calleFiscal");
            $table->string("cpFiscal");
            $table->integer('idtipoInstitucion')->nullable();
            $table->string("clave");
            $table->integer('idformato')->nullable();
            $table->integer('idUser')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_instituciones');
    }
};
