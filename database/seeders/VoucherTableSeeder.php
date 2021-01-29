<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VoucherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vouchers')
            ->insert([
                [
                    'image'=> 'https://storage.googleapis.com/conext-production/19108943_99406985_35790756_17780126.png',
                    'title'=> '[BeansWorkspace] GET FREE 2-DAY PASS TICKETS for CoNextor',
                ],
                [
                    'image'=> 'https://storage.googleapis.com/conext-production/64997444_46246574_77800462_16390180.png',
                    'title'=> '[Hoian]15% discount when order food at Weavers Restaurant Hoi An',
                ],
                [
                    'image'=> 'https://storage.googleapis.com/conext-production/15670774_70835628_34663649_14782329.png',
                    'title'=> '20% off for every coffee orders at Nomad Space',
                ],
                [
                    'image'=> 'https://storage.googleapis.com/conext-production/33562622_75803936_48752140_46239508.png',
                    'title'=> '[ENOUVO SPACE] GET PROMO CODE 10% DISCOUNT FOR DAILY PASS',
                ],
                [
                    'image'=> 'https://storage.googleapis.com/conext-production/61151640_41063916_81769667_72704808.png',
                    'title'=> '[DNC] Get promo code 20% discount for daily pass',
                ],
                [
                    'image'=> 'https://storage.googleapis.com/conext-production/22638066_22234032_36592570_84284980.png',
                    'title'=> 'Codeup | Learn to Code Workshop: Python (Intro to Data Science)',
                ],
            ]);
    }
}
