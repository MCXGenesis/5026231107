@extends('template')

@section('content')
    <h3>Data Sepeda Motor</h3>

    <a href="/sepedamotor" class="btn btn-info"> Kembali</a>

    <br/>
    <br/>

    <form action="/sepedamotor/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="merk">Merek</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="merk" name="merk"
                       placeholder="Merek motormu" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="harga">Harga</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="harga" name="harga"
                       placeholder="Harga motormu" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="tersedia">Tersedia</label>
            <div class="col-sm-6">
                <input class="form-check-input" type="checkbox" id="tersedia" name="tersedia" value="1">
                <label class="form-check-label" for="tersedia">Ketersediaan motormu</label>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="berat">Berat</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="berat" name="berat"
                       placeholder="Berat motormu" required>
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success mt-2">
    </form>

@endsection
