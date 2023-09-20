<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MapsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maps')->insert(
            [
                [
                    'link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15824.03755714312!2d112.44941831093658!3d-7.464211637455119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780dbf5aaac4b9:0x69b511b918f37238!2sKedundung,%20Magersari,%20Mojokerto%20City,%20East%20Java!5e0!3m2!1sen!2sid!4v1524357305622',
                ]
            ]
        );
    }
}
