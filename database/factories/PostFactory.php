<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        $title = $this->faker->sentence();
        return [
            'user_id' => User::factory(),
            'title' => $title,
            'slug' => Str::slug($title) . '-' . Str::random(5),
            'excerpt' => $this->faker->paragraph(),
            'description' => $this->faker->paragraphs(3, true),
            'location' => $this->faker->city(),
            'starts_at' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'ends_at' => $this->faker->dateTimeBetween('+1 week', '+2 weeks'),
            'is_published' => true,
            'published_at' => now(),
        ];
    }
}
