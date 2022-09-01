<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        //User
        $user = New User();
        $user->name = 'User';
        $user->email = 'user@mail.com';
        $user->password = bcrypt('12345678');
        $user->save();
       
        //Admin
        $user = New User();
        $user->name = 'Admin';
        $user->email = 'admin@mail.com';
        $user->password = bcrypt('12345678');
        $user->save();

    }
}
