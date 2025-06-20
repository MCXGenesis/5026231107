<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class karyawanController extends Controller
{
    public function index()
    {
        // mengambil data dari table karyawan
        $mhs = DB::table('mahasiswa');

        // mengirim data karyawan ke view index
        return view('mhs', ['mhs' => $mhs]);
    }

    // method untuk menampilkan view form tambah karyawan
    public function tambah()
    {
        // memanggil view tambah
        return view('tambahmhs');
    }

    // method untuk insert data ke table karyawan
    public function store(Request $request)
    {
        // insert data ke table karyawan
        DB::table('mahasiswa')->insert([
            'NRP' => $request->kodepegawai,
            'Nama' => $request->namalengkap,
            'Jurusan' => $request->divisi,
            'IPK' => $request->departemen,
        ]);
        // alihkan halaman ke halaman karyawan
        return redirect('/mhs');
    }

    // method untuk edit data karyawan
    public function edit($nrp)
    {
        // mengambil data karyawan berdasarkan kodepegawai yang dipilih
        $mahasiswa = DB::table('mhs')->where('NRP', $nrp)->get();
        // passing data karyawan yang didapat ke view editkaryawan.blade.php
        return view('editmhs', ['mahasiswa' => $mahsiswa]);
    }

    // update data karyawan
    public function update(Request $request)
    {
        // update data karyawan
        DB::table('mhs')->where('NRP', $request->nrp)->update([
            'Nama' => $request->nama,
            'Jurusan' => $request->jurusan,
            'IPK' => $request->ipk,
        ]);
        // alihkan halaman ke halaman karyawan
        return redirect('/mhs');
    }

    // method untuk hapus data karyawan
    public function hapus($nrp)
    {
        // menghapus data karyawan berdasarkan kodepegawai yang dipilih
        DB::table('mhs')->where('NRP', $nrp)->delete();

        // alihkan halaman ke halaman karyawan
        return redirect('/mhs');
    }

    // method untuk mencari karyawan
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table karyawan sesuai pencarian data
        $mhs = DB::table('mhs')
            ->where('Nama', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data karyawan ke view index
        return view('mhs', ['mhs' => $mhs]);
    }
}
