<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence,
            'subtitle' => 'A case study of Ifakara Town Council in Morogoro region, Tanzania',
            'description' => $this->faker->paragraph,
            'image' => fake()->imageUrl(),
            'status' => $this->faker->randomElement(['completed', 'ongoing', 'pending']),
            'category' => $this->faker->randomElement(['geospatial', 'remote_sensing', 'gis_mapping']),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'achievements' => $this->faker->randomElements([
                'Mapped 10 regions',
                'Collected 5TB of data',
                'Used drone technology',
                'Achieved 95% accuracy',
                'Collaborated with local government'
            ], rand(1, 3)),  // Pick 1-3 random achievements
            'pdf_link'=>'https://docs.google.com/document/d/1OouL_-pzs5LcqfqH3bUKZNeacHDUz2Lg/edit?usp=sharing&ouid=104568469268142759477&rtpof=true&sd=true',
            'other_imgs'=>'https://drive.google.com/drive/folders/1-ZrDRMf20MuW_Lz0hbh9gmvNlx0WSi-l?usp=sharing'
        ];
    }
}
