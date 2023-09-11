<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\User;
use App\Models\Institution;
use App\Models\Module;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Module::factory(5)->create();
        
        Institution::factory(10)->create();
        
        // User::factory(1)->hasAttached(Module::factory()->count(3), 
            // ['fechaRegistro' => fake()->dateTime(), 
            // 'created_at' => fake()->dateTime(), 
            // 'updated_at' => fake()->dateTime()])->create();

        User::factory(1)->hasAttached(
            Module::factory()->count(3)
            ->sequence(
                ['Permiso' => 'Quimioterapia'],
                ['Permiso' => 'Nutrición Parenteral'],
                ['Permiso' => 'Antibiótico'],
            ), 
            ['fechaRegistro' => fake()->dateTime(), 
            'created_at' => fake()->dateTime(), 
            'updated_at' => fake()->dateTime()],
            )->create();
        
        Book::factory(36)->for(User::all()->random())->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
