<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['nombre' => 'libros de texto'],
            ['nombre' => 'novelas'],
            ['nombre' => 'cuentos'],
            ['nombre' => 'poemas'],
            ['nombre'=>'cientìfico']
        ]);
    }
}
