<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\EventCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'event_category_id'=>$this->faker->randomElement([1,2]),
            'title'=> $this->faker->randomElement(['What is Lorem Ipsum?', 'Where can I get some?', 'ual teachings of the great explorer of the truth, the m', '1914 translation by H. Rackham', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.']),
            'description'=>$this->faker->sentence(),
            'image'=>'https://picsum.photos/200/300',
            'event_images'=>'https://picsum.photos/200/300',
            'updated_by'=>User::factory()

        ];
    }
}
