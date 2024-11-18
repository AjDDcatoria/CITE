<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password'), // Default password
            'verified' => $this->faker->boolean(50), // 80% chance of being verified
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'suffix' => $this->faker->optional()->suffix(),
            'role' => $this->faker->randomElement(['student', 'instructor']),
            'number' => '09' . $this->faker->unique()->numerify('#########'),
            'course' => $this->faker->randomElement(['BSCS', 'BSED', 'BSPE','BSCED','BSMID','BAENG']),
            'campus' => $this->faker->randomElement(['tandag', 'marihatag', 'cantilan','cagwait','tagbina','san miguel']),
            'year_level' => $this->faker->optional()->randomElement(['1', '2', '3', '4']),
            'avatar' => $this->faker->optional()->imageUrl(200, 200, 'people'),
            'email_verified_at' => $this->faker->optional()->dateTimeThisYear(),
            'remember_token' => Str::random(10),
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
