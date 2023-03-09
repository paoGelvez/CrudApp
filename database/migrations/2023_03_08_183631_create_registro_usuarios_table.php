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
        Schema::create('registro_usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('celular');
            $table->string('cedula');
            $table->string('email')->unique();
            // $table->unsignedBigInteger('id_categorias');
            // $table->foreign('id_categorias')
            //       ->references('id')
            //       ->on('categorias')
            //       ->onDelete('cascade')
            //       ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_usuarios');
    }
};
