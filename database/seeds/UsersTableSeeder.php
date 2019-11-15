<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
      */
    public function run()
    {
        App\User::create([
            'name' => 'admin',
            'password' => bcrypt('admin'),
            'email' => 'admin@gmail.com',
            'admin' => 1,
            'avatar' => 'avatars/avatar.png'
        ]);

        App\User::create([
            'name' => 'mahid2',
            'password' => bcrypt('password'),
            'email' => 'mahid2@gmail.com',
            'avatar' => 'avatars/avatar.png'
        ]);
    }
}
