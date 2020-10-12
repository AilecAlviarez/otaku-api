<?php

namespace Database\Factories;

use App\Models\Chapter;
use App\Models\Comment;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChapterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Chapter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "chapter_name"=>$this->faker->name,
            'chapter_description'=>$this->faker->paragraph(1),
            'chapter_date'=>$this->faker->date('Y-m-d'),
            'image_id'=>Image::all()->random()->image_id,

        ];
    }
}
