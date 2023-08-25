<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoria3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categorias')->insert([
            ['name' => 'Begginer'],
            ['name' => 'Nuevo Talento'],
            ['name' => 'Novel'],
            ['name' => 'Libre'],
            ['name' => 'Abierta']
        ]);
    }
}
