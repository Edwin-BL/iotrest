<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Actuator; //eloquent orm model
use Faker\Factory as Faker;

class ActuatorsTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<10; $i++){
            Actuator::create([
                'name' => $faker->unique()->userName,
                'type' => $faker->randomElement(['Rele', 'Motor', 'Valvula']),
                'value' => $faker->randomFloat(2, 0, 100),
                'date' => $faker->dateTimeThisYear(),
                'user_id' => rand(1, 10)
            ]);
        }    
    }
}
