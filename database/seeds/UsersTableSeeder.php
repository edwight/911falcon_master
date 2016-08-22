<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\User', 50)->create();
        factory('App\Models\User', 1)->create([
        	'name' => 'edwight',
        	'slug' => 'edwight',
        	'email' => 'edwardelgado0@gmail.com',
        	'password' => bcrypt('19252368'),
        	'roles' => 'admin',
        	]);
        factory('App\Models\User', 1)->create([
            'name' => 'edwar supervisor',
            'slug' => 'edwar',
            'email' => 'edwardelgado1@gmail.com',
            'password' => bcrypt('19252368'),
            'roles' => 'supervisor',
            ]);
        factory('App\Models\User', 1)->create([
            'name' => 'edwar despachador',
            'slug' => 'edwar',
            'email' => 'edwardelgado2@gmail.com',
            'password' => bcrypt('19252368'),
            'roles' => 'despachador',
            ]);
        factory('App\Models\User', 1)->create([
            'name' => 'edwar operador',
            'slug' => 'edwar',
            'email' => 'edwardelgado3@gmail.com',
            'password' => bcrypt('19252368'),
            'roles' => 'operador',
            ]);
    }
}
