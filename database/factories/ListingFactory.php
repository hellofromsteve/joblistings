<?php

namespace Database\Factories;

use App\Models\JobListing;
use App\Models\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobListing>
 */
class ListingFactory extends Factory
{

    protected $model = Listing::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'user_id' => fake()->randomElement([1, 2, 3]),
            'title' => implode(' ', fake()->words(3)),
            'gender' => fake()->randomElement(['Male', 'Female', 'Either']),
            'category' => fake()->randomElement(['Creative', 'Customer', 'Education', 'Engineering', 'Finance', 'Healthcare', 'Sales', 'Technology']),
            'qualification' => fake()->randomElement(['Degree', 'Wassce', 'JHS']),
            'region' => fake()->randomElement(['Eastern', 'Greater Accra', 'Bono', 'Oti', 'Savanna', 'Ahafo']),
            'salary' => fake()->numberBetween(10000, 90000),
            'city' => fake()->randomElement(['Tamale', 'Ho', 'Kasoa', 'Kumasi', 'Madina', 'Takoradi']),
            'language' => fake()->randomElement(['English', 'Spanish']),
            'description' => fake()->paragraph(25),
            'status' => 1,
            'slug' => fake()->slug(6)

        ];
    }
}
