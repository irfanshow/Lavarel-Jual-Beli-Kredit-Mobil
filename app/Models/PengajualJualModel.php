<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajualJualModel extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_jual_mobil';
    protected $primaryKey = 'id_pengajuan_jual';
    public $timestamps = false;


    public function dealer() {
        return $this->belongsto(dealerModel::class,'id_dealer','id_dealer');
    }

    public function pintu() {
        return $this->belongsto(PintuMobilModel::class,'id_pintu','id_pintu');
    }

    public function kursi() {
        return $this->belongsto(KursiMobilModel::class,'id_kursi','id_kursi');
    }

    // protected $fillable = [
    //     'id_dealer',
    //     'nama_mobil',
    //     'id_kursi',
    //     'id_pintu',
    //     'kategori',
    //     'tahun_mobil',
    //     'harga',
    //     'nama_stnk',
    //     'masa_stnk',
    //     'plat',
    //     'lokasi',
    //     'nama',
    //     'email',
    //     'no_hp',
    //     'foto',
    //     'status'


    // ];


}
