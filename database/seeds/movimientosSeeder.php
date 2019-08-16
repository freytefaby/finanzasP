<?php

use Illuminate\Database\Seeder;

class movimientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movimientos')->insert([
            'id_user'=>1,
            'id_tipo_movimiento'=>1,
            'descripcion'=>'nothing',
            'value'=>0
        ]);
    }
}
