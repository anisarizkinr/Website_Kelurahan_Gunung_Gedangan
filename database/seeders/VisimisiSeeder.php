<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisimisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visimisis')->insert([
            [
                'judul' => 'MOTTO',
                'isi_vm' => 'KELURAHAN KEDUNDUNG SELALU PRIMA DALAM PELAYANAN',
            ],
            [
                'judul' => 'PRIMA',
                'isi_vm' => "1. Profesional dalam melaksanakan tugas\n2. Ramah dalam melayani masyarakat\n3. Informatif dalam memberikan pelayanan\n4. Melayani dengan hati yang tulus\n5. Akuntable dalam menjalankan tugas ",
            ] 
        ]);
    }
}
