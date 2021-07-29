<?php

use Illuminate\Database\Seeder;
use App\Models\nguoithan;
use Faker\Factory as Faker;

class NguoiThanSeeder extends Seeder
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
            $nguoithan = new nguoithan();
            $nguoithan->manhanvien = $faker->numberBetween(1, 5);
            $nguoithan->tenthannhan = $faker->name();
            $nguoithan->quanhe = $faker->name();
            $nguoithan->diachi = $faker->address();
            $nguoithan->sdt = $faker->phoneNumber();
            $nguoithan->gioitinh = $faker->randomElement(['nam', 'nữ']);
            $nguoithan->nghenghiep = $faker->jobTitle();
            $nguoithan->save();
        }
    }
}
