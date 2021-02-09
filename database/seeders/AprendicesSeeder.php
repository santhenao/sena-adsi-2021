<?php

namespace Database\Seeders;

use App\Models\Aprendices;
use App\Models\Fichas;
use App\Models\Programas;
use Illuminate\Database\Seeder;

class AprendicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $aprendices =
        [
            ['tipo_documento'=>'CC','documento'=>'11598788', 'nombres'=>'Fredy Alberto', 'apellidos'=>'Maluma', 'correo'=>'correoMaluma@hotmail.com', 'nacimiento'=>'1998/10/08', 'genero'=>'M', 'fichas_id'=> Fichas::all()->random()->id],
            ['tipo_documento'=>'CC','documento'=>'91111544', 'nombres'=>'Cristian', 'apellidos'=>'Montañez', 'correo'=>'correoCristian@gmail.com', 'nacimiento'=>'1993/06/12', 'genero'=>'M', 'fichas_id'=> Fichas::all()->random()->id],
            ['tipo_documento'=>'CE','documento'=>'10002465', 'nombres'=>'Rodolfa', 'apellidos'=>'Rojas', 'correo'=>'correoRodolfa@outlook.es', 'nacimiento'=>'1990/02/28', 'genero'=>'F', 'fichas_id'=> Fichas::all()->random()->id]
        ];

        foreach ($aprendices as $aprendiz){
            Aprendices::create($aprendiz);
        }




    }
}
