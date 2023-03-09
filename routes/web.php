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


//Admin
// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         // Matches The "/admin/users" URL
//     });
// });

//Routes ADMIN
Route::get('/TS',[AdminController::Class,'index']);
Route::get('/ts',[AdminController::Class,'index']);
Route::get('tambahMobilBaru',[AdminController::Class,'addMobilView']);

Route::post('add-mobil',[AdminController::Class,'addMobil']);

Route::get('data-mobil-baru',[AdminController::Class,'DataMobilBaru']);
Route::get('detail-data-mobil-baru',[AdminController::Class,'DetailDataMobilBaru']);


// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });
