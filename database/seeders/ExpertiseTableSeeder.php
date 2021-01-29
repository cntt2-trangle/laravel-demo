<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpertiseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expertises')
            ->insert([
                ['name'=> 'Software Development'],
                ['name'=> 'Internet of Things'],
                ['name'=> 'NGO'],
                ['name'=> 'Legacy'],
                ['name'=> 'Marketing'],
                ['name'=> 'Investment'],
            ]);
    }
}
