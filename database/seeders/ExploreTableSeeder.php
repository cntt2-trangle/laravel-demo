<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExploreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('explores')
            ->insert([
                [
                    'name' => 'Startup',
                    'image'=> 'https://storage.googleapis.com/conext-production/bg_event.png'
                ],
                [
                    'name'=> 'Investment',
                    'image'=> 'https://storage.googleapis.com/conext-production/bg_event.png'
                ],
                [
                    'name'=> 'Hot Needs',
                    'image'=> 'https://storage.googleapis.com/conext-production/bg_event.png'
                ],
                [
                    'name'=> 'Get Vouchers',
                    'image'=> 'https://storage.googleapis.com/conext-production/bg_event.png'
                ],
                [
                    'name'=> 'Events',
                    'image'=> 'https://storage.googleapis.com/conext-production/bg_event.png'
                ],
                [
                    'name'=> 'Workplaces',
                    'image'=> 'https://storage.googleapis.com/conext-production/bg_event.png'
                ],
            ]);
    }
}
