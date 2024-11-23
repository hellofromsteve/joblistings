<?php

namespace Database\Factories;

use App\Models\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
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

            'user_id' => fake()->randomElement([6, 7]),
            'job_title' => fake()->sentence(3),
            'gender' => fake()->randomElement(['Male', 'Female', 'Both']),
            'job_cat' => fake()->randomElement(['It Service', 'Web Dev', 'Customer Service']),
            'qualification' => fake()->randomElement(['Degree', 'SHS', 'PhD', 'JHS']),
            'salary' => fake()->numberBetween(10000, 90000),
            'language' => fake()->randomElement(['English', 'Spanish']),
            'job_desc' => fake()->paragraph(15),
            'job_status' => 1
        ];
    }
}
