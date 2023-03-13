<?php

namespace App\Http\Controllers;

use App\Models\Kalkulasi;
use App\Models\dealerModel;
use Illuminate\Http\Request;
use App\Models\DataMobilBaru;
use App\Models\KursiMobilModel;
use App\Models\PintuMobilModel;
use App\Models\PengajualJualModel;

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

    public function Kalkulasi(Request $request)
    {
        $kalkulasi = new Kalkulasi();

        $kalkulasi->id_dealer = $request->merk;
        $kalkulasi->nama_mobil = $request->mobil;
        $kalkulasi->id_pintu = $request->pintu;
        $kalkulasi->id_kursi = $request->kursi;
        $kalkulasi->kategori = $request->kategori;
        $kalkulasi->pendapatan = $request->pendapatan;
        $kalkulasi->tenor = $request->tenor;
        $kalkulasi->dp = $request->dp;
        $kalkulasi->nama_lengkap = $request->lengkap;
        $kalkulasi->email = $request->email;
        $kalkulasi->no_hp = $request->no_hp;


        $kalkulasi->save();

        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $PengajuanJual=PengajualJualModel::create($request->all());

        return redirect()->to('/konfirmasi-pembelian-mobil-baru');
    }

    public function BeliMobilBaru($id)
    {
        $detailmobilBaru = DataMobilBaru::with(['dealer','pintu','kursi'])->find($id);
        return view('Customer.beliMobilBaru',['detailMobilBaru'=>$detailmobilBaru]);

    }

    public function addPengajuanJual(Request $request)
    {
        $PengajuanJual = new PengajualJualModel();
        $newName='';
        if($request->file('foto')){

            $extension = $request->file('foto')->getClientOriginalExtension();
            $newName = $request->nama.'-'.now()->timestamp.'.'.$extension;
            $PengajuanJual->foto = $request->file('foto')->storeAs('FotoMobilBaru',$newName);
        }




        $PengajuanJual->id_dealer = $request->merk;
        $PengajuanJual->nama_mobil = $request->nama;
        $PengajuanJual->id_pintu = $request->pintu;
        $PengajuanJual->id_kursi = $request->kursi;
        $PengajuanJual->kategori = $request->kategori;
        $PengajuanJual->tahun_mobil = $request->tahun;
        $PengajuanJual->harga = $request->harga;
        $PengajuanJual->nama_stnk = $request->stnk;
        $PengajuanJual->masa_stnk = $request->berlaku;
        $PengajuanJual->plat = $request->plat;
        $PengajuanJual->lokasi = $request->lokasi;
        $PengajuanJual->nama = $request->lengkap;
        $PengajuanJual->email = $request->email;
        $PengajuanJual->no_hp = $request->no_hp;
        $PengajuanJual->status = "Pending";

        $PengajuanJual->save();

        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $PengajuanJual=PengajualJualModel::create($request->all());

        return redirect()->to('/pengajuan-jual');
    }


    public function KonfirmasiBeliMobilBaru($id)
    {

        $kalkulasi = Kalkulasi::with(['dealer','pintu','kursi'])->find($id);
        // $dealer = dealerModel::select('id_dealer','nama_dealer')->get();
        // $kursi = KursiMobilModel::select('id_kursi','jumlah')->get();
        // $pintu = PintuMobilModel::select('id_pintu','jumlah')->get();
        return view('Customer.KonfirmasiBeliMobilBaru',['kalkulasi'=>$kalkulasi,'dealer'=>$dealer,'pintu'=>$pintu,'kursi'=>$kursi,]);

    }
}
