<?php

namespace App\Http\Controllers;

use App\Models\dealerModel;
use Illuminate\Http\Request;
use App\Models\DataMobilBaru;
use App\Models\KursiMobilModel;
use App\Models\PintuMobilModel;
use App\Models\PengajualJualModel;

class AdminController extends Controller
{
    public function index()
    {


        return view('Admin.dashboard');
    }

    public function addMobilView()
    {
        $dealer = dealerModel::select('id_dealer','nama_dealer')->get();
        $kursi = KursiMobilModel::select('id_kursi','jumlah')->get();
        $pintu = PintuMobilModel::select('id_pintu','jumlah')->get();


        return view('Admin.tambahMobilBaru',['dealer'=>$dealer,'pintu'=>$pintu,'kursi'=>$kursi,]);
    }

    public function DataMobilBaru()
    {
        $mobilBaru = DataMobilBaru::with(['dealer','pintu','kursi'])->get();
        return view('Admin.dataMobilBaru',['mobilBaru'=>$mobilBaru]);
    }

    public function DetailDataMobilBaru($id)
    {
        $detailmobilBaru = DataMobilBaru::with(['dealer','pintu','kursi'])->find($id);
        return view('Admin.detailMobilBaru',['detailMobilBaru'=>$detailmobilBaru]);
    }



    public function addMobil(Request $request)
    {

        $DataMobilBaru = new DataMobilBaru();
        $newName='';
        if($request->file('foto')){

            $extension = $request->file('foto')->getClientOriginalExtension();
            $newName = $request->nama.'-'.now()->timestamp.'.'.$extension;
            $DataMobilBaru->foto = $request->file('foto')->storeAs('FotoMobilBaru',$newName);
        }




        $DataMobilBaru->id_dealer = $request->merk;
        $DataMobilBaru->nama = $request->nama;
        $DataMobilBaru->id_pintu = $request->pintu;
        $DataMobilBaru->id_kursi = $request->kursi;
        $DataMobilBaru->kategori = $request->kategori;
        $DataMobilBaru->deskripsi = $request->deskripsi;
        $DataMobilBaru->harga = $request->harga;

        $DataMobilBaru->save();

        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $DataMobilBaru=DataMobilBaru::create($request->all());

        return redirect()->to('/data-mobil-baru');


    }


    public function EditMobilBaru(Request $request,$id)
    {
        // $DataMobilBaru = new DataMobilBaru();
        $detailmobilBaru = DataMobilBaru::with('dealer','pintu','kursi')->find($id);
        $dealer = dealerModel::where('id_dealer','!=', $detailmobilBaru->id_dealer)->select('id_dealer','nama_dealer')->get();
        $pintu = PintuMobilModel::where('id_pintu','!=', $detailmobilBaru->id_pintu)->select('id_pintu','jumlah')->get();
        $kursi = KursiMobilModel::where('id_kursi','!=', $detailmobilBaru->id_kursi)->select('id_kursi','jumlah')->get();


        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $DataMobilBaru=DataMobilBaru::create($request->all());

        return view('Admin.editDataMobilBaru',['detailMobilBaru'=>$detailmobilBaru,'dealer'=>$dealer,'pintu'=>$pintu,'kursi'=>$kursi]);


    }

    public function updateMobilBaru(Request $request,$id)
    {
        $detailmobilBaru = DataMobilBaru::find($id);

        $newName='';
        if($request->file('foto')){

            $extension = $request->file('foto')->getClientOriginalExtension();
            $newName = $request->nama.'-'.now()->timestamp.'.'.$extension;
            $detailmobilBaru->foto = $request->file('foto')->storeAs('FotoMobilBaru',$newName);
        }

        $detailmobilBaru->id_dealer = $request->merk;
        $detailmobilBaru->nama = $request->nama;
        $detailmobilBaru->id_pintu = $request->pintu;
        $detailmobilBaru->id_kursi = $request->kursi;
        $detailmobilBaru->kategori = $request->kategori;
        $detailmobilBaru->deskripsi = $request->deskripsi;
        $detailmobilBaru->harga = $request->harga;
        // $DataMobilBaru->foto = $request->foto;
        $detailmobilBaru->save();

        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $DataMobilBaru=DataMobilBaru::create($request->all());

        return redirect()->to('/data-mobil-baru');


    }


    public function deleteMobilBaru(Request $request,$id)
    {
        $detailmobilBaru = DataMobilBaru::find($id);
        $detailmobilBaru->delete();

        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $DataMobilBaru=DataMobilBaru::create($request->all());

        return redirect()->to('/data-mobil-baru');


    }

    public function KelolaPenjualan()
    {
        $jual = PengajualJualModel::get();

        return view('Admin.mengelolaPenjualan',['jual'=>$jual]);


    }

    public function DetailPenjualan(Request $request,$id)
    {
        // $DataMobilBaru = new DataMobilBaru();
        $jual = PengajualJualModel::with('dealer','pintu','kursi')->find($id);
        $dealer = dealerModel::where('id_dealer','!=', $jual->id_dealer)->select('id_dealer','nama_dealer')->get();
        $pintu = PintuMobilModel::where('id_pintu','!=', $jual->id_pintu)->select('id_pintu','jumlah')->get();
        $kursi = KursiMobilModel::where('id_kursi','!=', $jual->id_kursi)->select('id_kursi','jumlah')->get();


        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $DataMobilBaru=DataMobilBaru::create($request->all());

        return view('Admin.detailPenjualan',['jual'=>$jual,'dealer'=>$dealer,'pintu'=>$pintu,'kursi'=>$kursi]);


    }



}
