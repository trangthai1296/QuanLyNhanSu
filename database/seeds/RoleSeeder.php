<?php

use Illuminate\Database\Seeder;
use App\Models\role;



class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new role();
        $role->id = 1;
        $role->name = 'admin';
        $role->save();

        $role1 = new role();
        $role1->id = 2;
        $role1->name = 'hành chính nhân sự';
        $role1->save();

        $role2 = new role();
        $role2->id = 3;
        $role2->name = 'nhân viên';
        $role2->save();
    }
}
