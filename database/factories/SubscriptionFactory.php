<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subscription::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subscription_date' => $this->faker->date($format='Y-m-d',$max='now'),
            'user_id'=>$this->faker->numberBetween(1, User::count()),
            'category_id' => $this->faker->numberBetween(1, Category::count())
        ];
    }
}
