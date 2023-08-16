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
            
            $table->string('nombre', 50)->nullable();
            $table->string('paterno', 50)->nullable();
            $table->string('materno', 50)->nullable();
            $table->string('mail', 50)->unique();
            $table->date('fechaAlta')->nullable();
            $table->string('categoria', 35)->nullable();
            $table->string('numEmpleado', 25)->nullable();
            $table->string('adscripcion', 50)->nullable();
            $table->string('cargo', 50)->nullable();
            $table->string('turno', 50)->nullable();
            $table->string('servicio', 50)->nullable();
            $table->integer('idinstitucion')->nullable();
            $table->boolean('estadoUsuario')->nullable();           
            $table->string('nickname', 10)->nullable();
            $table->date('fechaPW')->nullable();
            $table->boolean('alta')->nullable();
            $table->integer('idUserValido')->nullable();
            $table->boolean('CorreoValidado')->nullable();
            $table->string('Verificador', 10)->nullable();

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
