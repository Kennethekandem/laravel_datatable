<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'age' => fake()->randomNumber(2),
            'votes' => fake()->randomNumber(3),
            'occupation' => $this->faker->jobTitle()
        ];
    }
}
