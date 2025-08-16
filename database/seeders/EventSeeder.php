<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Event::factory(15)->create();
        DB::table('events')->insert([
    [
        'event_category_id' => 1,
        'title' => 'The Future of Tech',
        'description' => 'Exploring the latest trends and innovations in technology and how they impact our daily lives.',
        'image' => 'https://picsum.photos/200/300?random=1',
        'event_images' => 'https://picsum.photos/200/300?random=2',
        'updated_by' => 1
    ],
    [
        'event_category_id' => 2,
        'title' => 'Health & Wellness Expo',
        'description' => 'Join us for a full-day event dedicated to health, fitness, and personal well-being.',
        'image' => 'https://picsum.photos/200/300?random=3',
        'event_images' => 'https://picsum.photos/200/300?random=4',
        'updated_by' => 1
    ],
    [
        'event_category_id' => 1,
        'title' => 'Startup Pitch Night',
        'description' => 'Local entrepreneurs present their startups to investors and mentors in an exciting networking evening.',
        'image' => 'https://picsum.photos/200/300?random=5',
        'event_images' => 'https://picsum.photos/200/300?random=6',
        'updated_by' => 1
    ],
    [
        'event_category_id' => 2,
        'title' => 'Art & Culture Fair',
        'description' => 'Experience art, music, and cultural performances from local and international artists.',
        'image' => 'https://picsum.photos/200/300?random=7',
        'event_images' => 'https://picsum.photos/200/300?random=8',
        'updated_by' => 1
    ],
    [
        'event_category_id' => 1,
        'title' => 'Coding Bootcamp',
        'description' => 'Learn web development, mobile apps, and more in an intensive weekend coding bootcamp.',
        'image' => 'https://picsum.photos/200/300?random=9',
        'event_images' => 'https://picsum.photos/200/300?random=10',
        'updated_by' => 1
    ],
    [
        'event_category_id' => 2,
        'title' => 'Environmental Summit',
        'description' => 'Discussions and workshops on sustainability, climate change, and green initiatives.',
        'image' => 'https://picsum.photos/200/300?random=11',
        'event_images' => 'https://picsum.photos/200/300?random=12',
        'updated_by' => 1
    ],
    [
        'event_category_id' => 1,
        'title' => 'Music Festival',
        'description' => 'Enjoy live performances from various genres including rock, jazz, and electronic music.',
        'image' => 'https://picsum.photos/200/300?random=13',
        'event_images' => 'https://picsum.photos/200/300?random=14',
        'updated_by' => 1
    ],
    [
        'event_category_id' => 2,
        'title' => 'Business Networking Evening',
        'description' => 'Meet professionals from different industries, exchange ideas, and grow your network.',
        'image' => 'https://picsum.photos/200/300?random=15',
        'event_images' => 'https://picsum.photos/200/300?random=16',
        'updated_by' => 1
    ],
    [
        'event_category_id' => 1,
        'title' => 'Photography Workshop',
        'description' => 'Hands-on workshop to improve your photography skills with professional guidance.',
        'image' => 'https://picsum.photos/200/300?random=17',
        'event_images' => 'https://picsum.photos/200/300?random=18',
        'updated_by' => 1
    ],
    [
        'event_category_id' => 2,
        'title' => 'Charity Gala',
        'description' => 'A fundraising gala supporting local charities and community initiatives.',
        'image' => 'https://picsum.photos/200/300?random=19',
        'event_images' => 'https://picsum.photos/200/300?random=20',
        'updated_by' => 1
    ],
    [
        'event_category_id' => 1,
        'title' => 'Film Screening Night',
        'description' => 'Watch critically acclaimed films and participate in discussions with directors and actors.',
        'image' => 'https://picsum.photos/200/300?random=21',
        'event_images' => 'https://picsum.photos/200/300?random=22',
        'updated_by' => 1
    ],
    [
        'event_category_id' => 2,
        'title' => 'Startup Workshop',
        'description' => 'Learn how to turn your idea into a business with mentorship from industry experts.',
        'image' => 'https://picsum.photos/200/300?random=23',
        'event_images' => 'https://picsum.photos/200/300?random=24',
        'updated_by' => 1
    ],
    [
        'event_category_id' => 1,
        'title' => 'Yoga Retreat',
        'description' => 'A relaxing weekend retreat focused on yoga, meditation, and wellness.',
        'image' => 'https://picsum.photos/200/300?random=25',
        'event_images' => 'https://picsum.photos/200/300?random=26',
        'updated_by' => 1
    ],
    [
        'event_category_id' => 2,
        'title' => 'Tech Talk Series',
        'description' => 'Weekly talks from experts in AI, blockchain, and software engineering.',
        'image' => 'https://picsum.photos/200/300?random=27',
        'event_images' => 'https://picsum.photos/200/300?random=28',
        'updated_by' => 1
    ],
    [
        'event_category_id' => 1,
        'title' => 'Local Food Festival',
        'description' => 'Taste amazing dishes from local chefs and explore culinary delights.',
        'image' => 'https://picsum.photos/200/300?random=29',
        'event_images' => 'https://picsum.photos/200/300?random=30',
        'updated_by' => 1
    ],
]);

    }
}
