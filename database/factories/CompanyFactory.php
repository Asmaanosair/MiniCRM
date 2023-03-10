<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

            return [
                'name' => fake()->name(),
                'logo' => fake()->name(),
                'website' => fake()->name(),
                'revenue' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
            ];

    }
}
