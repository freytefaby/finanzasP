<?php

use Illuminate\Database\Seeder;

class oauth_clientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oauth_clients')->insert([
            'name'=>'Laravel Personal Access Client',
            'secret'=>'Fb0uoSytnvynUojK4g8hmy2jNpSANGGXCapxevRf',
            'redirect'=>'http://localhost',
            'personal_access_client'=>1,
            'password_client'=>0,
            'revoked'=>0,
            'created_at'=>'2019-08-11 14:31:48',
            'updated_at'=>'2019-08-11 14:31:48'

        ]);

        DB::table('oauth_clients')->insert([
            'name'=>'Laravel Password Grant Client',
            'secret'=>'5l5hYoJrZSBGV9xpyr5Oxvbu1WGfDohtgBNIDjQT',
            'redirect'=>'http://localhost',
            'personal_access_client'=>0,
            'password_client'=>1,
            'revoked'=>0,
            'created_at'=>'2019-08-11 14:31:48',
            'updated_at'=>'2019-08-11 14:31:48'

        ]);
    }
}
