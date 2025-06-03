<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TryController extends Controller
{
    //
    public function helloWorld(){
        return view('blog');
    }

    public function index(){
        $nama = "Diki Alfarabi Hadi";
        $umur = 25;
        $alamat = "Surabaya";
        return view('biodata',['nama' => $nama, 'usia' => $umur, 'alamat' => $alamat]);

    }

}
