<?php

use App\Models\dotphongvan;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DotPhongVanSeeder extends Seeder
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
            $dotphongvan = new dotphongvan();
            $dotphongvan->madottuyendung = $faker->numberBetween(1, 3);
            $dotphongvan->ten = $faker->randomElement(['Đợt 1', 'Đợt 2', 'Đợt 3']);
            $dotphongvan->soluong = $faker->numberBetween(1, 5);
            $dotphongvan->diadiem = $faker->randomElement(['A0', 'A1', 'A2', 'A3']);
            $dotphongvan->ngaybatdau = $faker->dateTimeBetween('now', '+3 weeks');
            $dotphongvan->ngayketthuc = $faker->dateTimeBetween($dotphongvan->ngaybatdau, '+3 weeks');
            $dotphongvan->save();
        }
    }
}
