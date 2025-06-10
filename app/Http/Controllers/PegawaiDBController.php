<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiDBController extends Controller
{
    //
    public function indexpegawai(){
// mengambil data dari table pegawai, get and paginate cant work together`
    	// $pegawai = DB::table('pegawai')->get();
        $pegawai = DB::table('pegawai')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('indexpegawai',['pegawai' => $pegawai]);
    }

    public function tambah(){
            return view('tambah');
    }

    public function store(Request $request){
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        return redirect('/pegawai');
    }

    function edit($id) { //tidak pake $request karena ada primary key
        // ambil data pegawai dari id dipilih
        $pegawai= DB::table('pegawai') //only =
            ->where('pegawai_id',$id)
            ->get();
        // passing data pegawai ke view edit
        return view('edit',['pegawai'=>$pegawai]);
    }

    public function update(Request $request){
        DB::table('pegawai')->where('pegawai_id',$request->id)->update([
            'pegawai_nama'=>$request->nama,
            'pegawai_jabatan'=>$request->jabatan,
            'pegawai_umur'=>$request->umur,
            'pegawai_alamat'=>$request->alamat
        ]);
        return redirect('/pegawai');
    }

    public function hapus($id){
        DB::table('pegawai')->where('pegawai_id',$id)->delete();
        return redirect('/pegawai');
    }

    public function cari(Request $request){
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $pegawai = DB::table('pegawai')
        ->where('pegawai_nama','like',"%".$cari."%")
        ->paginate();

            // mengirim data pegawai ke view index
        return view('indexpegawai',['pegawai' => $pegawai]);
    }

    // public function proses(Request $request)
    // {
    //     $this->validate($request,[
    //        'nama' => 'required|min:5|max:20',
    //        'pekerjaan' => 'required',
    //        'usia' => 'required|numeric'
    //     ]);

    //     return view('proses',['data' => $request]);
    // }
}
