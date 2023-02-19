<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class HobbieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobbies')->insert(array (

            0 =>
            array (
                'id' => '1',
                'nome' => 'Pescar',
            ),
            1 =>
            array (
                'id' => '2',
                'nome' => 'Jogar Bola',
            ),
            2 =>
            array (
                'id' => '3',
                'nome' => 'Tocar Violão',
            ),
            3 =>
            array (
                'id' => '4',
                'nome' => 'Andar de Bicicleta',
            ),
            4 =>
            array (
                'id' => '5',
                'nome' => 'Academia',
            ),

        ));
    }
}
