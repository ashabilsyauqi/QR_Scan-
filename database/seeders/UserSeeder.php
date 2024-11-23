<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'panitia',
            'username' => 'panitia',
            'password' => Hash::make('panitia'),

        ]);

        User::factory()->create([
            'name' => 'vendor',
            'username' => 'vendor',
            'password' => Hash::make('vendor'),

        ]);

        User::factory()->create([
            'name' => 'ashabil',
            'username' => 'ashabil',
            'password' => Hash::make('ashabil'),

        ]);
    }
}
