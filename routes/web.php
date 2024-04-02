<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Database\Seeders\KategoriSeeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/level', [LevelController::class,'index']);
// // Route::get('/kategori', [KategoriController::class,'index']);
// Route::get('/user',[UserController::class, 'index'])->name('user');
// Route::get('/user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('/user/tambah_simpan');
// Route::get('/user/ubah/{id}',[UserController::class,'ubah'])->name('/user/ubah');
// Route::put('/user/ubah_simpan/{id}', [UserController::class,'ubah_simpan'])->name('/user/ubah_simpan');
// Route::get('/user/hapus/{id}', [UserController::class,'hapus'])->name('/user/hapus');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/kategori', [KategoriController::class,'index']);

// Route::get('/kategori/create',[KategoriController::class, 'create'])->name('kategori.tambah');
Route::post('/kategori/tambah_simpan', [KategoriController::class,'tambah_simpan'])->name('kategori.simpan');
Route::get('/kategori/create',[KategoriController::class,'create']);
Route::post('/kategori',[KategoriController::class,'store']);

Route::get('/kategori/{id}/edit', [KategoriController::class,'edit'])->name('kategori.edit');
Route::put('/kategori/{id}/update',[KategoriController::class,'update'])->name('kategori.update');

Route::get('/kategori/{id}/hapus',[KategoriController::class,'delete'])->name('kategori.delete');

Route::resource('m_user', POSController::class);


// Jobsheet - 7
Route::get('/', [WelcomeController::class, 'index']);


// Praktikum 3
Route::group(['prefix'=> 'user'], function(){
    Route::get('/',[UserController::class, 'index']);               // Menampilkan halaman user
    Route::post('/list',[UserController::class, 'list']);           // Menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create',[UserController::class, 'create']);        // Menampilkan halaman form tambah user
    Route::post('/',[UserController::class, 'store']);              // Menampilkan data user baru
    Route::get('/{id}',[UserController::class, 'show']);            // Menampilkan detail user
    Route::get('/{id}/edit',[UserController::class, 'edit']);       // Menampilkan halaman form edit user
    Route::put('/{id}',[UserController::class, 'update']);          // Menyimpan perubahan data user
    Route::delete('/{id}',[UserController::class, 'destroy']);      // Menghapus data user
});


Route::group(['prefix'=> 'level'], function(){
    Route::get('/',[LevelController::class, 'index']);               // Menampilkan halaman user
    Route::post('/list',[LevelController::class, 'list']);           // Menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create',[LevelController::class, 'create']);        // Menampilkan halaman form tambah user
    Route::post('/',[LevelController::class, 'store']);              // Menampilkan data user baru
    Route::get('/{id}',[LevelController::class, 'show']);            // Menampilkan detail user
    Route::get('/{id}/edit',[LevelController::class, 'edit']);       // Menampilkan halaman form edit user
    Route::put('/{id}',[LevelController::class, 'update']);          // Menyimpan perubahan data user
    Route::delete('/{id}',[LevelController::class, 'destroy']);      // Menghapus data user
});


Route::group(['prefix'=> 'kategori'], function(){
    Route::get('/',[KategoriController::class, 'index']);               // Menampilkan halaman user
    Route::post('/list',[KategoriController::class, 'list']);           // Menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create',[KategoriController::class, 'create']);        // Menampilkan halaman form tambah user
    Route::post('/',[KategoriController::class, 'store']);              // Menampilkan data user baru
    Route::get('/{id}',[KategoriController::class, 'show']);            // Menampilkan detail user
    Route::get('/{id}/edit',[KategoriController::class, 'edit']);       // Menampilkan halaman form edit user
    Route::put('/{id}',[KategoriController::class, 'update']);          // Menyimpan perubahan data user
    Route::delete('/{id}',[KategoriController::class, 'destroy']);      // Menghapus data user
});


Route::group(['prefix'=> 'barang'], function(){
    Route::get('/',[BarangController::class, 'index']);               // Menampilkan halaman user
    Route::post('/list',[BarangController::class, 'list']);           // Menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create',[BarangController::class, 'create']);        // Menampilkan halaman form tambah user
    Route::post('/',[BarangController::class, 'store']);              // Menampilkan data user baru
    Route::get('/{id}',[BarangController::class, 'show']);            // Menampilkan detail user
    Route::get('/{id}/edit',[BarangController::class, 'edit']);       // Menampilkan halaman form edit user
    Route::put('/{id}',[BarangController::class, 'update']);          // Menyimpan perubahan data user
    Route::delete('/{id}',[BarangController::class, 'destroy']);      // Menghapus data user
});


Route::group(['prefix'=> 'stok'], function(){
    Route::get('/',[StokController::class, 'index']);               // Menampilkan halaman user
    Route::post('/list',[StokController::class, 'list']);           // Menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create',[StokController::class, 'create']);        // Menampilkan halaman form tambah user
    Route::post('/',[StokController::class, 'store']);              // Menampilkan data user baru
    Route::get('/{id}',[StokController::class, 'show']);            // Menampilkan detail user
    Route::get('/{id}/edit',[StokController::class, 'edit']);       // Menampilkan halaman form edit user
    Route::put('/{id}',[StokController::class, 'update']);          // Menyimpan perubahan data user
    Route::delete('/{id}',[StokController::class, 'destroy']);      // Menghapus data user
});


Route::group(['prefix'=> 'penjualan'], function(){
    Route::get('/',[PenjualanController::class, 'index']);               // Menampilkan halaman user
    Route::post('/list',[PenjualanController::class, 'list']);           // Menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create',[PenjualanController::class, 'create']);        // Menampilkan halaman form tambah user
    Route::post('/',[PenjualanController::class, 'store']);              // Menampilkan data user baru
    Route::get('/{id}',[PenjualanController::class, 'show']);            // Menampilkan detail user
    Route::get('/{id}/edit',[PenjualanController::class, 'edit']);       // Menampilkan halaman form edit user
    Route::put('/{id}',[PenjualanController::class, 'update']);          // Menyimpan perubahan data user
    Route::delete('/{id}',[PenjualanController::class, 'destroy']);      // Menghapus data user
});
