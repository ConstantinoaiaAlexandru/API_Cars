<?php

use Faker\Generator as Faker;

$factory->define(App\Cars::class, function (Faker $faker){

    return [
      'name'=>$faker->text(10),
      // 'manufacturer_id'=>$faker->text(5),
      'year_of_production'=>$faker->text(5),
      'number_of_dors'=>$faker->text(5),
      'color'=>$faker->text(5),
    ];

});
