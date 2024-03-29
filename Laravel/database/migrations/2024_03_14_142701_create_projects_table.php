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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('pages');
            $table->integer('year');
            $table->foreignId('activities_id');
            $table->foreign('activities_id')->on('activities')->references('id')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('users_id');
            $table->foreign('users_id')->on('users')->references('id')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
