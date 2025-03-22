<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTagsTable extends Migration
{
    public function up()
    {
        Schema::create('characters_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('character_id')->constrained('characters')->onDelete('cascade');
            $table->foreignId('tag_id')->constrained('tags')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('characters_tags');
    }
}
