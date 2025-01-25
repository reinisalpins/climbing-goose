<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraphs(nb: 10, asText: true),
            'created_at' => $this->faker->dateTimeBetween(startDate: '-1 years'),
            'updated_at' => $this->faker->dateTimeBetween(startDate: '-1 years'),
        ];
    }
}
