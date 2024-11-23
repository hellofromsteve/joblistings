<?php

namespace Database\Seeders;

use App\Models\Listing;
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

        Listing::factory(20)->create();
    }
}
