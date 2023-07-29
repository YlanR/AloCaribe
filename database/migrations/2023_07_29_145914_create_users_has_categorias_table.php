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
        Schema::create('users_has_categorias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->unsignedBigInteger('categoria1_id')->unique();
            $table->unsignedBigInteger('categoria2_id')->unique();
            $table->unsignedBigInteger('categoria3_id')->unique();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('categoria1_id')->references('id')->on('categoria1')->onDelete('cascade');
            $table->foreign('categoria2_id')->references('id')->on('categoria2')->onDelete('cascade');
            $table->foreign('categoria3_id')->references('id')->on('categoria3')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_has_categorias');
    }
};
