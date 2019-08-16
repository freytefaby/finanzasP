<?php

use Illuminate\Database\Seeder;

class patrimonioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patrimonio')->insert([
            'id_user'=>1,
            'saldo_actual'=>0,
            
        ]);
    }
}
