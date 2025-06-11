<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(10);
        return view('keranjangbelanja', ['keranjangbelanja' => $keranjangbelanja]);
    }

    public function beli()
    {
        return view('beli');
    }

    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'ID'=> $request->ID,
            'KodeBarang'=> $request->KodeBarang,
            'Jumlah'=> $request->Jumlah,
            'Harga' => $request->Harga
            // 'total' => $request->total,
        ]);

        return redirect('/keranjangbelanja')->with('success', 'Data berhasil ditambahkan!');
    }

    public function hapus($ID)
    {
        DB::table('keranjangbelanja')->where('id', $ID)->delete();
        return redirect('/keranjangbelanja')->with('success', 'Data berhasil dihapus!');
    }
}
