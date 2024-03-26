<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use App\Models\m_kategori;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    // public function index(){
    //     // $data = [
    //     //     'kategori_kode' => 'SNK',
    //     //     'kategori_nama' => 'Snack/Makanan Ringan',
    //     //     'created_at' => now()
    //     // ];
    //     // DB::table('m_kategoris')->insert($data);
    //     // return 'Insert data baru berhasil!!!';

    //     // $row = DB::table('m_kategoris')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
    //     // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';
    //     // $row = DB::table('m_kategoris')->where('kategori_kode', 'SNK')->delete();
    //     // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . 'baris';
            
    //     $data = DB::table('m_kategoris')->get();
    //     return view('kategori', ['data' => $data]);
    // }

    // 
    public function create(){   
        return view('kategori.create');
    }        

    public function store(Request $request): RedirectResponse{
        $validated = $request->validateWithBag([
            'kategori_kode' => 'required',
            'kategori_nama' => 'required',
        ]);
        return redirect('/kategori');
    }
}
