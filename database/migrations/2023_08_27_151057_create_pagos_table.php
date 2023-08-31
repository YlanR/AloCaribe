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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('idp');        
            $table->string('modalidad');
            $table->integer('referencia')->nullable();
            $table->string('telefono');
            $table->string('nombrePago');
            $table->integer('total');
            $table->integer('cedula_pago')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('academy_id');
            $table->unsignedBigInteger('ticket_id');
            $table->timestamps();

            $table->foreign('academy_id')->references('id')->on('academies')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ticket_id')->references('idt')->on('tickets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
