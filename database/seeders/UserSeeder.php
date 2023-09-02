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
        $user -> fullname = 'Juan';
        $user -> email = 'Juan@gmail.com';
        $user -> phone = '3103707415';
        $user -> photo = 'images/no-photo.png';
        $user -> password = '123';
        $user -> role_id = 1;
        $user -> save();

        $user = new User;
        $user -> fullname = 'jesus';
        $user -> email = 'nazaret@gmail.com';
        $user -> phone = '31037075';
        $user -> photo = 'img/no-photo.png';
        $user -> password = '321';
        $user -> role_id = 2;
        $user -> save();

        // for ($i=0; $i < 100; $i++){
        //     $user = new User;
        //     $user -> fullname = "User $i";
        //     $user -> email = "$i@gmail.com";
        //     $user -> phone = "3103707415$i";
        //     $user -> photo = 'images/no-photo.png';
        //     $user -> password = "123$i";
        //     $user -> role_id = 2;
        //     $user -> save();
        // }

        user::factory(10) -> create();
    }
}
