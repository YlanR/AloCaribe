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
            ['name' => 'Solista Femenido'],
            ['name' => 'Solista Masculino'],
            ['name' => 'Parejas'],
            ['name' => 'Grupos'],
            ['name' => 'Duo Masculino'],
            ['name' => 'Duo Femenido'],
            ['name' => 'Rueda'],
            ['name' => 'Coreográfico'],
            ['name' => 'Parejas'],
            ['name' => 'Lady Style'],
            ['name' => 'Men Style']
        ]);
    }
}
