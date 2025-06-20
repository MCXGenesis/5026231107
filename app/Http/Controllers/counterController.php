<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class counterController extends Controller
{
    //
    public function counter(){

        DB::table('counter')->where('ID',1)->increment('Jumlah');

        $Jumlah = DB::table('counter')->where('ID',1)->value('Jumlah');

        return view('counter', ['Jumlah'=>$Jumlah]);
    }
}
