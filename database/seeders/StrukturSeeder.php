<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StrukturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('strukturs')->insert(
            [
                [
                    'nama_pengurus' => 'MOKHAMMAD NURIHUDAH, SH',
                    'jabatan' => 'Lurah Kedundung',
                ],
                [
                    'nama_pengurus' => 'ENI WULANDARI, SH',
                    'jabatan' => 'Sekretaris',
                ],
                [
                    'nama_pengurus' => 'NURALIH, SE',
                    'jabatan' => 'Kepala Seksi Tata Pemerintahan, Ketentraman dan Ketertiban Umum',
                ],
                [
                    'nama_pengurus' => 'MOCHAMMAD AGUS WIDODO, S.Sos',
                    'jabatan' => 'Kepala Seksi Sosial dan Pemberdayaan Masyarakat',
                ],
                [
                    'nama_pengurus' => 'ENDARWATI SULISTYORINI, SH',
                    'jabatan' => 'Lurah KedundungKepala Seksi Perekonomian, Fisik dan Prasarana Wilayah',
                ],
                [
                    'nama_pengurus' => 'ENI NURHAYATI',
                    'jabatan' => 'Pelaksana',
                ],
                [
                    'nama_pengurus' => 'ASIYAH, SE',
                    'jabatan' => 'Pelaksana',
                ],
            ]
        );
    }
}
