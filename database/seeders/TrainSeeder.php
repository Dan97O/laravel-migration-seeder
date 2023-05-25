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
        for ($i = 0; $i < 20; $i++) {
            $train = new Train();
            $train->company = $faker->randomElement(['Italo', 'Freccia Rossa', 'Freccia Argento', 'Freccia Bianca', 'Regionale', 'InterCity']);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->numberBetween(0, 100);
            $train->number_carriages = $faker->numberBetween(5, 9);
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
            $train->save();
        }
    }
}
