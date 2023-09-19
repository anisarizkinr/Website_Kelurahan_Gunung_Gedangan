<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;



use Illuminate\Support\Facades\DB;
class GeografisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('geografis')->insert(
            [

                [
                    'jumlah_penduduk' => '16095',
                    'keterangan' => 'Jumlah Penduduk/Jiwa',
                ], 
                [
                    'jumlah_penduduk' => '8179',
                    'keterangan' => 'Jumlah Penduduk Laki-Laki/Jiwa',
                ],
                [
                    'jumlah_penduduk' => '7916',
                    'keterangan' => 'Jumlah Penduduk Perempuan/Jiwa',
                ],
                [
                    'jumlah_penduduk' => '5308',
                    'keterangan' => 'Jumlah Kepala Keluarga/Jiwa',
                ]
             
            ]
        );
    }
}
