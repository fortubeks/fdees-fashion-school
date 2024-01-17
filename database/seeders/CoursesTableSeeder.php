<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Beginner',
                    'duration' => 3,
                    'cost' => 30000,
            ],[
                'id' => 2,
                'name' => 'Intermediate',
                'duration' => 3,
                'cost' => 60000,
            ],[
                'id' => 3,
                'name' => 'Advanced',
                'duration' => 3,
                'cost' => 90000,
            ]
        ]);
    }
}
