<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Destination;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {
        for($i=0; $i<100; $i++){
            $destination = new Destination();
            $destination -> From = $faker->city();
            $destination -> Country = $faker->country();
            $destination -> Accomodation_price = $faker ->randomFloat(2,1,8);
            $destination -> Price_Flight = $faker ->randomFloat(2,1,8);
            $destination -> Departure_date = $faker ->dateTimeThisMonth();
            $destination -> Return_date = $faker ->dateTimeThisMonth('+10days');
            $destination -> save();
        }
    }
}
