<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name'=>'super admin',
            'role'=>'superadmin',
            'email'=>'superadmin@gmail.com',
            'mobile' =>'091111111',
            'password'=>'1234'
        ]);
        User::create([
            'name'=>'Admin',
            'role'=>'admin',
            'email'=>'Admin@gmail.com',
            'mobile' =>'092222222',
            'password'=>'1234'
        ]);

        User::factory(20)->create();

    }
}
