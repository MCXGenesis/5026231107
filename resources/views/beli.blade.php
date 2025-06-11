@extends('template')

@section('content')
    <h3 class="text-center">Tambah Keranjang</h3>

    <form method="POST" action="/keranjangbelanja/store" class="col-md-6 mx-auto">
        @csrf
        <div class="form-group">
            <label for="ID">Kode Pembelian</label>
            <input type="number" name="ID" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="KodeBarang">Kode Barang</label>
            <input type="text" name="KodeBarang" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Jumlah">Jumlah Pembelian</label>
            <input type="number" id="Jumlah" name="Jumlah" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Harga">Harga per item</label>
            <input type="number" id="Harga" name="Harga" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input type="number" id="total" name="total" class="form-control" readonly required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>

    <a href="/keranjangbelanja" class="btn btn-secondary mt-3">Kembali</a>

    <script>
        const jumlahInput = document.getElementById('jumlah');
        const hargaInput = document.getElementById('harga');
        const totalInput = document.getElementById('total');

        function hitungTotal() {
            const jumlah = parseInt(jumlahInput.value) || 0;
            const harga = parseInt(hargaInput.value) || 0;
            totalInput.value = jumlah * harga;
        }

        jumlahInput.addEventListener('input', hitungTotal);
        hargaInput.addEventListener('input', hitungTotal);
    </script>
@endsection
