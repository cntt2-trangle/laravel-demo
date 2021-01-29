<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')
            ->insert([
                [
                    'image'=> 'https://storage.googleapis.com/conext-production/22638066_22234032_36592570_84284980.png',
                    'title'=> 'Codeup | Learn to Code Workshop: Python (Intro to Data Science)',
                    'time' => '2021-01-30'
                ],
                [
                    'image'=> 'https://storage.googleapis.com/conext-production/22638066_22234032_36592570_84284980.png',
                    'title'=> 'Codeup | Learn to Code Workshop: Python (Intro to Data Science)',
                    'time' => '2021-01-30'
                ],
                [
                    'image'=> 'https://storage.googleapis.com/conext-production/detail/84245620_92129685_54855033_90444142.png',
                    'title'=> 'Cambridge Centre for AI in Medicines Inaugural Event',
                    'time' => '2021-01-22'
                ],
                [
                    'image'=> 'https://storage.googleapis.com/conext-production/22638066_22234032_36592570_84284980.png',
                    'title'=> 'Codeup | Learn to Code Workshop: Python (Intro to Data Science)',
                    'time' => '2021-01-23'
                ],
                [
                    'image'=> 'https://storage.googleapis.com/conext-production/22638066_22234032_36592570_84284980.png',
                    'title'=> 'Codeup | Learn to Code Workshop: Python (Intro to Data Science)',
                    'time' => '2021-01-30'
                ],
                [
                    'image'=> 'https://storage.googleapis.com/conext-production/22638066_22234032_36592570_84284980.png',
                    'title'=> 'Codeup | Learn to Code Workshop: Python (Intro to Data Science)',
                    'time' => '2021-01-30'
                ],
            ]);
    }
}
