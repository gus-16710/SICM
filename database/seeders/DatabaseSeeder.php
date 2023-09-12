<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\User;
use App\Models\Institution;
use App\Models\Module;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Institution::factory(10)->create();            

        User::factory(1)->hasAttached(
            Module::factory()->count(6)
            ->sequence(
                ['Permiso' => 'Quimioterapia', 'menu' => 'Servicios'],
                ['Permiso' => 'Nutrición Parenteral', 'menu' => 'Servicios'],
                ['Permiso' => 'Antibiótico', 'menu' => 'Servicios'],
                ['Permiso' => 'Bitácora Quimioterapia', 'menu' => 'Bitácoras'],
                ['Permiso' => 'Bitácora Antibióticos', 'menu' => 'Bitácoras'],
                ['Permiso' => 'Bitácora Nutrición', 'menu' => 'Bitácoras'],
            ), 
            ['fechaRegistro' => Carbon::now(), 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()],
            )->create();
        
        Book::factory(36)->for(User::all()->random())->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
