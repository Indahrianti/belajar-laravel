<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function tampilkan(){

        $brg = Barang::all();
        return view('barang', compact('brg'));
    }
}
