<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run () {
        Model::unguard();
        $this->call([
            UsersTableSeeder::class,
            PracticesTableSeeder::class,
            ManufacturersTableSeeder::class,
            BrandsTableSeeder::class,
        ]);
        Model::reguard();
    }
}
