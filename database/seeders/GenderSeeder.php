<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gender::Create([
            ['name' => 'Male', 'created_at' => now(), 'updated_at' => now()],
        ]);
        Gender::Create([
            ['name' => 'Female', 'created_at' => now(), 'updated_at' => now()],
        ]);
        Gender::Create([
            ['name' => 'Other', 'created_at' => now(), 'updated_at' => now()],
        ]);

    }
}
