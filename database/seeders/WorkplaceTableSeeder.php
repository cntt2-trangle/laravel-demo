<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkplaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workplaces')
            ->insert([
                [
                    'image'      => 'https://storage.googleapis.com/conext-production/64775483_39945853_39110715_46208967.png',
                    'name'       => 'DNC Danang Coworking Space',
                    'price'      => '75000',
                    'overview'   => 'Centrally located in the coastal city of Danang, DNC- Danang Coworking space aims to create a vibrant hub for innovation & creative industry. We’ll suit your best needs by providing an inspiring workspace with modern facilities along with a close-knit community of like-minded entrepreneurs. Together with DNES-Danang Business Incubator, we are proud to be nominated asthe 3rd most creative spaces in Vietnam by British Council in 2018.',
                    'location_id'=> '1',
                ],
                [
                    'image'      => 'https://storage.googleapis.com/conext-production/16396435_63068963_50684597_26582124.png',
                    'name'       => 'IOT Space',
                    'price'      => '80000',
                    'overview'   => 'IoT is a newly established coworking space, situated at 63 Phan Dang Luu Da Nang, surrounded by many colleges and universities. This is the first private co-working space designed for new start-ups in Da Nang based on the IoT(internet of things), which is the perfect match for the 4.0 industrial revolution. This place is ideal for both office workers and students. It promotes creativity and nurtures knowledge as well as being a place to expand their professional networks.',
                    'location_id'=> '7',
                ],
                [
                    'image'      => 'https://storage.googleapis.com/conext-production/71602096_36013824_15011473_55468966.png',
                    'name'       => 'Beans Workspace',
                    'price'      => '80000',
                    'overview'   => 'If you have ever known The Local Beans - a coffee shop that takes care of the local peoples coffee habits with quality Vietnamese coffee beans, Beans Workspace is the utility "Shared workspace" for customers who come to use the Coffee service of The Local Beans.',
                    'location_id'=> '8',
                ],
                [
                    'image'      => 'https://storage.googleapis.com/conext-production/27416586_12779950_26466304_11311539.png',
                    'name'       => 'Enouvo Space',
                    'price'      => '100000',
                    'overview'   => 'Being one of the coworking space pioneers in Da Nang, Enouvo Space aims to be a space where great ideas are cultivated and nurtured. We provide a desirable co-working environment with a fun and enjoyable co-connecting space for freelancers, digital nomads and entrepreneurs to work, collaborate and meet like-minded people.',
                    'location_id'=> '9',
                ],
            ]);
    }
}
