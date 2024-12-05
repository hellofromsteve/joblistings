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
        // User::factory(4)->create();

        User::factory()->create([

            'full_name' => 'Stephen Employer',
            'email' => 'e@e.com',
            'phone' => 000,
            'password' => Hash::make('eee'),
            'account_type' => 'employer',
            'user_account' => 00000000,
        ]);

        User::factory()->create([

            'full_name' => 'Stephen Candidate',
            'email' => 'c@c.com',
            'phone' => 111,
            'password' => Hash::make('ccc'),
            'account_type' => 'candidate',
            'user_account' => 222222222,
        ]);

        User::factory()->create([

            'full_name' => 'Stephen Admin',
            'email' => 'a@a.com',
            'phone' => 666,
            'password' => Hash::make('aaa'),
            'account_type' => 'admin',
            'user_account' => 99999999,
        ]);


        Listing::factory(250)->create();
    }
}
