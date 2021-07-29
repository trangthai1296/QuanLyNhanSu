<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ChucvuSeeder::class);
        $this->call(DotPhongVanSeeder::class);
        $this->call(DotTuyenDungSeeder::class);
        $this->call(HopDongSeeder::class);
        $this->call(KhenThuongSeeder::class);
        $this->call(KyLuatSeeder::class);
        $this->call(NguoiThanSeeder::class);
        $this->call(NhanVienSeeder::class);
        $this->call(PhongBanSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
