<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder {
    public function run () {
        User::create([
            'name' => 'Jake Taylor',
            'username' => 'admin',
            'password' => bcrypt('password'),
        ]);
    }
}
