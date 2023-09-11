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
        Schema::create('tbl_usuarios', function (Blueprint $table) {
            $table->increments('id');                                            
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->string('mail')->unique();
            $table->date('fechaAlta')->nullable();
            $table->string('categoria');
            $table->string('numEmpleado');
            $table->string('adscripcion');
            $table->string('cargo')->nullable();
            $table->string('turno')->nullable();
            $table->string('servicio')->nullable();
            $table->unsignedInteger('idinstitucion');
            $table->foreign('idinstitucion')->references('id')->on('tbl_instituciones');

            $table->boolean('estadoUsuario')->nullable();           
            $table->string('nickname', 10)->nullable();
            $table->date('fechaPW')->nullable();
            $table->boolean('alta')->default(0);
            $table->integer('idUserValido')->nullable();
            $table->boolean('CorreoValidado')->nullable();
            $table->string('Verificador')->nullable();

            $table->integer('idUserD')->nullable();

            $table->string('name');
            $table->string('email')->unique();            
            $table->timestamp('email_verified_at')->nullable();                         
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_usuarios');
    }
};
