<?php

use App\Models\phongban;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PhongBanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $phongban = new phongban();
            $phongban->tenphongban = "Hành chính nhân sự";
            $phongban->matruongphong = 9;
            $phongban->sdt = '01234566666';
            $phongban->diachi = 'Nghệ An';
            $phongban->save();

            $phongban1 = new phongban();
            $phongban1->tenphongban = "Kinh doanh";
            $phongban1->matruongphong = 12;
            $phongban1->sdt = '08976755644';
            $phongban1->diachi ='Nghệ An';
            $phongban1->save();

            $phongban2 = new phongban();
            $phongban2->tenphongban = "Đào tạo";
            $phongban2->matruongphong = 13;
            $phongban2->sdt = '09845465767';
            $phongban2->diachi ='Nghệ An';
            $phongban2->save();
    }
}
