<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->truncateTables([
            'users',
            'oauth_clients',
            'oauth_personal_access_clients',
            'tipo_movimiento',
            'patrimonio',
            'movimientos'
        ]);
        // $this->call(UsersTableSeeder::class);
        $this->call(usuariosSeeder::class);
        $this->call(oauth_clientsSeeder::class);
        $this->call(oauth_personal_access_clientsSeeder::class);
        $this->call(tipo_movimientoSeeder::class);
        $this->call(patrimonioSeeder::class);
        $this->call(movimientosSeeder::class);
    }

    protected function truncateTables(array $tables)
        {
            DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
            foreach ($tables as $table) {
                DB::table($table)->truncate();
            }
            
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        }
}
