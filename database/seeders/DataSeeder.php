<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data')->insert([
            [
                'id' => '1',
                'id_kategori' => '4',
                'judul' => 'Jumlah Sekolah Tahun 2021',
                'isi_data' => "1. Sekolah Dasar (SD) : 4\n2. Madrasah Ibtidaiyah (MI) : 2\n3. Sekolah Menengah Pertama (SMP) : 1\n4. Madrasah Tsanawiyah (MTs) : 1\n5. Sekolah Menengah Atas (SMA) : 0\n5. Sekolah Menengah Kejuruan (SMK) : 0\n6. Madrasah Aliyah (MA) : 0",
                'keterangan' => '-',
            ],
            [  
                'id' => '2',
                'id_kategori'=>'1',
                'judul'=>'Jumlah Penduduk Lulus Sekolah Tahun 2021',
                'isi_data'=>"1. Murid Lulus SD : 236\n2. Murid Lulus MI : 43\n3. Murid Lulus SLTP : 12\n4. Murid Lulus MTs : 22\n5. Murid Lulus SMK : 0\n6. Murid Lulus SMA : 0\n7. Murid Lulus MA: 0  ",
                'keterangan'=>'-' ,        
            ],
            [
                'id' => '3',
                'id_kategori' => '4',
                'judul' => 'Jumlah Fasilitas Kesehatan Tahun 2021',
                'isi_data' => "1. Rumah Sakit : 0\n2. Rumah Bersalin : 0\n3. Puskesmas : 1\n4. Posyandu: 16\n5. Puskesmas Pembantu : 0\n5. Puskesmas Keliling : 1\n6. Poliklinik/Balai Pengobatan : 1\n7. Tempat Praktik Dokter: 1\n8. Tempat Praktik Bidan : 3\n9. Poskesdes : 1\n10. Polindes : 0\n11. Apotek : 2\n12. Toko Khusus Obat/Jamu : 4",
                'keterangan' => '-',
            ],
            [            
                'id' => '4',
                'id_kategori'=>'1',
                'judul'=>'Jumlah Tenaga Kesehatan di Puskesmas Tahun 2021',
                'isi_data'=>"1. Medis : 31\n2. Paramedis  : 162\n3. Administrasi  : 107  ",
                'keterangan'=>'-' ,        
            ],
            [            
                'id' => '5',
                'id_kategori'=>'5',
                'judul'=>'Luas Lahan Bukan Sawah Tahun 2021',
                'isi_data'=>"1. Pekarangan, Bangunan, Halaman : 115,70 Ha\n2. Tegal, Kebun, Ladang, Huma  : -\n3. Ladang Tidak Diusahakan  : -\n4. Lainnya : 15,94 Ha",
                'keterangan'=>'-' ,        
            ],
            [            
                'id' => '6',
                'id_kategori'=>'5',
                'judul'=>'Luas Lahan Sawah menurut Jenis Pengairan Tahun 2021',
                'isi_data'=>"1. Teknis : 127,00 Ha\n2. Setengah Teknis  : -\n3. Tadah Hujan : -\n4. Lainnya : -",
                'keterangan'=>'-' ,        
            ],
            [            
                'id' => '7',
                'id_kategori'=>'5',
                'judul'=>'Luas Panen, Rata-rata Produksi, dan Produksi Padi Sawah dan Ladang Tahun 2021',
                'isi_data'=>"1. Luas Panen bersih : 263,00 Ha\n2. Rata-rata Produksi  : 7,00 Ku/Ha\n3. Produksi : 1841,00 ton",
                'keterangan'=>'-' ,        
            ],
            [            
                'id' => '8',
                'id_kategori'=>'6',
                'judul'=>'Jumlah Industri Ekonomi Tahun 2020',
                'isi_data'=>"1. Ruko : 5\n2. Pasar Permanen/Non Permanen : 1\n3. Minimarket : 4\n4. Kedai/Warung Makanan Minuman : 170\n5. Toko/Warung Kelontong : 129",
                'keterangan'=>'-' ,        
            ],
            [            
                'id' => '9',
                'id_kategori'=>'7',
                'judul'=>'Jumlah Keluarga Pengguna Listrik Tahun 2020',
                'isi_data'=>"1. Pengguna Listrik PLN : 4.988\n2. Pengguna Listrik Non PLN : 0\n3. Bukan Pengguna Listrik : 0",
                'keterangan'=>'-' ,        
            ],
            [            
                'id' => '10',
                'id_kategori'=>'7',
                'judul'=>'Jenis Bahan Bakar untuk Memasak Tahun 2020',
                'isi_data'=>"LPG 3 Kg",
                'keterangan'=>'-' ,        
            ],
            [            
                'id' => '11',
                'id_kategori'=>'7',
                'judul'=>'Jenis Sumber Air untuk Minum Tahun 2020',
                'isi_data'=>"Air Isi Ulang",
                'keterangan'=>'-' ,        
            ],
            [            
                'id' => '12',
                'id_kategori'=>'4',
                'judul'=>'Banyaknya Sarana dan Prasarana Ekonomi Tahun 2020',
                'isi_data'=>"1. Kelompok Pertokoan : 5\n2. Pasar dengan Bangunan Permanen : 0\n3. Pasar dengan Bangunan Semi Permanen : 1\n4. Pasar Tanpa Bangunan : 0\n5. Minimarket : 4\n6. Restaurant/Rumah Makan : 0\n7. Warung/Kedai Makanan Minuman : 170\n8. Hotel : 1\n9. Penginapan : 4\n10. Toko/Warung Kelontong : 129",
                'keterangan'=>'-' ,        
            ],
            [            
                'id' => '13',
                'id_kategori'=>'7',
                'judul'=>'Banyaknya Bank Tahun 2020',
                'isi_data'=>"1. Bank Umum Pemerintah : 1\n2. Bank Umum Swasta : 0\n3. Bank Perkreditan Rakyat : 1",
                'keterangan'=>'-' ,        
            ],
            [            
                'id' => '14',
                'id_kategori'=>'7',
                'judul'=>'Banyaknya Koperasi Tahun 2020',
                'isi_data'=>"1. Koperasi Unit Desa : 0\n2. Koperasi Industri Kecil dan Kerajinan Rakyat : 0\n3. Koperasi Simpan Pinjam : 7\n4. Koperasi Lainnya : 4",
                'keterangan'=>'-' ,        
            ],
        ]
        );
    }
}
