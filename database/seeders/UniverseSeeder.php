<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniverseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Universe::create([
            ['name' => 'Marvel', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
        Universe::create([
            ['name' => 'DC', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

    }
}
