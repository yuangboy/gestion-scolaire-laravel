<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $subjects = [
            'Mathématiques', 'Français', 'Anglais', 'Physique-Chimie', 'SVT',
            'Histoire-Géographie', 'Philosophie', 'Informatique', 'Économie',
            'EPS', 'Musique', 'Arts plastiques', 'Technologie', 'Espagnol', 'Allemand'
        ];

        foreach (range(1, 15) as $index) {
            DB::table('subjects')->insert([
                'name' => $subjects[$index - 1], // prend les 15 matières de la liste
                'coefficient' => $faker->numberBetween(1, 5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
