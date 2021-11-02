<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
      public function data_pembelian(){

        $query = Pembelian::all();
        return view('pembelian', compact('query'));
    }
}
