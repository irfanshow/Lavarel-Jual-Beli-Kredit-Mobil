<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jual_mobil;

class JualMobilController extends Controller
{
    public function index()
    {
        $mobil = Jual_mobil::all();

        return view('home',['mobil' => $mobil]);
    }
}
