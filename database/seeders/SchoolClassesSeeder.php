<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class SchoolClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $faker = Faker::create();

        $levels = ['6ème', '5ème', '4ème', '3ème', '2nde', '1ère', 'Terminale'];

        foreach (range(1, 15) as $index) {
            DB::table('school_classes')->insert([
                'name' => 'Classe ' . $faker->unique()->word,
                'level' => $faker->randomElement($levels),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }   
    }
}
