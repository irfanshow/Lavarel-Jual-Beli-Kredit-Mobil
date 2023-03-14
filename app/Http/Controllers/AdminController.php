<?php

namespace App\Http\Controllers;

use App\Models\Kalkulasi;
use App\Models\dealerModel;
use Illuminate\Http\Request;
use App\Models\DataMobilBaru;
use App\Models\KalkulasiBekas;
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
        $jual = PengajualJualModel::where('status','=','Pending')->get();

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

    public function mengelolaPembelianMobilBaru()
    {
        $beliBaru = Kalkulasi::get();

        return view('Admin.mengelolaPembelianMobilBaru',['beliBaru'=>$beliBaru]);


    }

    public function detailMengelolaPembelianMobilBaru($id)
    {
        $beliBaru = Kalkulasi::with('dealer','pintu','kursi')->find($id);

        return view('Admin.detailPengajuanBeliMobilBaru',['beliBaru'=>$beliBaru]);


    }

    public function terimaPenjualan(Request $request,$id)
    {
        $PengajuanJual = PengajualJualModel::find($id);

        $PengajuanJual->status = "Diterima";

        $PengajuanJual->save();


        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $DataMobilBaru=DataMobilBaru::create($request->all());

        return redirect()->to('/kelola-penjualan');


    }

    public function tolakPenjualan(Request $request,$id)
    {
        $PengajuanJual = PengajualJualModel::find($id);

        $PengajuanJual->status = "Ditolak";

        $PengajuanJual->save();


        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $DataMobilBaru=DataMobilBaru::create($request->all());

        return redirect()->to('/kelola-penjualan');


    }


    public function PenjualanDiterima()
    {
        $jual = PengajualJualModel::where('status','=','Diterima')->get();

        return view('Admin.jualDiterima',['jual'=>$jual]);


    }

    public function PenjualanDitolak()
    {
        $jual = PengajualJualModel::where('status','=','Ditolak')->get();

        return view('Admin.jualDitolak',['jual'=>$jual]);


    }



    public function mengelolaPembelianMobilBekas()
    {
        $beliBekas = KalkulasiBekas::where('status','=','Pending')->get();

        return view('Admin.mengelolaPembelianMobilBekas',['beliBekas'=>$beliBekas]);


    }

    public function detailMengelolaPembelianMobilBekas($id)
    {
        $beliBekas = KalkulasiBekas::with('dealer','pintu','kursi')->find($id);

        return view('Admin.detailPengajuanBeliMobilBekas',['beliBekas'=>$beliBekas]);


    }

    public function DataMobilBekas()
    {
        $mobilBekas = PengajualjualModel::where('status','=','Diterima')->with(['dealer','pintu','kursi'])->get();
        return view('Admin.dataMobilBekas',['mobilBekas'=>$mobilBekas]);
    }

    public function DetailDataMobilBekas($id)
    {
        $detailmobilBekas = PengajualjualModel::with(['dealer','pintu','kursi'])->find($id);
        return view('Admin.detailMobilBekas',['detailMobilBekas'=>$detailmobilBekas]);
    }


    public function deleteMobilBekas(Request $request,$id)
    {
        $detailmobilBaru = PengajualjualModel::find($id);
        $detailmobilBaru->delete();

        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $DataMobilBaru=DataMobilBaru::create($request->all());

        return redirect()->to('/data-mobil-bekas');


    }

    public function terimaPembelianBaru(Request $request,$id)
    {
        $PengajuanBeli = Kalkulasi::find($id);

        $PengajuanBeli->status = "Diterima";

        $PengajuanBeli->save();


        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $DataMobilBaru=DataMobilBaru::create($request->all());

        return redirect()->to('/kelola-pembelian-mobil-baru');


    }

    public function tolakPembelianBaru(Request $request,$id)
    {
        $PengajuanBeli = Kalkulasi::find($id);

        $PengajuanBeli->status = "Ditolak";

        $PengajuanBeli->save();


        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $DataMobilBaru=DataMobilBaru::create($request->all());

        return redirect()->to('/kelola-pembelian-mobil-baru');


    }

    public function terimaPembelianBekas(Request $request,$id)
    {
        $PengajuanBeli = KalkulasiBekas::find($id);

        $PengajuanBeli->status = "Diterima";

        $PengajuanBeli->save();


        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $DataMobilBaru=DataMobilBaru::create($request->all());

        return redirect()->to('/kelola-pembelian-mobil-bekas');


    }

    public function tolakPembelianBekas(Request $request,$id)
    {
        $PengajuanBeli = KalkulasiBekas::find($id);

        $PengajuanBeli->status = "Ditolak";

        $PengajuanBeli->save();


        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $DataMobilBaru=DataMobilBaru::create($request->all());

        return redirect()->to('/kelola-pembelian-mobil-bekas');


    }

    public function PembelianBaruDiterima()
    {
        $beliBaru = Kalkulasi::where('status','=','Diterima')->get();

        return view('Admin.beliBaruDiterima',['beliBaru'=>$beliBaru]);


    }

    public function PembelianBaruDitolak()
    {
        $beliBaru = Kalkulasi::where('status','=','Ditolak')->get();

        return view('Admin.beliBaruDitolak',['beliBaru'=>$beliBaru]);


    }

    public function PembelianBekasDiterima()
    {
        $beliBekas = KalkulasiBekas::where('status','=','Diterima')->get();

        return view('Admin.beliBekasDiterima',['beliBekas'=>$beliBekas]);


    }

    public function PembelianBekasDitolak()
    {
        $beliBekas = KalkulasiBekas::where('status','=','Ditolak')->get();

        return view('Admin.beliBekasDitolak',['beliBekas'=>$beliBekas]);


    }




}
