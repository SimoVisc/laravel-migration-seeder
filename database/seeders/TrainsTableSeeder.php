<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Illuminate\Support\Carbon;
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
        for($i = 0; $i < 50; $i++ ) {
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
        $new_train->Time_of_arrival = Carbon::parse($new_train->Departure_time)->addHours(rand(0,8))->addMinutes(rand(0 , 59));
        $new_train->Train_code = $faker->bothify('?????#####');
        $new_train->Carriage_number = $faker->randomDigit();
        $new_train->On_schedule = $faker->boolean(80);
        $new_train->Cancelled = $faker->boolean(10);
        $new_train->Platform = $faker->randomDigit();
        $new_train->save();
    }
}

}