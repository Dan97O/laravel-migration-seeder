<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $train = new Train;
        for ($i = 0; $i < 20; $i++) {
            $train->company = $faker->randomElements(['Italo', 'Freccia Rossa', 'Freccia Argento', 'Freccia Bianca', 'Regionale', 'InterCity']);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->randomNumber(5, true);
            $train->number_carriages = $faker->randomNumber(2, false);
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
            $train->save();
        }
    }
}
