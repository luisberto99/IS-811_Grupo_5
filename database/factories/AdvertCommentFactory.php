<?php

namespace Database\Factories;

use App\Models\AdvertComment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Advert;
class AdvertCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdvertComment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'commentary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...',
            'user_id'=>$this->faker->numberBetween(1, User::count()),
            'creation_date'=> $this->faker->dateTimeBetween('-5 days','now'),
            'updated_at'=> $this->faker->dateTimeBetween('-5 days','now'),
            'advert_id' => $this->faker->numberBetween(1, Advert::count())     
        ];
    }
}
