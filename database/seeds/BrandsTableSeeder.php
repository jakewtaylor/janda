<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run () {
        factory(App\Brand::class, 15)->create()->each(function ($brand) {
            $stock = factory(App\Stock::class, 5)->make();
            $brand->stock()->saveMany($stock);
        });
    }
}
