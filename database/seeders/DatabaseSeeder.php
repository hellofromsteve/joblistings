<?php

namespace Database\Seeders;

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
            'email' => 'a@a.com',
            'phone' => 123,
            'password' => Hash::make('aaa'),
            'account_type' => 'candidate',
            'user_account' => 00000000,
        ]);
    }
}
