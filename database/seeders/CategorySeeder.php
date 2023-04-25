<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(
            [
                [
                'name' => 'Physical Exercise',
                'slug' => 'physical-excercise'
                ],
                [   'name' => 'Gym Excercise',
                    'slug' => 'gym-excercise'
                ],
                [
                    'name' => 'Meditation',
                    'slug' => 'meditation'
                ]
            ]
    );
    }
}
