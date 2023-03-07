<?php

namespace App\Http\Controllers;

use App\Models\dealerModel;
use Illuminate\Http\Request;
use App\Models\DataMobilBaru;

class AdminController extends Controller
{
    public function index()
    {


        return view('Admin.dashboard');
    }

    public function addMobilView()
    {
        $dealer = dealerModel::select('id_dealer','nama_dealer')->get();
        return view('Admin.tambahMobilBaru',['dealer'=>$dealer]);
    }

    public function addMobil(Request $request)
    {
        $DataMobilBaru = new DataMobilBaru();
        $DataMobilBaru->id_dealer = $request->merk;
        $DataMobilBaru->nama = $request->nama;
        $DataMobilBaru->kategori = $request->kategori;
        $DataMobilBaru->deskripsi = $request->deskripsi;
        $DataMobilBaru->harga = $request->harga;
        // $DataMobilBaru->foto = $request->foto;
        $DataMobilBaru->save();

        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $DataMobilBaru=DataMobilBaru::create($request->all());

        return redirect()->back();


    }
}
