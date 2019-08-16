<?php

use Illuminate\Database\Seeder;

class oauth_personal_access_clientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oauth_personal_access_clients')->insert([
            'client_id'=>1,
            'created_at'=>'2019-08-11 14:31:48',
            'updated_at'=>'2019-08-11 14:31:48'
        ]);
    }
}
