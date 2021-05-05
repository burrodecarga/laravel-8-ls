<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Salary;
use App\Models\Schedule;
use App\Models\State;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ids = User::all()->pluck('id');
        $salary = Salary::all()->random(1)->first();

        $schedule = Schedule::all()->random(1)->first();
        $state = State::all()->random(1)->first();;

        return [
            'user_id' => $this->faker->randomElement($ids),
            'title' => $this->faker->catchPhrase(),
            'position' => $this->faker->jobTitle(),
            'responsibilities' => $this->faker->text(),
            'qualifications' => $this->faker->sentence(),
            'min_salary' => $salary->min_salary,
            'max_salary' => $salary->max_salary,
            'schedule' => $schedule->name,
            'class' => $schedule->class,
            'body' => $this->faker->text(),
            'state' => $state->name,
            'city' => $this->faker->word(),
            'active' => 1
        ];
    }

}
