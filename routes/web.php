<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\POSController;
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


Route::get('/level', [LevelController::class,'index']);
// Route::get('/kategori', [KategoriController::class,'index']);
Route::get('/user',[UserController::class, 'index'])->name('user');
Route::get('/user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('/user/tambah_simpan');
Route::get('/user/ubah/{id}',[UserController::class,'ubah'])->name('/user/ubah');
Route::put('/user/ubah_simpan/{id}', [UserController::class,'ubah_simpan'])->name('/user/ubah_simpan');
Route::get('/user/hapus/{id}', [UserController::class,'hapus'])->name('/user/hapus');
Auth::routes();

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
