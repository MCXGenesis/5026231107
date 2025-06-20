@extends('template')

@section('content')
    <h3 class="text-center">New Karyawan</h3>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered mt-2">
            <thead class="table-dark">
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Pangkat</th>
                    <th>gaji</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($newkaryawan as $k)
                    <tr>
                        <td>{{ $k->NIP }}</td>
                        <td>{{ $k->nama }}</td>
                        <td>{{ $k->pangkat }}</td>
                        <td>{{ $k->gaji }}</td>
                        <td>
                        <a href="/eas/tambah" class="btn btn-success btn-sm">Tambah</a>
                        <a href="/eas/hapus{{ $k->NIP }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $keranjangbelanja->links() }}
    </div>
@endsection
