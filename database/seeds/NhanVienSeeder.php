<?php

use Illuminate\Database\Seeder;
use App\Models\nhanvien;
use Faker\Factory as Faker;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $nhanvien = new nhanvien();
            $nhanvien->hoten = 'trang';
            $nhanvien->ngaysinh = '1996-12-12';
            $nhanvien->diachi = 'Nghệ An';
            $nhanvien->sdt = '0547576576';
            $nhanvien->cmnd ='234567765';
            $nhanvien->gioitinh ='nữ';
            $nhanvien->tinhtrang ='chính thức';
            $nhanvien->hesoluong = 1.5;
            $nhanvien->maphongban = 1;
            $nhanvien->machucvu =1;
            $nhanvien->madotphongvan =1;
            $nhanvien->save();

            $nhanvien1 = new nhanvien();
            $nhanvien1->hoten = 'trinh';
            $nhanvien1->ngaysinh = '1996-12-13';
            $nhanvien1->diachi = 'Nghệ An';
            $nhanvien1->sdt = '0547765555';
            $nhanvien1->cmnd ='3456765445';
            $nhanvien1->gioitinh ='nữ';
            $nhanvien1->tinhtrang ='chính thức';
            $nhanvien1->hesoluong = 1.5;
            $nhanvien1->maphongban = 2;
            $nhanvien1->machucvu =2;
            $nhanvien1->madotphongvan =1;
            $nhanvien1->save();

            $nhanvien2 = new nhanvien();
            $nhanvien2->hoten = 'huong';
            $nhanvien2->ngaysinh = '1996-12-12';
            $nhanvien2->diachi = 'Nghệ An';
            $nhanvien2->sdt = '0587576576';
            $nhanvien2->cmnd ='2345677654';
            $nhanvien2->gioitinh ='nữ';
            $nhanvien2->tinhtrang ='thử việc';
            $nhanvien2->hesoluong = 0.8;
            $nhanvien2->maphongban = 3;
            $nhanvien2->machucvu =3;
            $nhanvien2->madotphongvan =2;
            $nhanvien2->save();

            $nhanvien3 = new nhanvien();
            $nhanvien3->hoten = 'Giang';
            $nhanvien3->ngaysinh = '1996-10-12';
            $nhanvien3->diachi = 'Hà Tĩnh';
            $nhanvien3->sdt = '0597576576';
            $nhanvien3->cmnd ='234517765';
            $nhanvien3->gioitinh ='nữ';
            $nhanvien3->tinhtrang ='chính thức';
            $nhanvien3->hesoluong = 1.5;
            $nhanvien3->maphongban = 3;
            $nhanvien3->machucvu =1;
            $nhanvien3->madotphongvan =2;
            $nhanvien3->save();

            $nhanvien4 = new nhanvien();
            $nhanvien4->hoten = 'An';
            $nhanvien4->ngaysinh = '1996-05-12';
            $nhanvien4->diachi = 'Hà Tĩnh';
            $nhanvien4->sdt = '0543576576';
            $nhanvien4->cmnd ='234567705';
            $nhanvien4->gioitinh ='nữ';
            $nhanvien4->tinhtrang ='chính thức';
            $nhanvien4->hesoluong = 1.5;
            $nhanvien4->maphongban = 2;
            $nhanvien4->machucvu =1;
            $nhanvien4->madotphongvan =1;
            $nhanvien4->save();
    }
}
