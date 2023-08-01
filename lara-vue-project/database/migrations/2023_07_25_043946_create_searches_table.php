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
        Schema::create('searches', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('about_id')->references('id')->on('abouts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('review_id')->references('id')->on('reviews')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('blog_id')->references('id')->on('blogs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('service_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('team_id')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('searches');
    }
};
