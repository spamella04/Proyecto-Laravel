<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Student::factory()->create(
            [
                'cif' => '12345678A',
                'name' => 'John ',
                'lastname' => 'Doe',
                'email' => 'jhonDoe',
                'phone' => '123456789',
            ]
        );

        \App\Models\Student::factory()->create(
            [
                'cif' => '12345678B',
                'name' => 'Jane ',
                'lastname' => 'Doe',
                'email' => 'janeDoe',
                'phone' => '123456789',
            ]
        );

     
        //crear registros de carreras
        \App\Models\Carrera::factory()->create(
            [
                'codigo' => '1',
                'nombre' => 'Ingeniería en Sistemas',
                'descripcion' => 'Ingeniería en Sistemas',
            ]
        );

        \App\Models\Carrera::factory()->create(
            [
                'codigo' => '2',
                'nombre' => 'Ingeniería Industrial',
                'descripcion' => 'Ingeniería Industrial',
            ]
        );
    }
}
