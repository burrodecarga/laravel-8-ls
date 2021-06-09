<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Knowledge;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class KnowledgeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Knowledge::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $skill = Skill::inRandomOrder()->limit(1)->get();
       // dd($skill[0]['category']);

        return [
            'category'=>$skill[0]['category'],
            'category_id'=>$skill[0]['category_id'],
            'name' =>$skill[0]['name'],
            'slug'=>$skill[0]['slug'],
            'level_id'=>4,
            'status'=>0,
            'user_id'=>User::factory()
        ];
    }
}
