<?php

use App\Models\hopdong;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class HopDongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i < 5; $i++) {
            $hopdong = new hopdong();
            $hopdong->manhanvien = $faker->numberBetween(1, 5);
            $hopdong->luongcoban = $faker->numberBetween(30000, 50000);
            $hopdong->luongtangca = $faker->numberBetween(30000, 50000);
            $hopdong->phucap = $faker->numberBetween(500000, 900000);
            $hopdong->bhxh = $faker->numberBetween(400000, 700000);
            $hopdong->ngaybatdau = $faker->dateTimeBetween('now -2 weeks', 'now');
            $hopdong->ngayketthuc = $faker->dateTimeBetween($hopdong->ngaybatdau, '+2 years');
            $hopdong->save();
        }
    }
}
