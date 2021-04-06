<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
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
      $title = Str::slug("-",$this->faker->sentence());
        return [
          "title" => $title,
          "description" => $this->faker->paragraph(),
          "body" => $this->faker->paragraph(),
          "slug" => $title,
          "status" => 0,
          "visits" => 0,
          "user_id" => 1,
          "categorie_id" => 1,
        ];
    }
}
