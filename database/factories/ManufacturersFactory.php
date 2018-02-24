<?php

use Faker\Generator as Faker;

$factory->define(App\Manufacturers::class, function (Faker $faker){

    return [
      'name'=>$faker->text(7),
    ];

});
