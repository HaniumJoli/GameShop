<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'First Person Shooter',
            'slug' => 'first-person-shooter'
        ]);
        Category::create([
            'name' => 'Action',
            'slug' => 'action'
        ]);
        Category::create([
            'name' => 'Adventure',
            'slug' => 'adventure'
        ]);
        Category::create([
            'name' => 'RPG',
            'slug' => 'rpg'
        ]);
        Category::create([
            'name' => 'Strategy',
            'slug' => 'strategy'
        ]);
        Category::create([
            'name' => 'Sports',
            'slug' => 'sports'
        ]);

    }
}
