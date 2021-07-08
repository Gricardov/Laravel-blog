<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();
        $curso->name='Laraves';
        $curso->description='El mejor framework';
        $curso->categoria='Desarrollo web';
        $curso->save();
    }
}
