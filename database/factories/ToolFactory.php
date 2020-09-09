<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tool;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Tool::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'link' => $faker->url,        
        'description' => $faker->text,    
        'tags' => $faker->boolean(50) ? 'api' : 'web'                                  
    ];
});