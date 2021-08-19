<?php

namespace Database\Factories;

use App\Models\ProductDos;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductDosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductDos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->numberBetween(1,3)
        ];
    }
}
