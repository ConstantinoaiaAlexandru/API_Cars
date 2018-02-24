<?php

use Illuminate\Database\Seeder;
//use Eloquent;

class CarsTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    //Eloquent::unguard();

    //disable foreign key check for this connection before running seeders
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    factory(App\Cars::class,30)->create();

    // supposed to only apply to a single connection and reset it's self
    // but I like to explicitly undo what I've done for clarity
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');
  }
}
