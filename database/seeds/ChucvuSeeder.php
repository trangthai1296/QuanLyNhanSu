<?php

use Illuminate\Database\Seeder;
use App\Models\chucvu;

class ChucvuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chucvu = new chucvu();
        $chucvu->id = 1;
        $chucvu->tenchucvu = 'trưởng phòng';
        $chucvu->save();

        $chucvu1 = new chucvu();
        $chucvu1->id = 2;
        $chucvu1->tenchucvu = 'phó phòng';
        $chucvu1->save();

        $chucvu2 = new chucvu();
        $chucvu2->id = 3;
        $chucvu2->tenchucvu = 'thư kí';
        $chucvu2->save();

        $chucvu3 = new chucvu();
        $chucvu3->id = 4;
        $chucvu3->tenchucvu = 'nhân viên';
        $chucvu3->save();
    }
}
