<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('users')->insert([
            'name'=>'faby',
            'email'=>'ffreytte@gmail.com',
            'password'=>bcrypt('123456'),
            'state'=>1
        ]);
    }
}
