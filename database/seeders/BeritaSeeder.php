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
                [
                    'tanggal_berita' => '2022-07-07',
                    'judul_berita' => 'Kelurahan Kedundung Kota Mojokerto Masuk Nominasi Lomba Gotong Royong Provinsi Jawa Timur 2022',
                    'isi_berita' => 'Mojokerto (beritajatim.com) – Kota Mojokerto tengah bertransformasi menuju kota metropolis namun dengan masih menjaga nilai akar budaya nenek moyang. Salah satunya dengan ditetapkannya Kelurahan Kedundung dalam nominasi empat kelurahan terbaik pada pelaksanaan Lomba ',
                    'link' => 'https://beritajatim.com/peristiwa/kelurahan-kedundung-kota-mojokerto-masuk-nominasi-lomba-gotong-royong-provinsi-jawa-timur-2022/',
                ], 
                [
                    'tanggal_berita' => '2023-08-20',
                    'judul_berita' => 'LOMBA MEMANCING, CARA WARGA KEDUNDUNG INDAH SEMARAKKAN HUT KE-78 RI',
                    'isi_berita' => 'Kota Mojokerto-GEMA MEDIA: Minimnya sumber daya alam di Kota Mojokerto dimanfaatkan dengan baik oleh Warga Perumahan Kedundung Indah, Kelurahan Kedundung, Kecamatan Magersari, Kota Mojokerto yaitu dengan memanfaatkan sungai di wilayah ',
                    'link' => 'https://gemamedia.mojokertokota.go.id/berita/14862/2023/08/lomba-memancing-cara-warga-kedundung-indah-semarakkan-hut-ke-78-ri',
                ], 
                [
                    'tanggal_berita' => '2022-04-19',
                    'judul_berita' => 'Puskesmas Kedundung Mojokerto Gelar Giat Pasupati , Tekan Stunting TB',
                    'isi_berita' => 'Jakarta - UPT Puskesmas Kedundung, Kota Mojokerto menggelar Giat Pasupati (Peduli Anak Stunting dan Pertumbuhan Balita terintegrasi). Program ini sudah berjalan sejak tahun 2021 dan bertujuan untuk mencegah kasus stunting dan tuberkulosis (TBC) pada anak-anak.',
                    'link' => 'https://www.detik.com/jatim/berita/d-6039996/puskesmas-kedundung-mojokerto-gelar-giat-pasupati-tekan-stunting-tb',
                ]
            ]
        );
    }
}
