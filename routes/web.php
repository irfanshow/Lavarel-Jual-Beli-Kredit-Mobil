<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\JualMobilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('Customer.landingPage');
// });

//Login Customer
Route::get('login',[AuthController::Class,'login'])->name('login');
Route::post('ProsesLogin',[AuthController::Class,'prosesLogin']);
Route::get('register',[AuthController::Class,'register']);

//Customer
Route::get('/',[CustomerController::Class,'landingPage']);
// Route::get('/home',[JualMobilController::Class,'index']);
// Route::get('/pengajuan',[CustomerController::Class,'PengajuanMobilBaru']);
Route::get('/list-mobil',[CustomerController::Class,'listMobilBaru']);
Route::get('/pengajuan-jual',[CustomerController::Class,'penjualanView']);
Route::get('/list-mobil-bekas',[CustomerController::Class,'listMobilBekas']);

Route::post('add-jual',[CustomerController::Class,'addPengajuanJual']);

//Beli Mobil Baru
Route::get('beli-mobil-baru/{id}',[CustomerController::Class,'BeliMobilBaru'])->middleware('auth');
Route::post('kalkulasi',[CustomerController::Class,'Kalkulasi'])->middleware('auth');

//Beli Mobil Bekas
Route::get('beli-mobil-bekas/{id}',[CustomerController::Class,'BeliMobilBekas'])->middleware('auth');
Route::post('kalkulasiBekas',[CustomerController::Class,'KalkulasiBekas'])->middleware('auth');





//Routes ADMIN
Route::get('/TS',[AdminController::Class,'index']);
Route::get('/ts',[AdminController::Class,'index']);
Route::get('tambahMobilBaru',[AdminController::Class,'addMobilView']);

//Tambah Mobil Baru
Route::post('add-mobil',[AdminController::Class,'addMobil']);


//EditMobil Baru
Route::get('edit-mobil-baru/{id}',[AdminController::Class,'editMobilBaru']);
Route::put('update-mobil/{id}',[AdminController::Class,'updateMobilBaru']);

//DeleteMobil Baru
Route::get('delete-mobil-baru/{id}',[AdminController::Class,'deleteMobilBaru']);

//lihat Data mobil Baru
Route::get('data-mobil-baru',[AdminController::Class,'DataMobilBaru']);
Route::get('detail-data-mobil-baru/{id}',[AdminController::Class,'DetailDataMobilBaru']);

//lihat Data mobil Bekas
Route::get('data-mobil-bekas',[AdminController::Class,'DataMobilBekas']);
Route::get('detail-data-mobil-bekas/{id}',[AdminController::Class,'DetailDataMobilBekas']);

//DeleteMobil Bekas
Route::get('delete-mobil-bekas/{id}',[AdminController::Class,'deleteMobilBekas']);


//Kelola penjualan
Route::get('kelola-penjualan',[AdminController::Class,'KelolaPenjualan']);
Route::get('jual-diterima',[AdminController::Class,'PenjualanDiterima']);
Route::get('jual-ditolak',[AdminController::Class,'PenjualanDitolak']);
Route::get('detail-penjualan/{id}',[AdminController::Class,'DetailPenjualan']);
Route::put('terima-penjualan/{id}',[AdminController::Class,'terimaPenjualan']);
Route::put('tolak-penjualan/{id}',[AdminController::Class,'tolakPenjualan']);
Route::get('detail-riwayat-penjualan/{id}',[AdminController::Class,'detailRiwayatPenjualan']);

//Kelola Pembelian Baru
Route::get('kelola-pembelian-mobil-baru',[AdminController::Class,'mengelolaPembelianMobilBaru']);
Route::get('detail-pembelian-mobil-baru/{id}',[AdminController::Class,'detailMengelolaPembelianMobilBaru']);
Route::put('terima-pembelian-baru/{id}',[AdminController::Class,'terimaPembelianBaru']);
Route::put('tolak-pembelian-baru/{id}',[AdminController::Class,'tolakPembelianBaru']);
Route::get('beli-baru-diterima',[AdminController::Class,'PembelianBaruDiterima']);
Route::get('beli-baru-ditolak',[AdminController::Class,'PembelianBaruDitolak']);
Route::get('detail-riwayat-beli-mobil-baru/{id}',[AdminController::Class,'detailRiwayatPembelianMobilBaru']);

//Kelola Pembelian Bekas
Route::get('kelola-pembelian-mobil-bekas',[AdminController::Class,'mengelolaPembelianMobilBekas']);
Route::get('detail-pembelian-mobil-bekas/{id}',[AdminController::Class,'detailMengelolaPembelianMobilBekas']);
Route::put('terima-pembelian-bekas/{id}',[AdminController::Class,'terimaPembelianBekas']);
Route::put('tolak-pembelian-bekas/{id}',[AdminController::Class,'tolakPembelianBaru']);
Route::get('beli-bekas-diterima',[AdminController::Class,'PembelianBekasDiterima']);
Route::get('beli-bekas-ditolak',[AdminController::Class,'PembelianBekasDitolak']);
Route::get('detail-riwayat-beli-mobil-bekas/{id}',[AdminController::Class,'detailRiwayatPembelianMobilBekas']);

//Proses Pengajuan

Route::get('proses-pengajuan-user-baru',[CustomerController::Class,'ProsesPengajuanBeliMobilBaru']);
Route::get('proses-pengajuan-user-bekas',[CustomerController::Class,'ProsesPengajuanBeliMobilBekas']);
