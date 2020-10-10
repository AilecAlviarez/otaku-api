<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Author::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_name'=>$this->faker->randomElement(['manga1.png','manga2.jpg','manga3.jpg','manga4.png'])
            ,'author_link'=>$this->faker->url
        ];
    }
}
