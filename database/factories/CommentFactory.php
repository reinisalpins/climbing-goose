<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'post_id' => Post::factory(),
            'body' => $this->faker->paragraph(),
            'created_at' => $this->faker->dateTimeBetween(startDate: '-1 years'),
            'updated_at' => $this->faker->dateTimeBetween(startDate: '-1 years'),
        ];
    }
}
