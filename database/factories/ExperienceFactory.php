<?php

namespace Database\Factories;

use App\Models\experience;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = experience::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company' =>$this->faker->company(),
            'position' =>$this->faker->jobTitle(),
            'description' =>$this->faker->text(80),
            'date_begin' =>$this->faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now', $timezone = null),
            'date_end' =>$this->faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now', $timezone = null),
            'user_id' =>User::factory()
        ];
    }
}
