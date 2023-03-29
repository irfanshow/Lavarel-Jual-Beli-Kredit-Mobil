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
use Illuminate\Support\Facades\DB;
use Symfony\Component\Mime\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{

    public function landingPageTidakLogin()
    {
        $mobilBaru = DataMobilBaru::with(['dealer','pintu','kursi'])->get()->last();
        // $count = DB::table('data_mobil_baru')->count();
        // // dd(DB::table('data_mobil_baru')->count());
        $mobilBaruAwal = DataMobilBaru::with(['dealer','pintu','kursi'])->get()->first();

        return view('Customer.landingPageTidakLogin',['mobilBaru'=>$mobilBaru,'mobilBaruAwal'=>$mobilBaruAwal]);
    }


    public function landingPage()
    {
        $mobilBaru = DataMobilBaru::with(['dealer','pintu','kursi'])->get()->last();
        // $count = DB::table('data_mobil_baru')->count();
        // // dd(DB::table('data_mobil_baru')->count());
        $mobilBaruAwal = DataMobilBaru::with(['dealer','pintu','kursi'])->get()->first();

        return view('Customer.landingPage',['mobilBaru'=>$mobilBaru,'mobilBaruAwal'=>$mobilBaruAwal]);
    }

    public function listMobilBaru(Request $request)
    {
        $cari = $request->cari;
        // dd($cari);
        $mobilBaru = DataMobilBaru::with(['dealer','pintu','kursi'])->where('nama','LIKE','%'.$cari.'%')
        ->orWhere('kategori','LIKE','%'.$cari.'%')
        ->orWhereHas('dealer',function($query) use ($cari){
            $query->where('nama_dealer','LIKE','%'.$cari.'%');
        })
        ->paginate(6);

        return view('Customer.list-mobil',['mobilBaru'=>$mobilBaru]);
    }

    public function listMobilBaruTidakLogin(Request $request)
    {
        $cari = $request->cari;
        // dd($cari);
        $mobilBaru = DataMobilBaru::with(['dealer','pintu','kursi'])->where('nama','LIKE','%'.$cari.'%')
        ->orWhere('kategori','LIKE','%'.$cari.'%')
        ->orWhereHas('dealer',function($query) use ($cari){
            $query->where('nama_dealer','LIKE','%'.$cari.'%');
        })
        ->paginate(6);

        return view('Customer.list-mobilTidakLogin',['mobilBaru'=>$mobilBaru]);
    }

    public function listMobilBekas(Request $request)
    {

        $cari = $request->cari;
        // dd($cari);
        // $mobilBaru = DataMobilBaru::with(['dealer','pintu','kursi'])

        $mobilBekas = PengajualJualModel::where('status','=','Diterima')
        ->paginate(6);


        return view('Customer.list-mobil-bekas',['mobilBekas'=>$mobilBekas]);
    }

    public function listMobilBekasTidakLogin(Request $request)
    {

        $cari = $request->cari;
        // dd($cari);
        // $mobilBaru = DataMobilBaru::with(['dealer','pintu','kursi'])

        $mobilBekas = PengajualJualModel::where('status','=','Diterima')
        ->paginate(6);


        return view('Customer.list-mobil-bekasTidakLogin',['mobilBekas'=>$mobilBekas]);
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

    public function penjualanViewTidakLogin()
    {
        // $mobilBaru = DataMobilBaru::with('dealer')->get();
        $dealer = dealerModel::select('id_dealer','nama_dealer')->get();
        $kursi = KursiMobilModel::select('id_kursi','jumlah')->get();
        $pintu = PintuMobilModel::select('id_pintu','jumlah')->get();

        return view('Customer.pengajuanPenjualanTidakLogin',['dealer'=>$dealer,'pintu'=>$pintu,'kursi'=>$kursi,]);
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

        Session::flash('status','success');
        Session::flash('msg','Berhasil Diajukan !');

        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $PengajuanJual=PengajualJualModel::create($request->all());

        return redirect()->to('/pengajuan-jual');
    }


    public function BeliMobilBaru($id)
    {
        $detailmobilBaru = DataMobilBaru::with(['dealer','pintu','kursi'])->find($id);
        $hargaMobil = $detailmobilBaru->harga;

        //5 Tahun bunga = 8% = 0.6% / bulan
        //4 Tahun bunga = 7% = 0.58% / bulan
        //3 Tahun bunga = 6% = 0.5% / bulan
        //2 Tahun bunga = 5% = 0.41% / bulan
        //1 Tahun bunga = 4% = 0.33% / bulan

        $bunga5th = 0.6;
        $bunga4th = 0.58;
        $bunga3th = 0.5;
        $bunga2th = 0.41;
        $bunga1th = 0.33;


        $dp = $hargaMobil * 0.2;
        $sisaBayar = $hargaMobil - $dp;

        //5 tahun
        $angsuran60Bulan = $sisaBayar / 60;
        $bunga60bulan = $sisaBayar * $bunga5th /12;
        $bulanan5th = $angsuran60Bulan + $bunga60bulan ;

        //4Tahun
        $angsuran48Bulan = $sisaBayar / 48;
        $bunga48bulan = $sisaBayar * $bunga4th /12;
        $bulanan4th = $angsuran48Bulan + $bunga48bulan ;

        //3Tahun
        $angsuran36Bulan = $sisaBayar / 36;
        $bunga36bulan = $sisaBayar * $bunga3th /12;
        $bulanan3th = $angsuran36Bulan + $bunga36bulan ;

        //2Tahun
        $angsuran24Bulan = $sisaBayar / 24;
        $bunga24bulan = $sisaBayar * $bunga2th /12;
        $bulanan2th = $angsuran24Bulan + $bunga24bulan ;

        //1Tahun
        $angsuran12Bulan = $sisaBayar / 12;
        $bunga12bulan = $sisaBayar * $bunga1th /12 ;
        $bulanan1th = $angsuran12Bulan + $bunga12bulan ;






        return view('Customer.beliMobilBaru',[
        'detailMobilBaru'=>$detailmobilBaru,
        'tenor5'=>$bulanan5th,
        'tenor4'=>$bulanan4th,
        'tenor3'=>$bulanan3th,
        'tenor2'=>$bulanan2th,
        'tenor1'=>$bulanan1th,
        'dp'=>$dp
    ]);

    }

    public function Kalkulasi(Request $request)
    {
        $kalkulasi = new Kalkulasi();

        $kalkulasi->nama_dealer = $request->merk;
        $kalkulasi->nama_mobil = $request->mobil;
        $kalkulasi->jumlah_pintu = $request->pintu;
        $kalkulasi->jumlah_kursi = $request->kursi;
        $kalkulasi->kategori = $request->kategori;
        $kalkulasi->harga = $request->harga;
        $kalkulasi->foto = $request->foto;
        $kalkulasi->dp = $request->dp;
        $kalkulasi->tenor = $request->tenor;
        $kalkulasi->cicilan = $request->cicilan;
        $kalkulasi->bunga = $request->bunga;
        $kalkulasi->nama_lengkap = $request->lengkap;
        $kalkulasi->email = $request->email;
        $kalkulasi->no_hp = $request->no_hp;
        $kalkulasi->status = "Pending";


        $kalkulasi->save();



        Session::flash('status','success');
        Session::flash('msg','Berhasil Diajukan !');
        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $PengajuanJual=PengajualJualModel::create($request->all());

        return redirect()->to('/list-mobil');
    }


    public function BeliMobilBekas($id)
    {
        $detailmobilBekas = PengajualJualModel::with(['dealer','pintu','kursi'])->find($id);
        $hargaMobil = $detailmobilBekas->harga;

        //5 Tahun bunga = 8% = 0.6% / bulan
        //4 Tahun bunga = 7% = 0.58% / bulan
        //3 Tahun bunga = 6% = 0.5% / bulan
        //2 Tahun bunga = 5% = 0.41% / bulan
        //1 Tahun bunga = 4% = 0.33% / bulan

        $bunga5th = 0.6;
        $bunga4th = 0.58;
        $bunga3th = 0.5;
        $bunga2th = 0.41;
        $bunga1th = 0.33;


        $dp = $hargaMobil * 0.2;
        $sisaBayar = $hargaMobil - $dp;

        //5 tahun
        $angsuran60Bulan = $sisaBayar / 60;
        $bunga60bulan = $sisaBayar * $bunga5th /12;
        $bulanan5th = $angsuran60Bulan + $bunga60bulan ;

        //4Tahun
        $angsuran48Bulan = $sisaBayar / 48;
        $bunga48bulan = $sisaBayar * $bunga4th /12;
        $bulanan4th = $angsuran48Bulan + $bunga48bulan ;

        //3Tahun
        $angsuran36Bulan = $sisaBayar / 36;
        $bunga36bulan = $sisaBayar * $bunga3th /12;
        $bulanan3th = $angsuran36Bulan + $bunga36bulan ;

        //2Tahun
        $angsuran24Bulan = $sisaBayar / 24;
        $bunga24bulan = $sisaBayar * $bunga2th /12;
        $bulanan2th = $angsuran24Bulan + $bunga24bulan ;

        //1Tahun
        $angsuran12Bulan = $sisaBayar / 12;
        $bunga12bulan = $sisaBayar * $bunga1th /12 ;
        $bulanan1th = $angsuran12Bulan + $bunga12bulan ;






        return view('Customer.beliMobilBekas',[
        'detailMobilBekas'=>$detailmobilBekas,
        'tenor5'=>$bulanan5th,
        'tenor4'=>$bulanan4th,
        'tenor3'=>$bulanan3th,
        'tenor2'=>$bulanan2th,
        'tenor1'=>$bulanan1th,
        'dp'=>$dp
    ]);

    }

    public function KalkulasiBekas(Request $request)
    {
        $kalkulasi = new KalkulasiBekas();

        $kalkulasi->nama_dealer = $request->merk;
        $kalkulasi->nama_mobil = $request->mobil;
        $kalkulasi->jumlah_pintu = $request->pintu;
        $kalkulasi->jumlah_kursi = $request->kursi;
        $kalkulasi->kategori = $request->kategori;
        $kalkulasi->plat = $request->plat;
        $kalkulasi->lokasi = $request->lokasi;
        $kalkulasi->nama_stnk = $request->stnk;
        $kalkulasi->masa_stnk = $request->masa;
        $kalkulasi->tahun_mobil = $request->tahun;
        $kalkulasi->harga = $request->harga;
        $kalkulasi->foto = $request->foto;
        $kalkulasi->dp = $request->dp;
        $kalkulasi->tenor = $request->tenor;
        $kalkulasi->cicilan = $request->cicilan;
        $kalkulasi->bunga = $request->bunga;
        $kalkulasi->nama_lengkap = $request->lengkap;
        $kalkulasi->email = $request->email;
        $kalkulasi->no_hp = $request->no_hp;
        $kalkulasi->status = "Pending";


        $kalkulasi->save();

        Session::flash('status','success');
        Session::flash('msg','Berhasil Diajukan !');
        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $PengajuanJual=PengajualJualModel::create($request->all());

        return redirect()->to('/list-mobil-bekas');
    }

    public function ProsesPengajuanBeliMobilBaru()
    {
        $email = Auth::user()->email;




        $baruSelesai = Kalkulasi::where('status','!=','Pending')
        ->where('email','LIKE','%'.$email.'%' )
        ->paginate(5);
        $baru = Kalkulasi::where('status','=','Pending','AND','email','=',$email)
        ->where('email','LIKE','%'.$email.'%' )
        ->paginate(5);


        // dd($SelectEmail);

        return view('Customer.prosesPengajuanBeliMobilBaru',['baruSelesai'=>$baruSelesai,'baru'=>$baru]);
    }

    public function ProsesPengajuanBeliMobilBekas()
    {
        $email = Auth::user()->email;
        $bekasSelesai = KalkulasiBekas::where('status','!=','Pending')
        ->where('email','LIKE','%'.$email.'%' )
        ->paginate(5);

        $bekas = KalkulasiBekas::where('status','=','Pending')
        ->where('email','LIKE','%'.$email.'%' )
        ->paginate(5);

        return view('Customer.prosesPengajuanBeliMobilBekas',['bekasSelesai'=>$bekasSelesai,'bekas'=>$bekas]);
    }

}
