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
            ['name_cate3' => 'Begginer'],
            ['name_cate3' => 'Nuevo Talento'],
            ['name_cate3' => 'Novel'],
            ['name_cate3' => 'Libre'],
            ['name_cate3' => 'Abierta']
        ]);
    }
}
