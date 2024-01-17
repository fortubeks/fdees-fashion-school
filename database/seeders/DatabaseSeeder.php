<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'fdeesfashionhouse@gmail.com',
            'password' => Hash::make('secret'),
            'role' => 1,
        ]);
        $this->call([CoursesTableSeeder::class]);
        $this->call([StatesTableSeeder::class]);
    }
}
