<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KontakKamiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kontakkami')->insert([
            [
                'alamat' => 'Jl. Empunala No. 406 Margelo, Kedundung',
                'telepon' => 'Telp : (0321) 326481',
                'email' => 'kelurahankedundung45@gmail.com',
            ] 
        ]);
    }
}
