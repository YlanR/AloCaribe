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
        Schema::create('categorias_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('categoria1_id');
            $table->unsignedBigInteger('categoria2_id');
            $table->unsignedBigInteger('categorias_id');
            $table->unsignedBigInteger('academy_id');
            $table->string('ticket_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('categoria1_id')->references('id')->on('categoria1')->onDelete('cascade');
            $table->foreign('categoria2_id')->references('id')->on('categoria2')->onDelete('cascade');
            $table->foreign('categorias_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('academy_id')->references('id')->on('academies')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias_users');
    }
};
