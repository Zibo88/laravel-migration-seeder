<?php

use Illuminate\Database\Seeder;
use App\Package;
use Faker\Generator as Faker;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       
        for($i = 1; $i <= 9; $i++ ){
            $single_package = new Package();
            $single_package -> reference = $faker->numberBetween(1, 1000);
            $single_package -> name = $faker->sentence(3);
            $single_package -> location = $faker->countryISOAlpha3();
            $single_package -> hotel = $faker->words(2, true);
            $single_package -> days = $faker->randomDigit(1,30);
            $single_package -> description = $faker->paragraph();
            $single_package -> price = $faker->randomFloat(2, 1, 10000);
            $single_package -> services = $faker->words(2, true);
            $single_package -> save();
        }
    }
};