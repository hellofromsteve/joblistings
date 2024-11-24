<?php

namespace Database\Seeders;

use App\Models\JobCategory;
use App\Models\Listing;
use App\Models\Qualification;
use App\Models\Regions;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        User::factory()->create([

            'full_name' => 'Stephen Asare',
            'email' => 'c@c.com',
            'phone' => 123,
            'password' => Hash::make('ccc'),
            'account_type' => 'candidate',
            'user_account' => 00000000,
        ]);

        User::factory()->create([

            'full_name' => 'Stephen Asare',
            'email' => 'e@e.com',
            'phone' => 123,
            'password' => Hash::make('eee'),
            'account_type' => 'employer',
            'user_account' => 99999999,
        ]);

        User::factory()->create([

            'full_name' => 'Stephen Asare',
            'email' => 'ee@e.com',
            'phone' => 123,
            'password' => Hash::make('eee'),
            'account_type' => 'employer',
            'user_account' => 99999991,
        ]);

        JobCategory::factory()->create(['name' => 'IT Service', 'value' => 'it_service']);
        JobCategory::factory()->create(['name' => 'Customer Service', 'value' => 'customer_service']);
        JobCategory::factory()->create(['name' => 'Hospitality', 'value' => 'hospitality']);
        JobCategory::factory()->create(['name' => 'Education', 'value' => 'education']);
        JobCategory::factory()->create(['name' => 'Sales', 'value' => 'sales']);
        JobCategory::factory()->create(['name' => 'Other', 'value' => 'other']);

        Qualification::factory()->create(['name' => 'BECE', 'value' => 'bece']);
        Qualification::factory()->create(['name' => 'WASSCE', 'value' => 'wassce']);
        Qualification::factory()->create(['name' => 'Degree / Diploma', 'value' => 'degree-diploma']);
        Qualification::factory()->create(['name' => 'PHD', 'value' => 'PHD']);

        Regions::factory()->create(['name' => 'Greater Accra', 'value' => 'greater-accra']);
        Regions::factory()->create(['name' => 'Ashanti', 'value' => 'ashanti']);
        Regions::factory()->create(['name' => 'Western', 'value' => 'western']);
        Regions::factory()->create(['name' => 'Western North', 'value' => 'western-north']);
        Regions::factory()->create(['name' => 'Eastern', 'value' => 'eastern']);
        Regions::factory()->create(['name' => 'Central', 'value' => 'central']);
        Regions::factory()->create(['name' => 'Northern', 'value' => 'northern']);
        Regions::factory()->create(['name' => 'Savannah', 'value' => 'savannah']);
        Regions::factory()->create(['name' => 'Upper East', 'value' => 'upper-east']);
        Regions::factory()->create(['name' => 'Upper West', 'value' => 'upper-west']);
        Regions::factory()->create(['name' => 'Bono', 'value' => 'bono']);
        Regions::factory()->create(['name' => 'Bono East', 'value' => 'bono-east']);
        Regions::factory()->create(['name' => 'Ahafo', 'value' => 'ahafo']);
        Regions::factory()->create(['name' => 'Volta', 'value' => 'volta']);
        Regions::factory()->create(['name' => 'Oti', 'value' => 'oti']);
        Regions::factory()->create(['name' => 'North East', 'value' => 'north-east']);


        Listing::factory(20)->create();
    }
}