<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class AlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->insert([
            ['nome' => 'ana', 'email' => 'ana@ifms.edu',
            'data_nascimento' => '2000-01-01','curso' => 'Sistemas de Informação'],
            ['nome' => 'alifer', 'email' => 'alifer@ifms.edu',
            'data_nascimento' => '2000-01-01','curso' => 'Sistemas de Informação'],
            ['nome' => 'bruno', 'email' => 'bruno@ifms.edu',
            'data_nascimento' => '2000-01-01','curso' => 'Sistemas de Informação']
        ]);
    }
}