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
        // \App\Models\User::factory(10)->create();
        // $faker = Facker::create();
        // foreach(range (1, 50) as $index) {
        //     DB::table('categories')->insert([
        //         "name" => $faker -> name
        //     ]);
        // }
        $this->call([
            PostTableSeeder::class
        ]);
    }
}
