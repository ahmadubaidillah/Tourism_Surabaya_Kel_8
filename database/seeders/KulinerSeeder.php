<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KulinerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kuliners')->insert([
            'nama'=>'Masjid Agung Surabaya',
            'kategori'=>'religi',
            'alamat'=>'Surabaya',
            'deskripsi'=>'masjid agung terbesar di Surabaya',
        ]);
    }
}
