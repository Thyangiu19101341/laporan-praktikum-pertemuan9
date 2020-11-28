<?php

namespace App\Http\Controllers;

use IIIuminate\Http\Request;
use DB;

class prak9controller extends Controller
{
    //Menampilkan jumlah data: count()
    public fuction QB_tugas1(){
        $JRekproduk = DB::table('produks')->count();
        $JRekkategori = DB::table('kategori')->count();

        return view('praktikum9.tugas1', ['JRekproduk'=>$JRekproduk,'JRekkategori'=>$JRekkategori] );
    }
}