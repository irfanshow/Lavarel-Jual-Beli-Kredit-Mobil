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

Route::get('/', function () {
    return view('Customer.landingPage');
});


//Customer
Route::get('/home',[JualMobilController::Class,'index']);
Route::get('/pengajuan',[CustomerController::Class,'PengajuanMobilBaru']);




//Routes ADMIN
Route::get('/TS',[AdminController::Class,'index']);
Route::get('/ts',[AdminController::Class,'index']);
Route::get('tambahMobilBaru',[AdminController::Class,'addMobilView']);

//Tambah Mobil Baru
Route::post('add-mobil',[AdminController::Class,'addMobil']);


//EditMobil Baru
Route::get('edit-mobil-baru/{id}',[AdminController::Class,'editMobilBaru']);
Route::put('update-mobil/{id}',[AdminController::Class,'updateMobilBaru']);


Route::get('data-mobil-baru',[AdminController::Class,'DataMobilBaru']);
Route::get('detail-data-mobil-baru/{id}',[AdminController::Class,'DetailDataMobilBaru']);


