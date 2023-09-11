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
        Schema::create('tbl_libros', function (Blueprint $table) {
            $table->id();            
            $table->string("title");
            $table->integer("pages");            
            $table->timestamps();
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('tbl_usuarios');

            //$table->foreignId('usuario_id')->references('id')->on('tbl_usuarios');

            //$table->unsignedInteger('usuario_id');
            //$table->foreign('usuario_id')->references('id')->on('tbl_usuarios');
            //$table->foreignId('user_id')->constrained();            
            //$table->foreignId('user_id')->integer()->constrained()->onDelete('cascade');
            //$table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_libros');
    }
};
