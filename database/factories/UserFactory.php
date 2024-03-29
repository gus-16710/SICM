<?php

namespace Database\Factories;

use App\Models\Institution;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $email = fake()->unique()->safeEmail();

        return [
            'nombre' => fake()->name(),
            'paterno' => fake()->name(),
            'materno' => fake()->name(),
            'mail' => $email,
            'categoria' => fake()->name(),
            'numEmpleado' => fake()->randomNumber(5),
            'adscripcion' => fake()->text(),
            'idinstitucion' => Institution::factory(),
            'name' => fake()->name(),
            'email' => $email,
            'email_verified_at' => now(),            
            'remember_token' => Str::random(10),
            'password' => Hash::make('password'),
            'nickname' => 'admin',
            'alta' => 1,
            'estadoUsuario' => 1,
            'fechaPW' => Carbon::now(),
            'fechaAlta' => Carbon::now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
