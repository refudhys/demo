<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            ['categoria' => 1,'descripcion' => '¿Por que es importante escuchar las ideas y opiniones de las demás personas?','categoria_id' =>2],
            ['categoria' => 1,'descripcion' => '¿Que es un panel de discusión?','categoria_id' =>2]
        ];
        DB::table('preguntas')->insert($data);

    }



}
