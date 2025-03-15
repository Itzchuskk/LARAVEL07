<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SuperheroeFactory extends Factory
{
    public function definition(): array
     {
        return [
            'universe_id'=> fake()->numberBetween(1, 2),,
            'gender:id'=> fake()->numberBetween(1, 3),
            'name'=> fake()->name(),
            'real_name'=> fake()->userName(),
            'picture'=> fake()->imageUrl(640, 480 'superheroes'),

        ];
     }
}