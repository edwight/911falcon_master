<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ContactoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Contacto', 50)->create();
    }
}
