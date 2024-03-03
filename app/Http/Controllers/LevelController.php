<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index(){
        // Insert Data
        DB::insert('insert into m_levels(level_kode, level_nama, created_at) values(?,?,?)', ['CUS', 'Pelanggan', now()]);
        return 'Insert Data Baru Berhasil!!!';

        // Update Data
        //$row = DB::update ('update m_levels set level_nama = ? where level_kode = ?', ['customer', 'CUS']);
        //return 'Update Data Berhasil!!!. Jumlah data yang diupdate: ' . $row . 'baris';
        
        // Delete Data
        //$row = DB::delete('delete from m_levels where level_kode = ?', ['CUS']);
        //return 'Delete Data Berhasil!!!. Jumlah data yang dihapus: ' . $row . ' Baris';
    
        // Select Data
        // $data = DB::select('select * from m_levels');
        // return view('level', ['data' => $data]);
    }
}
