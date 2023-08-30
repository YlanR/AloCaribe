<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoria2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categoria2')->insert([
            ['name_cate2' => 'Solista Femenido'],
            ['name_cate2' => 'Solista Masculino'],
            ['name_cate2' => 'Parejas'],
            ['name_cate2' => 'Grupos'],
            ['name_cate2' => 'Duo Masculino'],
            ['name_cate2' => 'Duo Femenido'],
            ['name_cate2' => 'Rueda'],
            ['name_cate2' => 'Coreográfico'],
            ['name_cate2' => 'Parejas'],
            ['name_cate2' => 'Lady Style'],
            ['name_cate2' => 'Men Style']
        ]);
    }
}
