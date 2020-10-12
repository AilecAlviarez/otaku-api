<?php

namespace Database\Factories;

use App\Models\CommentManga;
use App\Models\Manga;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentMangaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CommentManga::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "comment"=>$this->faker->paragraph(1),
            "reader_id"=>User::all()->random()->user_id,
            'manga_id'=>Manga::all()->random()->manga_id
        ];
    }
}
