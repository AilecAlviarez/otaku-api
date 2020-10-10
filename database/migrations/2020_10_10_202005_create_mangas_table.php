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
            $table->unsignedBigInteger("comment_id");
            $table->string("manga_description");
            $table->date("manga_date");
            $table->foreign("chapter_id")->on("chapters")->references("chapter_id");
            $table->foreign("author_id")->on("authors")->references("author_id");
            $table->foreign("comment_id")->on('comments')->references("comment_id");
            $table->foreign("publisher_id")->on("users")->references("user_id");
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
