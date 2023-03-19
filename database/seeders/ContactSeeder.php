<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'nama'=>'Masjid Agung Surabaya',
            'email'=>'aua@gmail.com',
            'no_telepon'=>'082133796474',
            'pesan'=>'masjid agung terbesar di Surabaya',
        ]);
    }
}
