<?php

namespace Database\Seeders;

use App\Models\m_kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id'=> 1,
                'kategori_kode'=>'ATK',
                'kategori_nama'=> 'Alat Tulis Kantor',
            ],
            [
                'kategori_id'=> 2,
                'kategori_kode'=>'MKN',
                'kategori_nama'=> 'Makanan',
            ],
            [
                'kategori_id'=> 3,
                'kategori_kode'=>'MNM',
                'kategori_nama'=> 'Minuman',
            ],
            [
                'kategori_id'=> 4,
                'kategori_kode'=>'MTR',
                'kategori_nama'=> 'Materai',
            ],
            [
                'kategori_id'=> 5,
                'kategori_kode'=>'LYD',
                'kategori_nama'=> 'Lanyard',
            ],
        ];
        DB::table('m_kategoris')->insert($data);
    }
}
