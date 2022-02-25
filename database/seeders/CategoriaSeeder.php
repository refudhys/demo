<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['descripcion' => 'Español'],
            ['descripcion' => 'Matematicas'],
            ['descripcion' => 'Ingles'],

        ];
        DB::table('categoria')->insert($data);
    }
}
