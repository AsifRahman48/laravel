<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for($i=1;$i<=20;$i++)
        {
            $customer = new Todo;
            $customer->name = $faker->name;
            $customer->address = $faker->address;
            $customer->save();
        }
    }
}
