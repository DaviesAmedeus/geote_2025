<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $author = User::first(); // Or create a default user

        // Get categories
        $event   = Category::where('slug', 'events')->first();
        $program = Category::where('slug', 'programs')->first();

        // Get subcategories
        $mapathon = Subcategory::where('slug', 'mapathons')->first();
        $geospark = Subcategory::where('slug', 'geosparks')->first();

        $membership = Subcategory::where('slug', 'membership-program')->first();
        $mentorship = Subcategory::where('slug', 'mentorship-program')->first();
        $fpt = Subcategory::where('slug', 'field-practical-training-program')->first();
        $course = Subcategory::where('slug', 'short-course-program')->first();


        // Mapathons Event Posts
        $mapathonPosts = [
            [
                'title' => 'Upcoming Mapathon in Dar es Salaam',
                'slug' => 'mapathon-dar-es-salaam',
                'excerpt' => 'An exciting event in Dar es Salaam!',
                'content' => 'Join us for an exciting mapathon event where we will be mapping health facilities.',
            ],

            [
                'title' => 'University Mapathon Challenge',
                'slug' => 'university-mapathon-challenge',
                'excerpt' => 'Mapping with university students.',
                'content' => 'This challenge brings students together to map rural schools.',
            ],
            [
                'title' => 'Online Mapathon Drive',
                'slug' => 'online-mapathon-drive',
                'excerpt' => 'Virtual collaboration!',
                'content' => 'Contribute online to mapping flood-prone areas.',
            ],
            [
                'title' => 'Women in Mapping Event',
                'slug' => 'women-in-mapping-event',
                'excerpt' => 'Empowering women through mapping.',
                'content' => 'An event dedicated to women contributing to open mapping.',
            ],
            [
                'title' => 'Health Facilities Mapathon',
                'slug' => 'health-facilities-mapathon',
                'excerpt' => 'Mapping hospitals & clinics.',
                'content' => 'Join us as we focus on mapping all health facilities across Tanzania.',
            ],
        ];


          foreach ($mapathonPosts as $post) {
            Post::create(array_merge($post, [
                'category_id' => $event->id,
                'subcategory_id' => $mapathon->id,
                'author_id' => $author->id,
                'status' => 'published',
                'cover_image' => 'https://picsum.photos/1080/500?random=' . rand(1, 100),
                'pdf_link'=> 'https://morth.nic.in/sites/default/files/dd12-13_0.pdf',
                'images_repository' => 'https://drive.google.com/drive/u/0/folders/1dNUvhLaPV5XjIUFUmnNGMaiUBvsh4gte'
            ]));
        }




         // ====== GeoSpark Events ======
        $geoSparkPosts = [
            [
                'title' => 'GeoSpark Kickoff',
                'slug' => 'geospark-kickoff',
                'excerpt' => 'Opening of the GeoSpark program.',
                'content' => 'GeoSpark begins with workshops and live sessions.',
            ],
            [
                'title' => 'GeoSpark Hackathon',
                'slug' => 'geospark-hackathon',
                'excerpt' => 'A 2-day hackathon event.',
                'content' => 'Developers and students collaborate to solve geospatial challenges.',
            ],
            [
                'title' => 'GeoSpark Training',
                'slug' => 'geospark-training',
                'excerpt' => 'Learning GIS together.',
                'content' => 'A series of GIS training under GeoSpark.',
            ],
            [
                'title' => 'GeoSpark Showcase',
                'slug' => 'geospark-showcase',
                'excerpt' => 'Presenting outcomes.',
                'content' => 'Teams showcase their mapping outcomes and impact.',
            ],
            [
                'title' => 'GeoSpark Closing Ceremony',
                'slug' => 'geospark-closing-ceremony',
                'excerpt' => 'Wrapping up GeoSpark.',
                'content' => 'Awards and recognition for participants.',
            ],
        ];

        foreach ($geoSparkPosts as $post) {
            Post::create(array_merge($post, [
                'category_id' => $event->id,
                'subcategory_id' => $geospark->id,
                'author_id' => $author->id,
                'status' => 'published',
                'cover_image' => 'https://picsum.photos/1080/500?random=' . rand(101, 200),
                'pdf_link'=> 'https://morth.nic.in/sites/default/files/dd12-13_0.pdf',
                'images_repository' => 'https://drive.google.com/drive/u/0/folders/1dNUvhLaPV5XjIUFUmnNGMaiUBvsh4gte'
            ]));
        }





         // ====== Program: FPT ======
        $fptPosts = [
            [
                'title' => 'QGIS Beginner Training',
                'slug' => 'qgis-beginner-training',
                'excerpt' => 'Learn the basics of QGIS.',
                'content' => 'This training will cover QGIS basics and mapping essentials.',
            ],
            [
                'title' => 'Field Data Collection Workshop',
                'slug' => 'field-data-collection',
                'excerpt' => 'Hands-on data collection.',
                'content' => 'Using ODK and Kobo for field data collection.',
            ],
            [
                'title' => 'Remote Sensing for Agriculture',
                'slug' => 'remote-sensing-agriculture',
                'excerpt' => 'Apply remote sensing.',
                'content' => 'Training on applying satellite data for agricultural planning.',
            ],
            [
                'title' => 'Intro to Cartography',
                'slug' => 'intro-to-cartography',
                'excerpt' => 'Learn map design.',
                'content' => 'Basic principles of cartography and map aesthetics.',
            ],
            [
                'title' => 'GIS for Disaster Response',
                'slug' => 'gis-disaster-response',
                'excerpt' => 'GIS saves lives.',
                'content' => 'How GIS is used in emergency and disaster response planning.',
            ],
        ];

        foreach ($fptPosts as $post) {
            Post::create(array_merge($post, [
                'category_id' => $program->id,
                'subcategory_id' => $fpt->id,
                'author_id' => $author->id,
                'status' => 'published',
                'cover_image' => 'https://picsum.photos/1080/500?random=' . rand(201, 300),
                'pdf_link'=> 'https://morth.nic.in/sites/default/files/dd12-13_0.pdf',
                'images_repository' => 'https://drive.google.com/drive/u/0/folders/1dNUvhLaPV5XjIUFUmnNGMaiUBvsh4gte'
            ]));
        }





if ($course) {
    for ($i = 1; $i <= 2; $i++) {
        Post::create([
            'title' => "Short Course Program Post {$i}",
            'slug' => Str::slug("short-course-program-post-{$i}"),
            'subtitle' => "Subtitle for Short Course Program post {$i}",
            'excerpt' => "This is a short excerpt for Short Course Program post {$i}.",
            'content' => "Here goes the full content for Short Course Program post {$i}.",
            'category_id' => $program->id,
            'subcategory_id' => $course->id,
            'author_id' => $author->id,
            'status' => 'published',
            'cover_image' => "https://picsum.photos/seed/shortcourse{$i}/1080/500",
            'pdf_link' => "https://example.com/sample-short-course-{$i}.pdf",
            'images_repository' => "https://drive.google.com/drive/u/0/folders/1dNUvhLaPV5XjIUFUmnNGMaiUBvsh4gte",
        ]);
    }

if ($mentorship) {
    for ($i = 1; $i <= 2; $i++) {
        Post::create([
            'title' => "Mentorship Program Post {$i}",
            'slug' => Str::slug("mentorship-program-post-{$i}"),
            'subtitle' => "Subtitle for Mentorship Program post {$i}",
            'excerpt' => "This is a short excerpt for Mentorship Program post {$i}.",
            'content' => "Here goes the full content for Mentorship Program post {$i}.",
            'category_id' => $program->id,
            'subcategory_id' => $mentorship->id,
            'author_id' => $author->id,
            'status' => 'published',
            'cover_image' => "https://picsum.photos/seed/mentorship{$i}/1080/500",
            'pdf_link' => "https://example.com/sample-mentorship-{$i}.pdf",
            'images_repository' => "https://drive.google.com/drive/folders/sample-mentorship-{$i}",
        ]);
    }
}

    if ($membership) {
    for ($i = 1; $i <= 2; $i++) {
        Post::create([
            'title' => "Membership Program Post {$i}",
            'slug' => Str::slug("membership-program-post-{$i}"),
            'subtitle' => "Subtitle for Membership Program post {$i}",
            'excerpt' => "This is a short excerpt for Membership Program post {$i}.",
            'content' => "Here goes the full content for Membership Program post {$i}.",
            'category_id' => $program->id,
            'subcategory_id' => $membership->id,
            'author_id' => $author->id,
            'status' => 'published',
            'cover_image' => "https://picsum.photos/seed/membership{$i}/1080/500",
            'pdf_link' => "https://example.com/sample-membership-{$i}.pdf",
            'images_repository' => "https://drive.google.com/drive/folders/sample-membership-{$i}",
        ]);
    }
}
}





    }






    }

