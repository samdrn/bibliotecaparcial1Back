<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('books')->insert([
            'title' => 'Don Quijote de la Mancha', 'Cien años de soledad',
            'description' => 'Aventuras de un caballero loco',
            'isbn' => '9788424115531',
            'total_copies' => 5,
            'available_copies' => 5,
            'status' => 'disponible',
        ]);

        // Create 90 additional books using the factory
        //Books::factory()->count(90)->create();
    }
}
