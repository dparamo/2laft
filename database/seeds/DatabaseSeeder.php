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
        // $this->call(UsersTableSeeder::class);
        $this->call(Tipo_ArchivosSeeder::class);
        $this->call(Departamento::class);
        $this->call(Tipo_servicioSeeder::class);
        $this->call(Ciudad::class);
        
    }
}
