<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Reader;
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
            "comment"=>Comment::all()->random()->get()->comment_id,
            "reader_id"=>Reader::all()->random()->get()->user_id
        ];
    }
}
