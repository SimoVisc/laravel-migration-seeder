<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $new_train = new Train();
        $new_train->Company = $faker->company();
        $new_train->Departure_station = $faker->city();
        $new_train->Arrival_station = $faker->city();
        
        // CONTROLLO: se la stazione di patenza è uguale alla stazione di arrivo allora mi generi di nuovo una città faker
        while($new_train->Departure_station === $new_train->Arrival_station){
            $new_train->Arrival_station = $faker->city();
        }
        // 

        $new_train->Departure_time = $faker->dateTimeBetween('-1 day', '+2 days');
        $new_train->Time_of_arrival = $faker->dateTimeBetween($new_train->Departure_time , '+1 day');
        $new_train->Train_code = $faker->bothify('?????#####');
        $new_train->Carriage_number = $faker->rand(1,10);
        $new_train->On_schedule = $faker->boolean(80);
        $new_train->Cancelled = $faker->boolean(10);
        $new_train->Platform = rand(1, 20);
        $new_train->save();
    }
}
