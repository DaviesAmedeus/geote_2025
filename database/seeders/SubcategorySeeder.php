<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = Category::where('slug', 'events')->first();
        $programs = Category::where('slug', 'programs')->first();

        $subCategories = [
            // Current GeoTE Events
            ['category_id' => $events->id, 'name' => 'Mapathons', 'slug' => 'mapathons', 'description' => 'Collaborative mapping events'],
            ['category_id' => $events->id, 'name' => 'GeoSparks', 'slug' => 'geosparks', 'description' => 'GeoSpark event series'],

            // Current GeoTE Programs
            ['category_id' => $programs->id, 'name' => 'Membership Program', 'slug' => 'membership-program', 'description' => ''],
            ['category_id' => $programs->id, 'name' => 'Mentorship Program', 'slug' => 'mentorship-program', 'description' => 'GIS Mentorship program'],
            ['category_id' => $programs->id, 'name' => 'Field Practical Training Program', 'slug' => 'field-practical-training-program', 'description' => 'A Training Program to give university students real world GIS Applications.'],
            ['category_id' => $programs->id, 'name' => 'Short Course Program', 'slug' => 'short-course-program', 'description' => 'A Short Course Program that offers more knowldge concerning GIS.'],
        ];

        foreach ($subCategories as $sub) {
            Subcategory::create($sub);
        }
    }
}
