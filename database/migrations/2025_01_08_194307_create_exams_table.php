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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('male_user_id')->nullable();
            $table->unsignedBigInteger('female_user_id')->nullable();
            $table->foreign('male_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('female_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->longText('token')->nullable();
            $table->boolean('male_finished')->default(false);
            $table->boolean('female_finished')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
