<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('layanan')->insert([
            [
                
                'judul' => 'Persyaratan Surat Pernyataan Ahli Waris',
                'isi_layanan' => "1. Pengantar RT,RW\n2. Pelunasan PBB sesuai tahun berjalan\n3. Sidang dihadiri Pak Camat, Pak Lurah, dan semua ahli waris\n4. Foto Copy KK dan KTP yang meninggal = 3 lembar\n5. Foto Copy KK, KTP, KTP Ahli Waris = 3 lembar\n6. Foto Copy KK, KTP 2(dua) orang saksi = 3 lembar\n7. Materai Rp.10.000,- = minimal 2 lembar (menyesuaikan dengan julah keperluan yang diurus)\n8. Foto Copy Sertifikat, Kartu BPJS (Digunakan untuk persyaratan sesuai dengan kebutuhan)",
            ],
            [
                'judul' => 'Persyaratan Nikah Masuk Laki-laki & Perempuan',
                'isi_layanan' => "1. Pengantar RT,RW\n2. Pelunasan PBB sesuai tahun berjalan\n3. Blangko Ni dan N4 dari Kelurahan/Desa Asal\n4. Rekomendasi KUA Asal (Apabila dari luar wilayah KUA Setempat)\n5. Surat Keterangan Numpang Nikah dari Kelurahan/Desa Asal\n6. Surat Keterangan Belum Nikah (Apabila masih status Belum Kawin) dari Kelurahan/Desa Asal\n7. Foto Copy KK Sendiri, KK Calon Istri dan KK Orang Tua\n8. Foto Copy KTP Sendiri dan KTP Calon Istri/Suami\n9. Foto Copy Akte Kelahiran Sendiri dan Akte Kelahiran Calon Istri/Suami\n10. Foto Copy Ijasah setingkat SMA + Ijasah Terakhir Sendiri dan Foto Copy Ijasah setingkat SMA + Ijasah Terakhir Calon Istri/Suami\n11. Foto Copy Surat Cerai sendiri apabila Cerai Hidup dan Foto Copy Surat Cerai Calon Istri/Suami apabila Cerai Hidup\n12. Blangko N6 dari Kelurahan/Desa Asal (Apabila Cerai Mati)\n13. Ijin Komandan (Laki-Laki)(Apabila TNI atau Polri)\n14. Pas Foto 2x3 sendiri dan Calon Istri/Suami: 1 lembar\n15. Pas Foto 3x4 sendiri: 1 lembar",
            ],
            [
                'nama_kategori' => 'Persyaratan Surat Keterangan Usaha',
                'isi_layanan'=> "1. Pengantar RT,RW\n2. Pelunasan PBB sesuai tahun berjalan\n3. Foto Copy KK\n4. Foto Copy KTP\n5. Surat Pernyataan Usaha Bermaterai Rp.10.000,-(Blangko disediakan Kelurahan)",
            ],
            [
                'nama_kategori' => 'Persyaratan SKCK',
                'isi_layanan'=>"1. Pengantar RT,RW\n2. Pelunasan PBB sesuai tahun berjalan\n3. Foto Copy KK\n4. Foto Copy KTP\n5. Pas Foto 3x4 = 2 lembar",
            ],
            [
                'nama_kategori' => 'Persyaratan Surat Keterangan Tidak Mampu',
                'isi_layanan'=>"1. Pengantar RT,RW\n2. Pelunasan PBB sesuai tahun berjalan\n2. Foto Copy KK\n3. Foto Copy KTP",
            ],
            [
                'nama_kategori' => 'Persyaratan Surat Keterangan Beda Identitas',
                'isi_layanan'=>"1. Pengantar RT,RW\n2. Pelunasan PBB sesuai tahun berjalan\n3. Foto Copy KK\n4. Foto Copy KTP\n5. Foto Copy Dokumen Pendukung lainnya",
            ],
            [
                'nama_kategori' => 'Persyaratan Surat Keterangan Domisili',
                'isi_layanan'=>"1. Pengantar RT,RW\n2. Pelunasan PBB sesuai tahun berjalan\n3. Foto Copy KK\n4. Foto Copy KTP",
            ]
        ]
        );
    }
}
