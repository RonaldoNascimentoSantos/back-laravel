<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cidades')->insert(array (

            0 =>
            array (
                'id' => '1',
                'nome' => 'Salvador',
                'estado_id' => '1',
            ),
            1 =>
            array (
                'id' => '2',
                'nome' => 'Água Fria',
                'estado_id' => '1',
            ),
            2 =>
            array (
                'id' => '3',
                'nome' => 'Alagoinhas',
                'estado_id' => '1',
            ),
            3 =>
            array (
                'id' => '4',
                'nome' => 'Campina Grande',
                'estado_id' => '2',
            ),
            4 =>
            array (
                'id' => '5',
                'nome' => 'Queimadas',
                'estado_id' => '2',
            ),
            5 =>
            array (
                'id' => '6',
                'nome' => 'Patos',
                'estado_id' => '2',
            ),
            6 =>
            array (
                'id' => '7',
                'nome' => 'Recife',
                'estado_id' => '3',
            ),
            7 =>
            array (
                'id' => '8',
                'nome' => 'Olinda',
                'estado_id' => '3',
            ),
            8 =>
            array (
                'id' => '9',
                'nome' => 'Jaboatão dos Guararapes',
                'estado_id' => '3',
            ),

        ));
    }
}
