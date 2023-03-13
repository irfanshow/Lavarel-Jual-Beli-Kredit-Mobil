<?php

namespace App\Http\Controllers;

use App\Models\dealerModel;
use Illuminate\Http\Request;
use App\Models\DataMobilBaru;
use App\Models\KursiMobilModel;
use App\Models\PintuMobilModel;

class CustomerController extends Controller
{

    public function landingPage()
    {
        $mobilBaru = DataMobilBaru::with('dealer')->get();

        return view('Customer.landingPage',['mobilBaru'=>$mobilBaru]);
    }

    public function listMobilBaru()
    {


        $mobilBaru = DataMobilBaru::with(['dealer','pintu','kursi'])->get();

        return view('Customer.list-mobil',['mobilBaru'=>$mobilBaru]);
    }

    public function PengajuanMobilBaru()
    {
        // $mobilBaru = DataMobilBaru::with('dealer')->get();

        return view('Customer.pengajuanMobilBaru');
    }


    public function penjualanView()
    {
        // $mobilBaru = DataMobilBaru::with('dealer')->get();
        $dealer = dealerModel::select('id_dealer','nama_dealer')->get();
        $kursi = KursiMobilModel::select('id_kursi','jumlah')->get();
        $pintu = PintuMobilModel::select('id_pintu','jumlah')->get();

        return view('Customer.pengajuanPenjualan',['dealer'=>$dealer,'pintu'=>$pintu,'kursi'=>$kursi,]);
    }
}
