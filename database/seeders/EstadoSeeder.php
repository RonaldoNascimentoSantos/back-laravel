<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert(array (

            0 =>
            array (
                'id' => '1',
                'nome' => 'BA',
            ),
            1 =>
            array (
                'id' => '2',
                'nome' => 'PB',
            ),
            2 =>
            array (
                'id' => '3',
                'nome' => 'PE',
            ),


        ));
    }
}
