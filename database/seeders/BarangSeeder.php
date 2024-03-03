<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id'=>1,
                'kategori_id'=>1,
                'barang_kode'=>'Penc',
                'barang_nama'=>'Pensil',
                'harga_beli'=>900,
                'harga_jual'=>1500,
            ],
            [
                'barang_id'=>2,
                'kategori_id'=>1,
                'barang_kode'=>'Phs',
                'barang_nama'=>'Penghapus',
                'harga_beli'=>500,
                'harga_jual'=>1000,
            ],
            [
                'barang_id'=>3,
                'kategori_id'=>2,
                'barang_kode'=>'STO',
                'barang_nama'=>'Soto',
                'harga_beli'=>4250,
                'harga_jual'=>5000,
            ],
            [
                'barang_id'=>4,
                'kategori_id'=>2,
                'barang_kode'=>'RSL',
                'barang_nama'=>'Risol Mayo',
                'harga_beli'=>2125,
                'harga_jual'=>2500,
            ],
            [
                'barang_id'=>5,
                'kategori_id'=>3,
                'barang_kode'=>'FLR',
                'barang_nama'=>'Floridina',
                'harga_beli'=>2100,
                'harga_jual'=>3000,
            ],
            [
                'barang_id'=>6,
                'kategori_id'=>3,
                'barang_kode'=>'CHS',
                'barang_nama'=>'Cheers 350mL',
                'harga_beli'=>2000,
                'harga_jual'=>2500,
            ],
            [
                'barang_id'=>7,
                'kategori_id'=>4,
                'barang_kode'=>'MTR',
                'barang_nama'=>'Materai 10rb',
                'harga_beli'=>10000,
                'harga_jual'=>12000,
            ],
            [
                'barang_id'=>8,
                'kategori_id'=>4,
                'barang_kode'=>'MTR1',
                'barang_nama'=>'Materai 6rb',
                'harga_beli'=>6000,
                'harga_jual'=>7000,
            ],
            [
                'barang_id'=>9,
                'kategori_id'=>5,
                'barang_kode'=>'LND',
                'barang_nama'=>'Lanyard Guru',
                'harga_beli'=>10000,
                'harga_jual'=>15000,
            ],
            [
                'barang_id'=>10,
                'kategori_id'=>5,
                'barang_kode'=>'LND1',
                'barang_nama'=>'Lanyard Siswa',
                'harga_beli'=>10000,
                'harga_jual'=>12500,
            ]

        ];
        DB::table('m_barangs')->insert($data);
    }
}
