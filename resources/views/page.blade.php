<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage Teknisi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            max-width: 500px;
            margin: 0 auto;
        }

        .logo {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
        }

        .equipment-image {
            height: 70px;
            object-fit: contain;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            margin-right: 4px;
        }

        .status-dot.red {
            background-color: #dc3545;
        }

        .status-dot.green {
            background-color: #28a745;
        }

        .check-button {
            background-color: #e2e2e2;
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
            font-size: 16px;
            width: 75%;
            margin: 15px auto;
            color: #000;
        }
    </style>
</head>
<body>
    <!-- Logo Section -->
    <div class="d-flex align-items-center bg-white border-bottom py-3 px-3">
        <div class="logo">
            <img src="materialC/Logo CekDong 1.png" alt="CekDong Logo" class="img-fluid">
        </div>
        
    </div>

    <h4 class="mb-0 ml-3"><strong>HomePage Teknisi</strong></h4>

    <!-- Equipment Section -->
    <div class="container mt-4">
        <h5 class="text-center font-weight-bold mb-3">ALAT YANG SEDANG DISEWA</h5>
        <div class="row">
            <div class="col-6 col-md-4 mb-3">
                <div class="card p-2">
                    <img src="materialC/EOS4000D.png" alt="SONY Cinema Line" class="equipment-image card-img-top">
                    <div class="card-body p-2">
                        <h6 class="card-title text-center mb-1">SONY Cinema Line</h6>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="status-dot red"></div>
                            <small>Dipinjam, kembali pada 10/12/24</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 mb-3">
                <div class="card p-2">
                    <img src="materialC/EOS4000D.png" alt="Nikon D7500" class="equipment-image card-img-top">
                    <div class="card-body p-2">
                        <h6 class="card-title text-center mb-1">Nikon D7500</h6>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="status-dot red"></div>
                            <small>Dipinjam, kembali pada 12/12/24</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 mb-3">
                <div class="card p-2">
                    <img src="materialC/EOS4000D.png" alt="Canon EOS 80D" class="equipment-image card-img-top">
                    <div class="card-body p-2">
                        <h6 class="card-title text-center mb-1">Canon EOS 80D</h6>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="status-dot red"></div>
                            <small>Dipinjam, kembali pada 15/12/24</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Approval Section -->
    <div class="container mt-4">
        <h5 class="text-center font-weight-bold mb-3">MENUNGGU PERSETUJUAN</h5>
        <div class="row">
            <div class="col-6 col-md-4 mb-3">
                <div class="card p-2">
                    <img src="materialC/EOS4000D.png" alt="Nikon D7500" class="equipment-image card-img-top">
                    <div class="card-body p-2">
                        <h6 class="card-title text-center mb-1">Nikon D7500</h6>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="status-dot green"></div>
                            <small>Diajukan pada 2/12/24</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 mb-3">
                <div class="card p-2">
                    <img src="materialC/EOS4000D.png" alt="Canon Lens EFS 18-135mm" class="equipment-image card-img-top">
                    <div class="card-body p-2">
                        <h6 class="card-title text-center mb-1">Canon Lens EFS 18-135mm</h6>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="status-dot green"></div>
                            <small>Diajukan pada 2/12/24</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 mb-3">
                <div class="card p-2">
                    <img src="materialC/EOS4000D.png" alt="Sony PXW-Z90T XDCAM camcorder" class="equipment-image card-img-top">
                    <div class="card-body p-2">
                        <h6 class="card-title text-center mb-1">Sony PXW-Z90T XDCAM camcorder</h6>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="status-dot green"></div>
                            <small>Diajukan pada 2/12/24</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 mb-3">
                <div class="card p-2">
                    <img src="materialC/EOS4000D.png" alt="Canon EOS 4000D" class="equipment-image card-img-top">
                    <div class="card-body p-2">
                        <h6 class="card-title text-center mb-1">Canon EOS 4000D</h6>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="status-dot green"></div>
                            <small>Diajukan pada 2/12/24</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 mb-3">
                <div class="card p-2">
                    <img src="materialC/insta mini11.png" alt="Instax mini11" class="equipment-image card-img-top">
                    <div class="card-body p-2">
                        <h6 class="card-title text-center mb-1">Instax mini11</h6>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="status-dot green"></div>
                            <small>Diajukan pada 2/12/24</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 mb-3">
                <div class="card p-2">
                    <img src="materialC/instax slim-go.png" alt="Instax slim-go" class="equipment-image card-img-top">
                    <div class="card-body p-2">
                        <h6 class="card-title text-center mb-1">Instax slim-go</h6>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="status-dot green"></div>
                            <small>Diajukan pada 2/12/24</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 mb-3">
                <div class="card p-2">
                    <img src="materialC/Canon EOS 80D.png" alt="Canon EOS 80D" class="equipment-image card-img-top">
                    <div class="card-body p-2">
                        <h6 class="card-title text-center mb-1">Canon EOS 80D</h6>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="status-dot green"></div>
                            <small>Diajukan pada 2/12/24</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 mb-3">
                <div class="card p-2">
                    <img src="materialC/Sony Zeiss.png" alt="Sony Zeiss" class="equipment-image card-img-top">
                    <div class="card-body p-2">
                        <h6 class="card-title text-center mb-1">Sony Zeiss</h6>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="status-dot green"></div>
                            <small>Diajukan pada 2/12/24</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>