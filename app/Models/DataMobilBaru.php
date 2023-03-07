<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMobilBaru extends Model
{
    use HasFactory;

    protected $table = 'data_mobil_baru';
    protected $primaryKey = 'id_mobil';
    protected $fillable = [
        'id_dealer',
        'nama',
       ' kategori',
        'deskripsi',
        'harga '


    ];

    public $timestamps = false;
}
