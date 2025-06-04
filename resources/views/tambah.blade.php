@extends('template')

@section('content')
	<h3>Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

   <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="nama">Nama</label>
            <div class="col-sm-6">
            <input class="form-control" type="text" id="nama"
                   placeholder="Masukkan Nama">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="jabatan">Jabatan</label>
            <div class="col-sm-6">
            <input class="form-control" type="text" id="jabatan"
                   placeholder="Masukkan Jabatan">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="umur">Umur</label>
            <div class="col-sm-6">
            <input class="form-control" type="number" id="umur"
                   placeholder="Masukkan Umur">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="nama">Alamat</label>
            <div class="col-sm-6">
            <textarea class="form-control" type="text" id="alamat"
                   placeholder="Masukkan Alamat Lengkap"></textarea>
            </div>
        </div>


{{--
		Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/> --}}

		<input type="submit" value="Simpan Data" class="btn btn-success mt-2">
	</form>

@endsection
