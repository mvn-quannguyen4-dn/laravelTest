<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = rand(1,count(User::all()));
        return [
            'title' => $this->faker->word(),
            'content' => $this->faker->text(1000),
            'user_id' => $id
        ];
    }
}
