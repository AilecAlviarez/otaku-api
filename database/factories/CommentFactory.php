<?php

namespace Database\Factories;

use App\Models\Chapter;
use App\Models\Comment;
use App\Models\Reader;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

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
            'chapter_id'=>Chapter::all()->random()->chapter_id
        ];
    }
}
