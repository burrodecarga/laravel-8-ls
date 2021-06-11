<?php

namespace Database\Factories;

use App\Models\Message;
use App\Models\Response;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResponseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Response::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $messages = Message::all()->pluck('id');
        return [
            'subject' =>$this->faker->jobTitle(),
            'body' =>$this->faker->text(150),
            'message_id' =>$this->faker->randomElement($messages)
        ];
    }
}
