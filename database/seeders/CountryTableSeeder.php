<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')
            ->insert([
                ['name'=> 'American'],
                ['name'=> 'Brazil'],
                ['name'=> 'Korea'],
                ['name'=> 'Japan'],
                ['name'=> 'Australia'],
                ['name'=> 'Canada'],
            ]);
    }
}
