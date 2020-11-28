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

    public function QB_Tugas2(){
        $id_kat = 3;
        $pData = DB::table('produks')->where('id_kat',$id_kat)->get();
        $JRek = DB::table('produks')->('id_kat',$id_kat)->count();

        return view('praktikum9.tugas2',compact('PData','JRek','id_kat') );
    }
}