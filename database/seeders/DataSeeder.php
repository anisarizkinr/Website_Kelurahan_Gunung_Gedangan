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
                'id_kategori'=>'1',
                'judul'=>'Jumlah Kependudukan 2022',
                'isi_data'=>'laki-laki: 1000 perempuan: 2000',
                'keterangan'=>'-' ,        
            ]
        ]
        );
    }
}
