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
            $table->unsignedBigInteger('character_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();

            $table->foreign('character_id')->references('id')->on('characters')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('characters_tags');
    }
}
