<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $user = new User;
        $user->fullname = 'Juan Felipe Toro Chica';
        $user->email = 'felipe.toro@gmail.com';
        $user->phone = '3218447884';
        $user->photo = 'images/no-photo.png';
        $user->password = '88888888';
        $user->role_id = 1;
        $user->save();

        $user = new User;
        $user->fullname = 'toro';
        $user->email = 'toro@gmail.com';
        $user->phone = '3218447884';
        $user->photo = 'images/no-photo.png';
        $user->password = '88888888';
        $user->role_id = 1;
        $user->save();

        $user = new User;
        $user->fullname = 'Homero Simpson';
        $user->email = 'homero@gmail.com';
        $user->phone = '12345678';
        $user->photo = 'images/no-photo.png';
        $user->password = '12345678';
        $user->role_id = 2;
        $user->save();

        $user = new User;
        $user->fullname = 'Juan invitado';
        $user->email = 'juan@gmail.com';
        $user->phone = '12345678';
        $user->photo = 'images/no-photo.png';
        $user->password = '12345678';
        $user->role_id = 2;
        $user->save();

        $user = new User;
        $user->fullname = 'mafe';
        $user->email = 'mafe@gmail.com';
        $user->phone = '12345678';
        $user->photo = 'images/no-photo.png';
        $user->password = '12345678';
        $user->role_id = 2;
        $user->save();

        // for ($i=0; $i < 100; $i++) { 
        //     $user = new User;
        //     $user->fullname = "User $i";
        //     $user->email = "$i@gmail.com";
        //     $user->phone = "12345$i";
        //     $user->photo = 'images/no-photo.png';
        //     $user->password = '12345678';
        //     $user->role_id = 2;
        //     $user->save();
        // }
        User::factory(20)->create();

    }
}
