<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class sepedamotorDBCont extends Controller
{
        public function indexsepedamotor(){
        $motor = DB::table('sepedamotor')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('indexsepedamotor',['sepedamotor' => $motor]);
    }

    public function tambah(){
            return view('tambahmotor');
    }

    public function store(Request $request){
        DB::table('sepedamotor')->insert([
            'merksepedamotor' => $request->merk,
            'hargasepedamotor' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/sepedamotor');
    }

    function edit($id) { //tidak pake $request karena ada primary key
        // ambil data pegawai dari id dipilih
        $sepedamotor = DB::table('sepedamotor') //only =
            ->where('id',$id)
            ->get();
        // passing data pegawai ke view edit
        return view('editmotor',['sepedamotor'=>$sepedamotor]);
    }

    public function update(Request $request){
        DB::table('sepedamotor')->where('id',$request->id)->update([
            'merksepedamotor' => $request->merk,
            'hargasepedamotor' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/sepedamotor');
    }

    public function hapus($id){
        DB::table('sepedamotor')->where('id',$id)->delete();
        return redirect('/sepedamotor');
    }

    public function cari(Request $request){
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $motor = DB::table('sepedamotor')
        ->where('merksepedamotor','like',"%".$cari."%")
        ->paginate();

            // mengirim data pegawai ke view index
        return view('sepedamotor',['sepedamotor' => $motor]);
    }
}
