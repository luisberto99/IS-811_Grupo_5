<?php

namespace Database\Factories;

use App\Models\Advert;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price'=> $this->faker->randomFloat(),
            'product_status'=> $this->faker->randomElement(['Nuevo', 'Usado']),
            'advert_id'=> $this->faker->unique()->numberBetween(1, Advert::count()),
            'currency_id'=>$this->faker->randomElement([1,2])

        ];
    }
}
