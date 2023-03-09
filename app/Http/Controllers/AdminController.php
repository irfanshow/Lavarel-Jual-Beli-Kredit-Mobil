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

    public function DataMobilBaru()
    {
        $mobilBaru = DataMobilBaru::with('dealer')->get();
        return view('Admin.dataMobilBaru',['mobilBaru'=>$mobilBaru]);
    }

    public function DetailDataMobilBaru($id)
    {
        $detailmobilBaru = DataMobilBaru::with('dealer')->find($id);
        return view('Admin.detailMobilBaru',['detailMobilBaru'=>$detailmobilBaru]);
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


    public function EditMobilBaru(Request $request,$id)
    {
        // $DataMobilBaru = new DataMobilBaru();
        $detailmobilBaru = DataMobilBaru::with('dealer')->find($id);
        $dealer = dealerModel::where('id_dealer','!=', $detailmobilBaru->id_dealer)->select('id_dealer','nama_dealer')->get();


        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $DataMobilBaru=DataMobilBaru::create($request->all());

        return view('Admin.editDataMobilBaru',['detailMobilBaru'=>$detailmobilBaru,'dealer'=>$dealer]);


    }

    public function updateMobilBaru(Request $request,$id)
    {
        $detailmobilBaru = DataMobilBaru::find($id);

        $detailmobilBaru->id_dealer = $request->merk;
        $detailmobilBaru->nama = $request->nama;
        $detailmobilBaru->kategori = $request->kategori;
        $detailmobilBaru->deskripsi = $request->deskripsi;
        $detailmobilBaru->harga = $request->harga;
        // $DataMobilBaru->foto = $request->foto;
        $detailmobilBaru->save();

        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $DataMobilBaru=DataMobilBaru::create($request->all());

        return redirect()->to('/data-mobil-baru');


    }
}
