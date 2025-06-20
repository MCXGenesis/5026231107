@extends('template')

@section('content')
    <h3>Tambah New Karyawan</h3>

    <br/>
    <br/>

    <form action="/eas/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="NIP">NIP</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="NIP" name="NIP"
                       placeholder="NIP Karyawan Baru" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="nama">Nama</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="harga" name="nama"
                       placeholder="John Doe" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="pangkat">Pangkat</label>
            <div class="col-sm-6">
                 <input class="form-control" type="text" id="pangkat" name="pangkat"
                       placeholder="Pegawai Baru" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="gaji">Gaji</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="gaji" name="gaji"
                       placeholder="Rp." required>
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success mt-2">
    </form>

@endsection
