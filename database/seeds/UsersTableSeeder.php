<?php

use App\Entity\User\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        factory(User::class, 10)->create();

        User::create([
            'name' => 'gamempvs',
            'last_name' => 'gamempvs',
            'email' => 'gamempvs@gmail.com',
            'password' => bcrypt('gamempvs@gmail.com'),
            'role' => 'admin',
            'status' => 'active',
            'phone_verified' => true,
        ]);

        User::create([
            'name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('adminadmin'),
            'role' => 'admin',
            'status' => 'active',
            'phone_verified' => true,
        ]);

        User::create([
            'name' => 'user',
            'last_name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('useruser'),
            'role' => 'user',
            'status' => 'active',
            'phone_verified' => true,
        ]);

    }
}
