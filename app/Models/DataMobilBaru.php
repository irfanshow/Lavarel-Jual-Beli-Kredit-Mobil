<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMobilBaru extends Model
{
    use HasFactory;

    protected $table = 'data_mobil_baru';
    protected $primaryKey = 'id_mobil';
    // protected $fillable = [
    //     'id_dealer',
    //     'nama',
    //    ' kategori',
    //     'deskripsi',
    //     'harga '


    // ];

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
}
