<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        //$this->call(ContactoTableSeeder::class);
        //$this->call(OrganismosTableSeeder::class);
        $this->call(MotivosTableSeeder::class);
        //$this->call(EstadoTableSeeder::class);
        //$this->call(MunicipiosTableSeeder::class);
        //$this->call(ParroquiasTableSeeder::class);
        //$this->call(CuadrantesTableSeeder::class);
        //$this->call(LocalidadesTableSeeder::class);
    }
}
