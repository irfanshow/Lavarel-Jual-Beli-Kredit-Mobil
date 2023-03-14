<?php

use Illuminate\Support\Facades\Route;
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


//Customer
Route::get('/',[CustomerController::Class,'landingPage']);
Route::get('/home',[JualMobilController::Class,'index']);
Route::get('/pengajuan',[CustomerController::Class,'PengajuanMobilBaru']);
Route::get('/list-mobil',[CustomerController::Class,'listMobilBaru']);
Route::get('/pengajuan-jual',[CustomerController::Class,'penjualanView']);

Route::post('add-jual',[CustomerController::Class,'addPengajuanJual']);

//Beli Mobil Baru
Route::get('beli-mobil-baru/{id}',[CustomerController::Class,'BeliMobilBaru']);
Route::post('kalkulasi',[CustomerController::Class,'Kalkulasi']);





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

Route::get('data-mobil-baru',[AdminController::Class,'DataMobilBaru']);
Route::get('detail-data-mobil-baru/{id}',[AdminController::Class,'DetailDataMobilBaru']);


//Kelola penjualan
Route::get('kelola-penjualan',[AdminController::Class,'KelolaPenjualan']);
Route::get('jual-diterima',[AdminController::Class,'PenjualanDiterima']);
Route::get('jual-ditolak',[AdminController::Class,'PenjualanDitolak']);
Route::get('detail-penjualan/{id}',[AdminController::Class,'DetailPenjualan']);
Route::put('terima-penjualan/{id}',[AdminController::Class,'terimaPenjualan']);
Route::put('tolak-penjualan/{id}',[AdminController::Class,'tolakPenjualan']);

//Kelola Pembelian
Route::get('kelola-pembelian-mobil-baru',[AdminController::Class,'mengelolaPembelianMobilBaru']);
Route::get('detail-pembelian-mobil-baru/{id}',[AdminController::Class,'detailMengelolaPembelianMobilBaru']);

