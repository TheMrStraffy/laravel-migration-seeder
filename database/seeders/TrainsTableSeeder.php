<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Train;
use Illuminate\Database\Seeder;
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
        for($i = 0; $i < 30; $i++){
            $new_train = new Train();
            $new_train->company = $faker->word();
            $new_train->departure_station =  $faker->city();
            $new_train->arrival_station =  $faker->city();
            $new_train->departure_time =  $faker->time('H.i');
            $new_train->arrival_time =  $faker->time('H.i');
            $new_train->train_code = $faker->bothify('??####');
            $new_train->coaches_number = $faker->numberBetween(1, 24);
            $new_train->is_in_time = $faker->numberBetween(0,1);
            $new_train->is_cancelled = $faker->numberBetween(0,1);
            $new_train->save();
        }
    }
}
