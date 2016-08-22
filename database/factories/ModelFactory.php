<?php
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function(Faker\Generator $faker) {
    $entrada = array();
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'slug' => $faker->slug,
        'phone' => $faker->phoneNumber,   
        'roles' => "operador",              
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Contacto::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->name,
        'apellido' => $faker->name,
        'cedula' => $faker->creditCardNumber,
        'status' => false,
        //'type' => '171',
        'fecha_at' =>$faker->dateTimeThisYear($max = 'now'),  // DateTime('2011-02-27 20:52:14')
        'telefono' => $faker->phoneNumber,  
        //'descripcion' =>$faker->text,
    ];
});
/*                                                                                                            
$factory->define(App\Models\User::class, 'admin', function(Faker\Generator $faker){
	 return [
        'name' => 'edwight',
        'email' => 'edwardelgado0@gmail.com',
        'phone' => $faker->phoneNumber,
        'choices' => 'admin',                   
        'password' => '19252368',
        'remember_token' => str_random(10),
    ];
});
*/