<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinasis')->insert([
            'nama'=>'Masjid Agung Surabaya',
            'kategori'=>'religi',
            'alamat'=>'Surabaya',
            'deskripsi'=>'masjid agung terbesar di Surabaya',
        ]);
    }
}
