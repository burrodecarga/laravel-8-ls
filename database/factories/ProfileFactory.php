<?php

namespace Database\Factories;

use App\Models\profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'user_id' =>User::factory(),
            'address'=>$this->faker->address(),
            'phone'=>$this->faker->phoneNumber(),
            'mobile'=>$this->faker->e164PhoneNumber(),
            'birthdate'=>$this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
            'about'=>$this->faker->text(120),
            'cost'=>$this->faker->numberBetween($min = 7, $max = 50) ,
            'availability'=>$this->faker->text(20),
            'title'=>$this->faker->catchPhrase()
        ];
    }
}
