<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommunityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('communities')
            ->insert([
                ['name'=> 'Da Nang'],
                ['name'=> 'Ha Noi'],
                ['name'=> 'Ho Chi Minh'],
            ]);
    }
}
