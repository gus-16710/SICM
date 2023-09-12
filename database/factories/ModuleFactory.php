<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Module>
 */
class ModuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Permiso' => fake()->word(),
            'entorno' => fake()->randomElement(['W']),
            'codigo' => fake()->numerify(), 
            'menu' => fake()->word(),            
        ];
    }
}
