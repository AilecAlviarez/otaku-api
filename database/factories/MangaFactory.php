<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Chapter;
use App\Models\Comment;
use App\Models\CommentManga;
use App\Models\Manga;
use App\Models\Publisher;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MangaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Manga::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id'=>Author::all()->random()->author_id,
            'chapter_id'=>Chapter::all()->random()->chapter_id,
            'manga_description'=>$this->faker->paragraph(1),
            'manga_date'=>$this->faker->date('Y-m-d'),
            'publisher_id'=>User::all()->random()->user_id,

        ];
    }
}
