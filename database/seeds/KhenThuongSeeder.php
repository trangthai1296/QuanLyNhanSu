<?php

use App\Models\khenthuong;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class KhenThuongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i < 20; $i++) {
            $khenthuong = new khenthuong();
            $khenthuong->manhanvien = $faker->numberBetween(1, 20);
            $khenthuong->lydo = $faker->title();
            $khenthuong->hinhthuc = $faker->title();
            $khenthuong->ngaykhenthuong = $faker->dateTimeBetween('now', '+3 weeks');
            $khenthuong->save();
        }
    }
}
