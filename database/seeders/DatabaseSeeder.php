<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Facker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([CountryTableSeeder::class]);
        $this->call([BusinessTypeTableSeeder::class]);
        $this->call([CommunityTableSeeder::class]);
        $this->call([EventTableSeeder::class]);
        $this->call([ExpertiseTableSeeder::class]);
        $this->call([ExploreTableSeeder::class]);
        $this->call([LocationTableSeeder::class]);
        $this->call([VoucherTableSeeder::class]);
        $this->call([WorkplaceTableSeeder::class]);
    }
}
