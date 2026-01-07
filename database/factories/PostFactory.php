<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
         
        'user_id' => \App\Models\User::factory(),
        'title' => $this->faker->sentence(),
        'body' => $this->faker->paragraph(),
        ];
    }
}