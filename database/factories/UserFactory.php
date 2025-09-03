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
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'phone_number' => fake()->phoneNumber(),
            'date_of_birth' => fake()->date('Y-m-d', '-18 years'),
            'company' => fake()->company(),
            'job_title' => fake()->jobTitle(),
            'bio' => fake()->paragraph(2),
            'website' => fake()->optional(0.7)->url(),
            'linkedin_profile' => fake()->optional(0.6)->url(),
            'twitter_handle' => fake()->optional(0.5)->userName(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'country' => fake()->country(),
            'postal_code' => fake()->postcode(),
            'emergency_contact' => fake()->optional(0.8)->name() . ' - ' . fake()->phoneNumber(),
            'preferred_language' => fake()->randomElement(['en', 'es', 'fr', 'de', 'it', 'pt', 'nl']),
            'timezone' => fake()->timezone(),
            'newsletter_subscription' => fake()->boolean(70),
            'salary' => fake()->optional(0.6)->randomFloat(2, 30000, 150000),
            'preferences' => json_encode([
                'theme' => fake()->randomElement(['light', 'dark']),
                'notifications' => fake()->boolean(80),
                'language' => fake()->randomElement(['en', 'es', 'fr']),
            ]),
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
