<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
      public function data_pembeli(){

        $pem = Pembeli::all();
        return view('pembeli', compact('pem'));
    }
}
