<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ["Desarrollo web", "Diseño web", "Redes WAN"];
        
        Category::create([
          "name" => $categories[0],
          "slug" => Str::slug($categories[0])
        ]);

        Category::create([
          "name" => $categories[1],
          "slug" => Str::slug($categories[1])
        ]);

        Category::create([
          "name" => $categories[2],
          "slug" => Str::slug($categories[2])
        ]);
    }
}
