<?php

namespace Database\Seeders;

use App\Models\Programas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProgramasSeeder::class);
        $this->call(FichasSeeder::class);
        $this->call(InstructoresSeeder::class);
        $this->call(AprendicesSeeder::class);
    }
}
