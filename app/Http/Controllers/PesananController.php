<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    //
     public function data_pesanan(){

        $query = Pesanan::all();
        return view('pesanan', compact('query'));
    }
}
