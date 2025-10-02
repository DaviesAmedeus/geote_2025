<?php

namespace Database\Seeders;

use App\Models\Publication;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $publications = [


            [
                'title' => 'Climate Change Impact Report',
                'slug' => 'climate-change-impact-report',
                'overview' => 'A detailed analysis of the effects of climate change on agriculture and food security.',
                'image' => 'publications/climate-report.png',
                'reference_numbers' => 'REF-2025-002',
                'authors' => json_encode(['Dr. Alice Smith']),
                'status' => 1,
                'category' => 'Environment',
                'end_date' => '2026-03-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'title' => 'Sustainable Energy Development in Africa',
                'slug' => 'sustainable-energy-development-in-africa',
                'overview' => 'This publication explores the future of renewable energy adoption across African nations, analyzing policies, challenges, and opportunities.',
                'image' => 'publications/energy-africa.jpg',
                'reference_numbers' => 'REF-2025-001',
                'authors' => json_encode(['Dr. John Doe', 'Prof. Mary Johnson']),
                'status' => 1, // published
                'category' => 'Research',
                'end_date' => '2025-12-31',
                'created_at' => now(),
                'updated_at' => now(),
            ]



        ];

        foreach ($publications as $publication) {
            Publication::create($publication);
        }
    }
}
