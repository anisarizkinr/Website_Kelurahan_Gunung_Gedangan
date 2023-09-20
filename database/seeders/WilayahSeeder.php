<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wilayahs')->insert(
            [
                [
                    'batas_wilayah' => 'Sebelah Utara',
                    'deskripsi' => 'Batas wilayah Kelurahan Kedundung di sebelah utara secara administratif adalah Kelurahan Wates',
                    'link' => 'https://www.google.com/maps/place/Wates,+Kec.+Magersari,+Kota+Mojokerto,+Jawa+Timur/@-7.4551345,112.4499905,16z/data=!3m1!4b1!4m6!3m5!1s0x2e780de88aa6c749:0x9e15c7e712b55ec3!8m2!3d-7.4552685!4d112.4485176!16s%2Fg%2F1hc0gwq7k?entry=ttu',
                ],
                [
                    'batas_wilayah' => 'Sebelah Selatan',
                    'deskripsi' => 'Batas wilayah Kelurahan Kedundung di sebelah utara secara administratif adalah Kelurahan Gunung Gedangan',
                    'link' => 'https://www.google.com/maps/place/Gn.+Gedangan,+Kec.+Magersari,+Kota+Mojokerto,+Jawa+Timur/@-7.4744769,112.4455527,15z/data=!3m1!4b1!4m6!3m5!1s0x2e780da2b7a1c6a9:0x3822b686e2b7fff3!8m2!3d-7.4763683!4d112.4559679!16s%2Fg%2F12lngwxz3?entry=ttu',
                ],
                [
                    'batas_wilayah' => 'Sebelah Barat',
                    'deskripsi' => 'Batas wilayah Kelurahan Kedundung di sebelah utara secara administratif adalah Kelurahan Balongsari',
                    'link' => 'https://www.google.com/maps/place/Balongsari,+Kec.+Magersari,+Kota+Mojokerto,+Jawa+Timur/@-7.468442,112.4340332,15z/data=!3m1!4b1!4m6!3m5!1s0x2e780d923ef27103:0xbd7be00bb94c1fa7!8m2!3d-7.4668863!4d112.4440473!16s%2Fg%2F1hc0hs3b5?entry=ttu
                    ',
                ],
                [
                    'batas_wilayah' => 'Sebelah Timur',
                    'deskripsi' => 'Batas wilayah Kelurahan Kedundung di sebelah utara secara administratif adalah Desa Kepuhanyar Kabupaten Mojokerto',
                    'link' => 'https://www.google.com/maps/place/Kepuhanyar,+Kec.+Mojoanyar,+Kabupaten+Mojokerto,+Jawa+Timur/@-7.463938,112.46397,14.41z/data=!4m6!3m5!1s0x2e780db529ba111f:0xd9362c6ff11c01d9!8m2!3d-7.4649815!4d112.4798088!16s%2Fg%2F1226mpx5?entry=ttu',
                ],

            ]
        );
    }
}
