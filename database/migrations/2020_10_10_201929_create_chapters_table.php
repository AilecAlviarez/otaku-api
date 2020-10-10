<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapters', function (Blueprint $table) {
            $table->id("chapter_id");
            $table->string("chapter_name");
            $table->string("chapter_description");
            $table->date('chapter_date');
            $table->unsignedBigInteger("image_id");
            $table->unsignedBigInteger("comment_id");
            $table->foreign('image_id')->on('images')->references('image_id');
            $table->foreign('comment_id')->on('comments')->references('comment_id');
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
        Schema::dropIfExists('chapters');
    }
}
