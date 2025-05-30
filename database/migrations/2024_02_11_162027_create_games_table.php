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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('status'); //1: hoat dong, 0: tam khoa
            $table->text('description')->nullable();
            $table->string('thumbnail');
            $table->string('slug');
            $table->boolean('hotGame')->default(0); //1: game noi bat, 0: game thuong
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
