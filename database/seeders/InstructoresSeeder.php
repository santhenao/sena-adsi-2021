<?php

namespace Database\Seeders;

use App\Models\Fichas;
use App\Models\Instructores;
use App\Models\Programas;
use Illuminate\Database\Seeder;

class InstructoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $instructores =
        [
            ['nombres'=>'Pepito','apellidos'=>'Rosales', 'documento'=>'1223889506', 'foto_perfil'=>'FOTICO', 'fichas_id' => Fichas::all()->random()->id],
            ['nombres'=>'Roberto','apellidos'=>'Mora', 'documento'=>'981524925', 'foto_perfil'=>'FOTICO', 'fichas_id' => Fichas::all()->random()->id],
            ['nombres'=>'Fredy','apellidos'=>'Mayorga', 'documento'=>'336889955', 'foto_perfil'=>'FOTICO', 'fichas_id' => Fichas::all()->random()->id]
        ];

        foreach ($instructores as $instructor ){
            Instructores::create($instructor);
        }

    }
}
