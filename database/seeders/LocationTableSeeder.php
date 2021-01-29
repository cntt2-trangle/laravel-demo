<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')
        ->insert([
            [
                'address' => '31 Tran Phu Street, Hai Chau, Da Nang',
                'longitude'=> '12.000490',
                'latitude'=> '10.903849'
            ],
            [
                'address'=> '63 Phan Dang Luu, Cuong Cuong Bac, Hai Chau, Da Nang.',
                'longitude'=> '12.000490',
                'latitude'=> '10.903849'
            ],
            [
                'address'=> '3rd Floor, 84 Chau Thi Vinh Te, My An, Ngu Hanh Son District, Da Nang City.',
                'longitude'=> '12.000490',
                'latitude'=> '10.903849'
            ],
            [
                'address'=> '15 Ta My Duat Street, Son Tra District, Danang City, Vietnam',
                'longitude'=> '12.000490',
                'latitude'=> '10.903849'
            ],
            [
                'address'=> '14 An Thuong 18 Street, Ngu Hanh Son District, Da Nang.',
                'longitude'=> '12.000490',
                'latitude'=> '10.903849'
            ],
            [
                'address'=> '29 Yen Bai, Hai Chau 1 Ward, Hai Chau District, Da Nang.',
                'longitude'=> '12.000490',
                'latitude'=> '10.903849'
            ],
        ]);
    }
}
