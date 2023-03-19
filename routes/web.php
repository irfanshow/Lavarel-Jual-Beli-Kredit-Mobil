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
Route::get('login',[AuthController::Class,'login'])->name('login')->middleware('guest');
Route::post('ProsesLogin',[AuthController::Class,'prosesLogin']);
Route::get('register',[AuthController::Class,'register'])->middleware('guest');
Route::get('logout',[AuthController::Class,'logout'])->middleware('auth');

//Register Customer
Route::post('prosesRegister',[AuthController::Class,'prosesRegister'])->middleware('guest');

//Login TS
Route::post('ProsesLoginTS',[AuthController::Class,'prosesLoginTS'])->middleware('guest');



//Customer
Route::get('/home',[CustomerController::Class,'landingPage'])->middleware('auth');
Route::get('/',[CustomerController::Class,'landingPageTidakLogin'])->middleware('guest');
// Route::get('/home',[JualMobilController::Class,'index']);
// Route::get('/pengajuan',[CustomerController::Class,'PengajuanMobilBaru']);
Route::get('/list-mobil',[CustomerController::Class,'listMobilBaru'])->middleware('auth');
Route::get('/pengajuan-jual',[CustomerController::Class,'penjualanView'])->middleware('auth');
Route::get('/list-mobil-bekas',[CustomerController::Class,'listMobilBekas'])->middleware('auth');

Route::post('add-jual',[CustomerController::Class,'addPengajuanJual'])->middleware('auth');

//Beli Mobil Baru
Route::get('beli-mobil-baru/{id}',[CustomerController::Class,'BeliMobilBaru'])->middleware('auth');
Route::post('kalkulasi',[CustomerController::Class,'Kalkulasi'])->middleware('auth');

//Beli Mobil Bekas
Route::get('beli-mobil-bekas/{id}',[CustomerController::Class,'BeliMobilBekas'])->middleware('auth');
Route::post('kalkulasiBekas',[CustomerController::Class,'KalkulasiBekas'])->middleware('auth');

//BTidak Login
Route::get('/list-mobil-tidak-login',[CustomerController::Class,'listMobilBaruTidakLogin'])->middleware('guest');
Route::get('/pengajuan-jual-tidak-login',[CustomerController::Class,'penjualanViewTidakLogin'])->middleware('guest');
Route::get('/list-mobil-bekas-tidak-login',[CustomerController::Class,'listMobilBekasTidakLogin'])->middleware('guest');



//Routes ADMIN
Route::get('/TS',[AdminController::Class,'index'])->middleware('auth-ts');
Route::get('/ts',[AdminController::Class,'index'])->middleware('auth-ts');
Route::get('tambahMobilBaru',[AdminController::Class,'addMobilView'])->middleware('auth-ts');

//Tambah Mobil Baru
Route::post('add-mobil',[AdminController::Class,'addMobil'])->middleware('auth-ts');


//EditMobil Baru
Route::get('edit-mobil-baru/{id}',[AdminController::Class,'editMobilBaru'])->middleware('auth-ts');
Route::put('update-mobil/{id}',[AdminController::Class,'updateMobilBaru'])->middleware('auth-ts');

//DeleteMobil Baru
Route::get('delete-mobil-baru/{id}',[AdminController::Class,'deleteMobilBaru'])->middleware('auth-ts');

//lihat Data mobil Baru
Route::get('data-mobil-baru',[AdminController::Class,'DataMobilBaru'])->middleware('auth-ts');
Route::get('detail-data-mobil-baru/{id}',[AdminController::Class,'DetailDataMobilBaru'])->middleware('auth-ts');

//lihat Data mobil Bekas
Route::get('data-mobil-bekas',[AdminController::Class,'DataMobilBekas'])->middleware('auth-ts');
Route::get('detail-data-mobil-bekas/{id}',[AdminController::Class,'DetailDataMobilBekas'])->middleware('auth-ts');

//DeleteMobil Bekas
Route::get('delete-mobil-bekas/{id}',[AdminController::Class,'deleteMobilBekas'])->middleware('auth-ts');


//Kelola penjualan
Route::get('kelola-penjualan',[AdminController::Class,'KelolaPenjualan'])->middleware('auth-ts');
Route::get('jual-diterima',[AdminController::Class,'PenjualanDiterima'])->middleware('auth-ts');
Route::get('jual-ditolak',[AdminController::Class,'PenjualanDitolak'])->middleware('auth-ts');
Route::get('detail-penjualan/{id}',[AdminController::Class,'DetailPenjualan'])->middleware('auth-ts');
Route::put('terima-penjualan/{id}',[AdminController::Class,'terimaPenjualan'])->middleware('auth-ts');
Route::put('tolak-penjualan/{id}',[AdminController::Class,'tolakPenjualan'])->middleware('auth-ts');
Route::get('detail-riwayat-penjualan/{id}',[AdminController::Class,'detailRiwayatPenjualan'])->middleware('auth-ts');

//Kelola Pembelian Baru
Route::get('kelola-pembelian-mobil-baru',[AdminController::Class,'mengelolaPembelianMobilBaru'])->middleware('auth-ts');
Route::get('detail-pembelian-mobil-baru/{id}',[AdminController::Class,'detailMengelolaPembelianMobilBaru'])->middleware('auth-ts');
Route::put('terima-pembelian-baru/{id}',[AdminController::Class,'terimaPembelianBaru'])->middleware('auth-ts');
Route::put('tolak-pembelian-baru/{id}',[AdminController::Class,'tolakPembelianBaru'])->middleware('auth-ts');
Route::get('beli-baru-diterima',[AdminController::Class,'PembelianBaruDiterima'])->middleware('auth-ts');
Route::get('beli-baru-ditolak',[AdminController::Class,'PembelianBaruDitolak'])->middleware('auth-ts');
Route::get('detail-riwayat-beli-mobil-baru/{id}',[AdminController::Class,'detailRiwayatPembelianMobilBaru'])->middleware('auth-ts');

//Kelola Pembelian Bekas
Route::get('kelola-pembelian-mobil-bekas',[AdminController::Class,'mengelolaPembelianMobilBekas'])->middleware('auth-ts');
Route::get('detail-pembelian-mobil-bekas/{id}',[AdminController::Class,'detailMengelolaPembelianMobilBekas'])->middleware('auth-ts');
Route::put('terima-pembelian-bekas/{id}',[AdminController::Class,'terimaPembelianBekas'])->middleware('auth-ts');
Route::put('tolak-pembelian-bekas/{id}',[AdminController::Class,'tolakPembelianBaru'])->middleware('auth-ts');
Route::get('beli-bekas-diterima',[AdminController::Class,'PembelianBekasDiterima'])->middleware('auth-ts');
Route::get('beli-bekas-ditolak',[AdminController::Class,'PembelianBekasDitolak'])->middleware('auth-ts');
Route::get('detail-riwayat-beli-mobil-bekas/{id}',[AdminController::Class,'detailRiwayatPembelianMobilBekas'])->middleware('auth-ts');

//Proses Pengajuan

Route::get('proses-pengajuan-user-baru',[CustomerController::Class,'ProsesPengajuanBeliMobilBaru'])->middleware('auth');
Route::get('proses-pengajuan-user-bekas',[CustomerController::Class,'ProsesPengajuanBeliMobilBekas'])->middleware('auth');
