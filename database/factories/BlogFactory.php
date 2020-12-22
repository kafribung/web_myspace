<?php

namespace Database\Factories;

use App\Models\{Blog, User};
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'       => $this->faker->sentence(),
            'description' => $this->faker->paragraph(10),
            'slug'        => \Str::slug($this->faker->sentence()),
            'user_id'     => User::factory(),
        ];
    }
}
