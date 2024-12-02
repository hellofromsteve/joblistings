<?php

namespace Database\Factories;

use App\Models\JobListing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobListing>
 */
class JobListingFactory extends Factory
{

    protected $model = JobListing::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'user_id' => fake()->randomElement([1, 2, 3]),
            'job_title' => implode(' ', fake()->words(3)),
            'gender' => fake()->randomElement(['Male', 'Female', 'Either']),
            'category' => fake()->randomElement(['creative', 'customer', 'education', 'engineering', 'finance', 'healthcare', 'sales', 'technology']),
            'qualification' => fake()->randomElement(['Degree', 'Wassce', 'JHS']),
            'region' => fake()->randomElement(['Eastern', 'Greater Accra', 'Bono', 'Oti', 'Savanna', 'Ahafo']),
            'salary' => fake()->numberBetween(10000, 90000),
            'city' => fake()->randomElement(['Tamale', 'Ho', 'Kasoa', 'Kumasi', 'Madina', 'Takoradi']),
            'language' => fake()->randomElement(['English', 'Spanish']),
            'job_desc' => fake()->paragraph(25),
            'job_status' => 1,
            'slug' => fake()->slug(6)

        ];
    }
}
