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
                'judul' => 'KELURAHAN KEDUNDUNG SELALU PRIMA DALAM PELAYANAN',
                'isi_vm' => ' 1. Profesional dalam melaksanakan tugas
                2. Ramah dalam melayani masyarakat
                3. Informatif dalam memberikan pelayanan
                4. Melayani dengan hati yang tulus
                5. Akuntable dalam menjalankan tugas ',
            ] 
        ]);
    }
}
