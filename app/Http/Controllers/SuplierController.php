<?php

namespace App\Http\Controllers;

use App\Models\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
     public function data_suplier(){

        $query = suplier::all();
        return view('suplier', compact('query'));
    }
}
