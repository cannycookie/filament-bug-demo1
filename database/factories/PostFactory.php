<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'title' => fake()->sentence(),
            'content' => fake()->paragraphs(3, true),
            'status' => fake()->randomElement(['draft', 'published', 'archived']),
            'priority' => fake()->numberBetween(1, 5),
            'category' => fake()->randomElement(['Technology', 'Business', 'Health', 'Entertainment', 'Sports']),
            'tags' => fake()->words(3),
            'author_name' => fake()->name(),
            'publish_date' => fake()->dateTimeBetween('-1 year', '+1 month'),
            'featured_image' => fake()->imageUrl(800, 600, 'articles'),
            'excerpt' => fake()->text(200),
            'meta_title' => fake()->sentence(),
            'meta_description' => fake()->text(160),
            'view_count' => fake()->numberBetween(0, 10000),
            'like_count' => fake()->numberBetween(0, 500),
            'comment_count' => fake()->numberBetween(0, 100),
            'is_featured' => fake()->boolean(20),
            'is_published' => fake()->boolean(80),
            'reading_time' => fake()->numberBetween(1, 15),
            'language' => fake()->randomElement(['en', 'es', 'fr', 'de', 'it']),
            'source_url' => fake()->optional()->url(),
        ];
    }
}
