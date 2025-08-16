<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('event_categories')->insert([
            [
                'name' => 'Geo Spark',
                'description' => 'This event is a key highlight of a five-week Field Practical Training (FPT)',
                'status' => true,
                'created_at'=> now(),
                 'updated_at'=> now()


            ],
              [
                'name' => 'Mapathons',
                'description' => 'YouthMappers and other OpenStreetMap communities around the world to host mapping parties (“mapathons”) that contribute to open data.',
                'status' => true,
                'created_at'=> now(),
                 'updated_at'=> now()
            ],
        ]);
    }
}
