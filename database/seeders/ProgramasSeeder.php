<?php

namespace Database\Seeders;

use App\Models\Programas;
use Illuminate\Database\Seeder;

class ProgramasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $programas=
        [[
            'codigo'=>'113602',
            'programa'=>'Analisis y desarrollo de sistemas de información',
            'sigla'=>'ADSI'
        ],
        [
            'codigo'=>'455221',
            'programa'=>'Redes Informaticas',
            'sigla'=>'REDI'
        ],
        [
            'codigo'=>'662285',
            'programa'=>'Tecnico Software',
            'sigla'=>'TSOFT'
        ]];
        foreach ($programas as $programa){
            Programas::create($programa);
        }
    }
}
