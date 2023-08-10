<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beritas')->insert(
            [

                [
                    'tanggal_berita' => '2022-11-10',
                    'judul_berita' => 'Kelurahan Kedundung, Kolaborasi Benik Sekeping dan KWT Turunkan Stunting',
                    'isi_berita' => 'KELURAHAN Kedundung, Kecamatan Magersari turut berkontribusi aktif dalam mewujudkan Kota Mojokerto menuju zero stunting. Berkat kolaborasi antara program Benik Sekeping dan Kelompok Wanita Tani (KWT) Kelurahan Kedundung yang berhasil sukseskan percepatan penurunan',
                    'link' => 'https://radarmojokerto.jawapos.com/mojokerto/821019911/kelurahan-kedundung-kolaborasi-benik-sekeping-dan-kwt-turunkan-stunting',
                ], 
            ]
        );
    }
}
