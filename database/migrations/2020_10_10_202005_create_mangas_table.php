<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMangasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mangas', function (Blueprint $table) {
            $table->id('manga_id');
            $table->unsignedBigInteger("chapter_id");
            $table->unsignedBigInteger("author_id");
            $table->unsignedBigInteger("publisher_id");

            $table->string("manga_description");
            $table->date("manga_date");
            $table->foreign("chapter_id")->on("chapters")->references("chapter_id");
            $table->foreign("author_id")->on("authors")->references("author_id");
            $table->foreign("publisher_id")->on("users")->references("user_id");
            $table->timestamps();
        });
        Schema::create('comments', function (Blueprint $table) {
            $table->id('comment_id');
            $table->unsignedBigInteger('chapter_id');
            $table->unsignedBigInteger('reader_id');
            $table->string("comment");
            $table->foreign('reader_id')->on('users')->references('user_id');
            $table->foreign('chapter_id')->on('chapters')->references('chapter_id');
            $table->timestamps();
        });
        Schema::create('comment_mangas', function (Blueprint $table) {
            $table->id('comment_id');

            $table->unsignedBigInteger('reader_id');
            $table->string("comment");
            $table->unsignedBigInteger('manga_id');
            $table->foreign('manga_id')->on('mangas')->references('manga_id');
            $table->foreign('reader_id')->on('users')->references('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mangas');
    }
}
