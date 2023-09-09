<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class autorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('autors')->insert([
            ['nombre' => 'Octavio Paz', 'nacionalidad' => 'Mexicana', 'descripcion' => 'Poeta, escritor y diplomático mexicano ganador del Premio Nobel de Literatura en 1990.'],
            ['nombre' => 'Elena Garro', 'nacionalidad' => 'Mexicana', 'descripcion' => 'Escritora mexicana conocida por su novela "Los recuerdos del porvenir" y sus relatos cortos.'],
            ['nombre' => 'Juan Rulfo', 'nacionalidad' => 'Mexicana', 'descripcion' => 'Escritor, guionista y fotógrafo mexicano. Autor de "Pedro Páramo" y "El Llano en llamas".'],
            ['nombre' => 'Charles Dickens', 'nacionalidad' => 'Británica', 'descripcion' => 'Novelista inglés, uno de los más conocidos de la literatura universal y creador de importantes personajes literarios.'],
            ['nombre' => 'Secretaría de Educación Pública', 'nacionalidad' => 'Mexicana', 'descripcion' => 'Institución del gobierno mexicano encargada de la educación en México.'],
            ['nombre' => 'Bruno Traven', 'nacionalidad' => 'Alemana', 'descripcion' => 'Escritor alemán conocido principalmente por su novela "El tesoro de la Sierra Madre".'],
            ['nombre' => 'Julio Cortázar', 'nacionalidad' => 'Argentina', 'descripcion' => 'Escritor y traductor argentino, figura prominente del boom latinoamericano con obras como "Rayuela".'],
            ['nombre' => 'Oscar Wilde', 'nacionalidad' => 'Irlandesa', 'descripcion' => 'Dramaturgo, poeta y novelista irlandés. Conocido por su agudo ingenio y su estilo flamboyant.'],
            ['nombre' => 'Ignacio Manuel Altamirano', 'nacionalidad' => 'Mexicana', 'descripcion' => 'Escritor, periodista y político mexicano que desempeñó un papel importante en la consolidación de la nación mexicana.'],
            ['nombre' => 'Paul de Kruif', 'nacionalidad' => 'Estadounidense', 'descripcion' => 'Microbiólogo y autor estadounidense, conocido por su obra "Los cazadores de microbios".'],
            ['nombre' => 'Gabriel García Márquez', 'nacionalidad' => 'Colombiana', 'descripcion' => 'Novelista, cuentista, guionista y periodista colombiano. Ganador del Premio Nobel y conocido por "Cien años de soledad".']
        ]);
    }
}
