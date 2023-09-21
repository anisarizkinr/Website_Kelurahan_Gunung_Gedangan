<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SosmedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sosmeds')->insert(
            [

                [
                    'icon' => 'instagram',
                    'link' => 'https://www.instagram.com/kelurahan.kdd'
                ]
             
            ]
                );
    }
}
