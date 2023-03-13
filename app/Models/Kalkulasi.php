<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kalkulasi extends Model
{
    use HasFactory;

    protected $table = 'kalkulasi_pembayaran';
    protected $primaryKey = 'id_kalkulasi';
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
