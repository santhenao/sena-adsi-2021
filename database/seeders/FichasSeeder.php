<?php

namespace Database\Seeders;

use App\Models\Fichas;

use App\Models\Programas;
use Illuminate\Database\Seeder;

class FichasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fichas =
        [[
            'jornada' => 'Diurna',
            'nombre' => 'JAVA EE',
            'actividad' => 'Conocimientos avanzados sobre Java Empresarial',
            'programas_id' => Programas::all()->random()->id
        ],
        [
            'jornada' => 'Diurna',
            'nombre' => 'JAVA SE',
            'actividad' => 'Conocimientos basicos sobre Java Estandar',
            'programas_id' => Programas::all()->random()->id

        ],
        [
            'jornada' => 'Nocturna',
            'nombre' => 'PHP',
            'actividad' => 'Conocimientos avanzados sobre Java - Laravel',
            'programas_id' => Programas::all()->random()->id

        ]];

        foreach ($fichas as $ficha){
            Fichas::create($ficha);
        }

    }
}
