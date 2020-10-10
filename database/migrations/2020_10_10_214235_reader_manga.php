<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReaderManga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reader_manga',function (Blueprint $table){
            $table->id('reader_manga_id');
            $table->unsignedBigInteger("manga_id");
            $table->unsignedBigInteger("reader_id");
            $table->foreign("manga_id")->on("mangas")->references("manga_id");
            $table->foreign("reader_id")->on("users")->references("user_id");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
