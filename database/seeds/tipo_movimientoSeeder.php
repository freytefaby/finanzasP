<?php

use Illuminate\Database\Seeder;

class tipo_movimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_movimiento')->insert([
            'descripcion'=>'Retiro en cajero nequi',
            'tipo'=>'debito'
        ]);
    }
}
