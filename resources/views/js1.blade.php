
<html>
    <head>
        <title>

        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">
        	function hello() 
            {
        		alert("Lokasi baru: Jawirkarta, Ngawi, Bogor, Jomokerto, Pornorogo, Balikpantat, Silitiga");
        	}

            function tambah()
            {
                let bilangan1 = document.getElementById("bil1").value;
                let bilangan2 = document.getElementById("bil2").value;
                let hasil = Number.parseInt(bilangan1 + bilangan2);

                document.getElementById("hasil").innerHTML = hasil;
            }
        </script>
    </head>


    <body>
        <div class="container">
        	<button class="btn btn-primary" onclick="hello()">Klik Disini</button>
            <p>
                Bilangan pertama:
                <input type="number" class="form-control" id="bil1" value="0">
                <br>
                Bilangan kedua:
                <input type="number" class="form-control" id="bil2" value="0">
                <br>
                Hasil penjumlahan
                <div id="hasil">
                    
                </div>
                <br>
                <button class="btn btn-success" onclick="tambah();">Tambah</button>
            </p>
            
        </div>
    </body>
</html>


