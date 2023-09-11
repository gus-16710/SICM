<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Institution>
 */
class InstitutionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'regSanitario' => fake()->name(),
            'telefono' => fake()->phoneNumber(),
            'RFC' => fake()->name(),
            'colonia' => fake()->streetName(),
            'calle' => fake()->streetAddress(),
            'cp' => fake()->postcode(),
            'coloniaFiscal' => fake()->streetName(),
            'calleFiscal' => fake()->streetAddress(),
            'cpFiscal' => fake()->postcode(),
            'clave' => fake()->postcode(),
        ];
    }
}
