<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->id = 1;
        $user->email = 'anh@gmail.com';
        $user->name =  'anh';
        $user->password = 12345678;
        $user->address = 'Ha Noi';
        $user->img  = '';
        $user->role = \App\Http\Controllers\Auth\RoleInterFace::ADM;
        $user->save();

    }
}
