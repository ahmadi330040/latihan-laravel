<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form(){
        return view('form');
    }

    public function sapa(Request $request){
        //var_dump($request);
        //dd($request['alamat']);
        return "Halo";
    }

    public function sapa_post(Request $request){
        //dd($request->all());
        $nama = $request["nama"];
        $nama_akhir = $request["nama_akhir"];
        return "$nama" . " $nama_akhir";
    }

    public function signup(){
        return view('signup');
    }
}
