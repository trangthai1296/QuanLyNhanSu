<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      
            $user = new User();
            $user->name ='admin';
            $user->email = 'admin@gmail.com';
            $user->password =  Hash::make('123456');
            $user->role_id = 1;
            $user->save();

            $user5 = new User();
            $user5->name ='Trang';
            $user5->email = 'trang@gmail.com';
            $user5->password =  Hash::make('123456');
            $user5->role_id = 2;
            $user5->save();

            $user1 = new User();
            $user1->name ='Trinh';
            $user1->email = 'trinh@gmail.com';
            $user1->password =  Hash::make('123456');
            $user1->role_id = 2;
            $user1->save();

            $user2 = new User();
            $user2->name ='Huong';
            $user2->email = 'huong@gmail.com';
            $user2->password =  Hash::make('123456');
            $user2->role_id = 3;
            $user2->save();

            $user3 = new User();
            $user3->name ='Giang';
            $user3->email = 'giang@gmail.com';
            $user3->password =  Hash::make('123456');
            $user3->role_id = 3;
            $user3->save();

            $user4 = new User();
            $user4->name ='An';
            $user4->email = 'an@gmail.com';
            $user4->password =  Hash::make('123456');
            $user4->role_id = 3;
            $user4->save(); 
    }
}
