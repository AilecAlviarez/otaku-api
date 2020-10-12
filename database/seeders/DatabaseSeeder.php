<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Chapter;
use App\Models\Comment;
use App\Models\CommentManga;
use App\Models\Image;
use App\Models\Manga;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        User::truncate();
        Author::truncate();
        Image::truncate();
        Comment::truncate();
        Chapter::truncate();
        CommentManga::truncate();
        Manga::truncate();
        User::factory(100)->create();
        Author::factory(20)->create();
        Image::factory(400)->create();
        Comment::factory(500)->create();
        CommentManga::factory(200)->create();
        Chapter::factory(960)->create();
        Manga::factory(50)->create();

    }
}
