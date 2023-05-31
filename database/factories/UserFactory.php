<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'is_admin' => true,
            'first_name' => 'Alex',
            'last_name' => 'Podariu',
            'email' => 'alex.podariu@kpiinstitute.com',
            'prefix' => '0040',
            'phone' => fake()->phoneNumber(),
            'company' => fake()->company(),
            'country' => fake()->countryCode,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
