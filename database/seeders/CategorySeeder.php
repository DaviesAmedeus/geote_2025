<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $categories = [
            ['name' => 'Events', 'slug' => 'events', 'description' => 'All events we organize'],
            ['name' => 'Programs', 'slug' => 'programs', 'description' => 'All programs we run'],
            ['name' => 'News', 'slug' => 'news', 'description' => 'Latest news and updates'],
            ['name' => 'Publications', 'slug' => 'publications', 'description' => 'All publications we have done'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
