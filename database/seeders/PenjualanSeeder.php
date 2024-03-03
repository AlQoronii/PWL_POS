<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id'=>1,
                'user_id'=>1,
                'pembeli'=>'Fathur',
                'penjualan_kode'=>'P001',
                'penjualan_tanggal'=>'2024-01-02'

            ],
            [
                'penjualan_id'=>2,
                'user_id'=>2,
                'pembeli'=>'Mr. M',
                'penjualan_kode'=>'P002',
                'penjualan_tanggal'=>'2024-01-02'
            ],
            [
                'penjualan_id'=>3,
                'user_id'=>3,
                'pembeli'=>'Rozak',
                'penjualan_kode'=>'P003',
                'penjualan_tanggal'=>'2024-02-03'
            ],
            [
                'penjualan_id'=>4,
                'user_id'=>1,
                'pembeli'=>'Fathurrozak',
                'penjualan_kode'=>'P004',
                'penjualan_tanggal'=>'2024-03-02'
            ],
            [
                'penjualan_id'=>5,
                'user_id'=>2,
                'pembeli'=>'Mr. Al',
                'penjualan_kode'=>'P005',
                'penjualan_tanggal'=>'2024-05-01'
            ],
            [
                'penjualan_id'=>6,
                'user_id'=>3,
                'pembeli'=>'Al Qoroni',
                'penjualan_kode'=>'P006',
                'penjualan_tanggal'=>'2024-12-03'
            ],
            [
                'penjualan_id'=>7,
                'user_id'=>1,
                'pembeli'=>'Roni',
                'penjualan_kode'=>'P007',
                'penjualan_tanggal'=>'2024-10-09'
            ],
            [
                'penjualan_id'=>8,
                'user_id'=>2,
                'pembeli'=>'Unknown',
                'penjualan_kode'=>'P008',
                'penjualan_tanggal'=>'2025-02-03'
            ],
            [
                'penjualan_id'=>9,
                'user_id'=>3,
                'pembeli'=>'Fulan',
                'penjualan_kode'=>'P009',
                'penjualan_tanggal'=>'2024-05-03'
            ],
            [
                'penjualan_id'=>10,
                'user_id'=>1,
                'pembeli'=>'Mr. F',
                'penjualan_kode'=>'P010',
                'penjualan_tanggal'=>'2024-03-03'
            ],
        ];
        DB::table('t_penjualans')->insert($data);
    }
}
