<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class newkaryawanController extends Controller
{
    // index
    public function index()
    {
        // mengambil data dari table newkaryawan
        $karyawan = DB::table('newkaryawan');

        // mengirim data newkaryawan ke view index
        return view('indexNewKaryawan', ['newkaryawan' => $karyawan]);
    }

    // tambah
    public function tambah()
    {
        // memanggil view tambah
        return view('tambahNewKaryawan');
    }

    // store
    public function store(Request $request)
    {
        // insert data ke table karyawan
        DB::table('newkaryawan')->insert([
            'NIP' => $request->NIP,
            'nama' => $request->nama,
            'pangkat' => $request->pangkat,
            'gaji' => $request->gaji,
        ]);
        // alihkan halaman ke halaman karyawan
        return redirect('/eas');
    }

    // hapus
    public function hapus($nk)
    {
        // menghapus data karyawan berdasarkan kodepegawai yang dipilih
        DB::table('newkaryawan')->where('NIP', $nk)->delete();

        // alihkan halaman ke halaman karyawan
        return redirect('/eas');
    }


}
