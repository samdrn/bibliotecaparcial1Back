<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        use Faker\Generator as Faker;
        $factory->define(App\Book::class, function (Faker $faker) {
            return [
                'title' => $faker->name,
                'description' => $faker->paragraph,
                'isbn' => $faker->isbn13,
                'total_copies' => $faker->numberBetween(1, 10),
                'available_copies' => $faker->numberBetween(1, 10),
            ];
        });

        //Crear 90 libros de ejemplo
        for ($i = 0; $i < 90; $i++) {
            $factory->create();
            }
    }
}