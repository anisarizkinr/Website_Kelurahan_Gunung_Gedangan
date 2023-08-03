<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            [
                
                'nama_kategori' => 'Kependudukan',
            ],
            [
                'nama_kategori' => 'RT RW',
            ],
            [
                'nama_kategori' => 'Lembaga Masyarakat',
            ],
            [
                'nama_kategori' => 'Sarana Prasarana',
            ]
        ]
        );
    }
}
