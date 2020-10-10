<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "image_path"=>'assets/imgs/'.$this->faker->randomElement(['manga1.png','manga2.jpg','manga3.jpg','manga4.png'])
            ,"number_page"=>$this->faker->numberBetween(1,60)
        ];
    }
}
