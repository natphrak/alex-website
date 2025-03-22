<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('art_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('art_id')->constrained('images')->onDelete('cascade'); // Assuming 'images' is the table for art
            $table->foreignId('tag_id')->constrained('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('art_tags');
    }
};
