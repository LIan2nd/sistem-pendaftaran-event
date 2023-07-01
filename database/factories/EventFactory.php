<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => mt_rand(1, 3),
            'name' => fake()->sentence(mt_rand(1, 3)),
            'slug' => fake()->slug(mt_rand(1, 3)),
            'description' => fake()->paragraph(mt_rand(5, 10)),
            'date' => fake()->date()
        ];
    }
}