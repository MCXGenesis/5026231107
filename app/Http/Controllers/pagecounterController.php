<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class pagecounterController extends Controller
{
public function show()
    {
        // increment
        DB::table('pagecounter')->where('id', 1)->increment('jumlah');

        //update
        $jumlah = DB::table('pagecounter')->where('id', 1)->value('jumlah');

        // view
        return view('pagecounter', ['jumlah' => $jumlah]);
    }

}

#un
