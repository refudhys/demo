<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            ['respuestas' => 'Para contradecir los puntos de opinión','resultado' => 0,'preguntas_id' =>1],
            ['respuestas' => 'Por que amplias tu conocimiento' ,'resultado'=> 1,'preguntas_id' =>1],
            ['respuestas' => 'Por que tienes curiosidad' ,'resultado'=> 0,'preguntas_id' =>1],
            ['respuestas' => 'Por educación' ,'resultado'=> 0,'preguntas_id' =>1],
            ['respuestas' => 'Es contra decir las opiniones de los demás' ,'resultado'=> 0,'preguntas_id' =>1],
            ['respuestas' => 'Es como un debate' ,'resultado'=> 0,'preguntas_id' =>1],
            ['respuestas' => 'Es un intercambio publico de ideas' ,'resultado'=> 0,'preguntas_id' =>1],
            ['respuestas' => 'Es cuando hablas con los demás de lo que sea' ,'resultado'=> 0,'preguntas_id' =>1],
        ];
        DB::table('respuestas')->insert($data);
    }
}
