@extends('template')

@section('content')
	<h3>Sepeda Motor</h3>
    <h2>Sepeda Motor</h2>

	<a href="/sepedamotor/tambahmotor" class="btn btn-primary"> + Tambah Motor Baru</a>

    <p>Cari Data Motor :</p>
    <form action="/sepedamotor/carimotor" method="GET">
        <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
    </form>

	<br/>

	<table class="table table-striped">
		<tr>
			<th>Merek</th>
			<th>Harga</th>
			<th>Tersedia?</th>
			<th>Berat</th>
		</tr>
		@foreach($sepedamotor as $p)
		<tr>
			<td>{{ $p->merksepedamotor }}</td>
			<td>{{ $p->hargasepedamotor }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>{{ $p->berat }}</td>
			<td>
				<a href="/sepedamotor/edit/{{ $p->id }}" class="btn btn-success">Edit Motor</a>
				<a href="/sepedamotor/hapus/{{ $p->id }}" class="btn btn-danger">Hapus Motor</a>
			</td>
		</tr>
		@endforeach
	</table>
{{ $sepedamotor->links() }}

@endsection
