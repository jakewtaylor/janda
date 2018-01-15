<?php

use Illuminate\Database\Seeder;

use App\Practice;

class PracticesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run () {
        $practices = [
            [
                'name' => 'Saxmundham',
                'phone' => '01728 602 830',
                'line1' => '16 High Street',
                'city' => 'Saxmundham',
                'county' => 'Suffolk',
                'postcode' => 'IP17 1DD',
            ],
            [
                'name' => 'Halesworth',
                'phone' => '01986 872 116',
                'line1' => '4/5 Rectory Street',
                'city' => 'Halesworth',
                'county' => 'Suffolk',
                'postcode' => 'IP19 8AF',
            ],
            [
                'name' => 'Ipswich',
                'phone' => '01473 210 672',
                'line1' => '28 Anglesea Road',
                'city' => 'Ipswich',
                'county' => 'Suffolk',
                'postcode' => 'IP1 3PP',
            ],
            [
                'name' => 'Harleston',
                'phone' => '01379 853 494',
                'line1' => '10 Old Market Place',
                'city' => 'Harleston',
                'county' => 'Norfolk',
                'postcode' => 'IP20 9BE',
            ],
        ];

        foreach ($practices as $practice) {
            Practice::create($practice);
        }
    }
}
