<?php

use Illuminate\Database\Seeder;
use App\Models\kyluat;
use Faker\Factory as Faker;

class KyLuatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i < 10; $i++) {
            $kyLuat = new kyLuat();
            $kyLuat->manhanvien = $faker->numberBetween(1, 5);
            $kyLuat->lydo = $faker->title();
            $kyLuat->hinhthuc = $faker->title();
            $kyLuat->ngaykyluat = $faker->dateTimeBetween('now', '+3 weeks');
            $kyLuat->save();
        }
    }
}
