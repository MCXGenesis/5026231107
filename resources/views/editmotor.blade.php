<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Motor</title>
</head>
<body>

	<h3>Edit Motor</h3>

	<a href="/sepedamotor"> Kembali</a>

	<br/>
	<br/>

	@foreach($sepedamotor as $motor)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $motor->id }}"> <br/>
		Merk <input type="text" required="required" name="merk" value="{{ $motor->merksepedamotor }}"> <br/>
		Harga <input type="number" required="required" name="harga" value="{{ $motor->hargasepedamotor }}"> <br/>
		Tersedia <input type="boolean" required="required" name="tersedia" value="{{ $motor->tersedia }}"> <br/>
		Berat <input type="number" required="required" name="berat" value="{{ $motor->berat }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
