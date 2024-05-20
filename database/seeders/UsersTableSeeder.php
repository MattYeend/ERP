<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Matt Y',
                'email' => 'matty@test.com',
                'password' => Hash::make('password123'),
                'super_admin' => true,
                'admin' => false, // Make sure this column exists in your table
            ],
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('password123'),
                'super_admin' => false,
                'admin' => true,
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane@example.com',
                'password' => Hash::make('password123'),
                'super_admin' => false,
                'admin' => true,
            ],
            [
                'name' => 'Mike Johnson',
                'email' => 'mike@example.com',
                'password' => Hash::make('password123'),
                'super_admin' => false,
                'admin' => false,
            ],
        ]);
    }
}
