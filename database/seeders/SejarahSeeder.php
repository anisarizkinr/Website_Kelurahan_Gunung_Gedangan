<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SejarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sejarahs')->insert(
            [
                [
                    'isi_sejarah' => 'Menurut cerita yang dipercaya warga setempat, asal-usul nama kelurahan “Kedundung” tidak terlepas dari asal-usul nama “Kedungsari”. Dipercaya nama Kedundung berasal dari kata “kedung” yang juga menjadi cikal bakal kata Kedungsari. Kedung merupakan istilah Bahasa Jawa yang dalam Bahasa Indonesia berarti ‘lesung’, alat penumbuk padi menjadi beras.'
                ],
                [
                    'isi_sejarah' => 'Melalui kegiatan survei, diketahui bahwa di area pemakaman Kedungsari terdapat benda peninggalan (punden) berupa kedung sakti yang dipercaya merupakan pusaka berisi roh Dewi Pandansari (Dewi hujan). Menurut cerita, pada masa pemerintahan kolonial Belanda punden ini berusaha dipindahkan ke museum Trowulan, tetapi keesokan harinya kembali berada di letaknya semula. Pemilik punden berupa kedung beserta alu-nya ini diyakini adalah kakak beradik Ki Derpo dan Mbah Drukiyah.'
                ],
                [
                    'isi_sejarah' => 'Selanjutnya dikisahkan kedua kakak-beradik ini semasa hidupnya mengalami perseteruan, sehingga Mbah Drukiyah memutuskan minggat dari rumah meninggalkan kakaknya sambil membawa alu sakti menuju wilayah yang saat ini dikenal sebagai Desa Sebani. Menurut kepercayaan setempat, kini alu tersebut diwariskan ke keturunan Mbah Drukiyah yang berdomisili di Desa Sebani, Kecamatan Tarik. Hingga saat ini, masyarakat Kedungsari mengadakan ritual pemanggilan hujan pada musim kemarau panjang dengan mendatangkan sesepuh dari Sebani.'
                ],
                [
                    'isi_sejarah' => 'Berdasarkan wisuk masyarakat Jawa, ritual ini mengisyaratkan seorang adik yang kembali ke tempat kakaknya, dalam cerita ini adalah penggambaran Mbah Drukiyah menjenguk kakaknya, Ki Derpo. Di mana dalam budaya Jawa dikenal unggah-ungguh (tata karma), saudara muda hendaknya menghormati saudara yang lebih tua.'
                ],
                [
                    'isi_sejarah' => 'Selanjutnya wilayah sekitar tempat kedung sakti bersemayam diberi nama oleh sesepuh setempat sebagai Kedungsari. Dua buah jalan di sekitar area pemakaman diberi nama Jalan Ki Derpo dan Jalan Pandansari. Di Desa Sebani juga dikenal sebuah jalan bernama Jalan Mbah Drukiyah.'
                ]
            ]
        );
    }
}
