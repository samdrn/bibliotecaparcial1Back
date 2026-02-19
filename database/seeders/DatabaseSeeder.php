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
            [
                'title' => 'Don Quijote de la Mancha',
                'description' => 'Aventuras de un caballero loco',
                'isbn' => '9788424115531',
                'total_copies' => 5,
                'available_copies' => 5,
                'status' => 'disponible',
            ],
            [
                'title' => 'Cien años de soledad',
                'description' => 'Historia de la familia Buendía',
                'isbn' => '9788424115532',
                'total_copies' => 3,
                'available_copies' => 3,
                'status' => 'disponible',
            ],
            [
                'title' => 'Orgullo y Prejuicio',
                'description' => 'Novela de costumbres y amor',
                'isbn' => '9788424115533',
                'total_copies' => 4,
                'available_copies' => 4,
                'status' => 'disponible',
            ],
            [
                'title' => 'Crimen y Castigo',
                'description' => 'Dilemas morales y justicia',
                'isbn' => '9788420651330',
                'total_copies' => 2,
                'available_copies' => 2,
                'status' => 'disponible',
            ],
            [
                'title' => 'El Principito',
                'description' => 'Relato corto sobre la vida',
                'isbn' => '9780156013987',
                'total_copies' => 10,
                'available_copies' => 10,
                'status' => 'disponible',
            ],
            [
                'title' => '1984',
                'description' => 'Distopía política y vigilancia',
                'isbn' => '9788466332514',
                'total_copies' => 6,
                'available_copies' => 6,
                'status' => 'disponible',
            ],
            [
                'title' => 'La Odisea',
                'description' => 'Viaje épico de Ulises',
                'isbn' => '9788424924515',
                'total_copies' => 3,
                'available_copies' => 3,
                'status' => 'disponible',
            ],
            [
                'title' => 'El Gran Gatsby',
                'description' => 'El sueño americano en los años 20',
                'isbn' => '9788467036411',
                'total_copies' => 4,
                'available_copies' => 4,
                'status' => 'disponible',
            ],
            [
                'title' => 'Rayuela',
                'description' => 'Novela experimental de Cortázar',
                'isbn' => '9788420431321',
                'total_copies' => 2,
                'available_copies' => 2,
                'status' => 'disponible',
            ],
            [
                'title' => 'Hamlet',
                'description' => 'Tragedia de venganza y duda',
                'isbn' => '9788437600123',
                'total_copies' => 5,
                'available_copies' => 5,
                'status' => 'disponible',
            ],
        ]);

        // Create 90 additional books using the factory
        //Books::factory()->count(90)->create();
    }
}
