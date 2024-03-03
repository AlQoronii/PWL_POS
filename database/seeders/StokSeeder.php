<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'stok_id'=>1,
                'user_id'=>1,
                'barang_id'=>1,
                'stok_tanggal'=>'2024-01-01',
                'stok_jumlah'=>150,
            ],
            [
                'stok_id'=>2,
                'user_id'=>1,
                'barang_id'=>2,
                'stok_tanggal'=>'2024-01-01',
                'stok_jumlah'=>100,
            ],
            [
                'stok_id'=>3,
                'user_id'=>2,
                'barang_id'=>3,
                'stok_tanggal'=>'2024-01-01',
                'stok_jumlah'=>110,
            ],
            [
                'stok_id'=>4,
                'user_id'=>2,
                'barang_id'=>4,
                'stok_tanggal'=>'2024-01-01',
                'stok_jumlah'=>50,
            ],
            [
                'stok_id'=>5,
                'user_id'=>2,
                'barang_id'=>5,
                'stok_tanggal'=>'2024-01-01',
                'stok_jumlah'=>72,
            ],
            [
                'stok_id'=>6,
                'user_id'=>3,
                'barang_id'=>6,
                'stok_tanggal'=>'2024-01-01',
                'stok_jumlah'=>240,
            ],
            [
                'stok_id'=>7,
                'user_id'=>3,
                'barang_id'=>7,
                'stok_tanggal'=>'2024-01-01',
                'stok_jumlah'=>50,
            ],
            [
                'stok_id'=>8,
                'user_id'=>3,
                'barang_id'=>8,
                'stok_tanggal'=>'2024-01-01',
                'stok_jumlah'=>50,
            ],
            [
                'stok_id'=>9,
                'user_id'=>3,
                'barang_id'=>9,
                'stok_tanggal'=>'2024-01-01',
                'stok_jumlah'=>30,
            ],
            [
                'stok_id'=>10,
                'user_id'=>3,
                'barang_id'=>10,
                'stok_tanggal'=>'2024-01-01',
                'stok_jumlah'=>100,
            ],
        ];
        DB::table('t_stoks')->insert($data);
    }
}
