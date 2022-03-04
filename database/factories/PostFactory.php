<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = Post::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		return [
			'title' => $this->faker->sentence(mt_rand(2, 8)),
			'slug' => $this->faker->slug(),
			'excerpt' => $this->faker->paragraph(),
			// 'body' => '<p class="lead">' . implode('</p><p class="lead">', $this->faker->paragraphs(mt_rand(5, 10))) . '</p>',
			'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
									->map(function ($p) {
										return '<p class="lead">' . $p . '</p>';
									})
									->implode(''),
			'category_id' => mt_rand(1, Category::count()),
			'user_id' => mt_rand(1, User::count()),
		];
	}
}
