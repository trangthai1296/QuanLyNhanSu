<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\dottuyendung;

class DotTuyenDungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i < 4; $i++) {
            $dottuyendung = new dottuyendung();
            $dottuyendung->ten =$faker->randomElement(['Đợt 1','Đợt 2','Đợt 3']);
            $dottuyendung->maphongban = $faker->numberBetween(1,3);
            $dottuyendung->machucvu = $faker->numberBetween(1,4);
            $dottuyendung->soluong =  $faker->numberBetween(1,10);
            $dottuyendung->ngaybatdau = $faker->dateTimeBetween('now', '+3 weeks');
            $dottuyendung->ngayketthuc =  $faker->dateTimeBetween($dottuyendung->ngaybatdau, '+3 weeks');
            $dottuyendung->save();
        }
    }
}
