<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Frontend</title>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <style>
        body{
            background: linear-gradient(to bottom, #2c2c2c, #000);
            min-height: 100vh;
            color: white;
            margin: 0;
            padding: 0;
            font-family: DM Sans, sans-serif;
        }

        h1 {
            font-size: 64px;
            font-weight: 900;
        }

        a, h2 {
            font-size: 20px;
        }

        header {
            width: 95%;
            max-width: 788px;
            max-height: 56px;
            display: flex;
            justify-content: flex-end;
            padding: 12px;
            margin-top: 12px;
        }

        .card {
            border: solid #fff;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 999px;
        }

        .card:hover {
            background-color: transparent;
            color: white;
        }

        .card-body {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            color: grey;
        }

        .card-body:hover {
            color: white;
        }

        .menu-icon {
            width: 25px;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .menu-icon:hover {
            background-color: #404040;
            border-radius: 50%;
        }


    </style>
    </head>

    <body class="d-flex flex-column min-vh-100">
        <div class="container mb-2">
                {{-- <img src="https://instagram.fsub8-2.fna.fbcdn.net/v/t51.2885-19/358520762_255817770490169_1330118377513832392_n.jpg?stp=dst-jpg_s150x150_tt6&_nc_ht=instagram.fsub8-2.fna.fbcdn.net&_nc_cat=105&_nc_oc=Q6cZ2QE2rwCptdTd2uKEMacI8jb-fMJVYkt4Ek52PbkamOEKtgEW7pZewvKG3pNjIVEC4QE&_nc_ohc=A9rk47tHDNsQ7kNvwElxlu4&_nc_gid=bGOq5zba10eW_JYRBG4Ttw&edm=AP4sbd4BAAAA&ccb=7-5&oh=00_AfLjnPR3yVQ1Iby5IUhQUqyfX0NUqAq3VSbbY7kreehKFA&oe=683294B1&_nc_sid=7a9f4b"> --}}
                <div class="container mt-2 mb-2">
                    <p>Verified Student</p>
                    <h1 class="mt-3"><strong>Naufal Maula Nabil</strong></h1>
                    <h2><strong>5026231107</strong></h2>
                </div>
            </div>



            <div class="container">
                <div class="card col-lg-6 mb-2 rounded-0">
                  <div class="card-body d-flex align-items-center justify-content-between">

                    <!-- Text -->
                    <a href="index" class="flex-grow-1 text-center text-decoration-none" style="color: gray;">
                      ETS
                    </a>

                    </div>
                </div>
                <div class="card col-lg-6 mb-2 rounded-0">
                  <div class="card-body d-flex align-items-center justify-content-between">

                    <!-- Text -->
                    <a href="linktree" class="flex-grow-1 text-center text-decoration-none" style="color: gray;">
                      Linktree
                    </a>

                    </div>
                </div>
                <div class="card col-lg-6 mb-2 rounded-0">
                  <div class="card-body d-flex align-items-center justify-content-between">

                    <!-- Text -->
                    <a href="pertama" class="flex-grow-1 text-center text-decoration-none" style="color: gray;">
                      Pertama
                    </a>

                    </div>
                </div>
                <div class="card col-lg-6 mb-2 rounded-0">
                  <div class="card-body d-flex align-items-center justify-content-between">

                    <!-- Text -->
                    <a href="js1" class="flex-grow-1 text-center text-decoration-none" style="color: gray;">
                      JS1
                    </a>

                    </div>
                </div>
                <div class="card col-lg-6 mb-2 rounded-0">
                  <div class="card-body d-flex align-items-center justify-content-between">

                    <!-- Text -->
                    <a href="js2" class="flex-grow-1 text-center text-decoration-none" style="color: gray;">
                      JS2
                    </a>

                    </div>
                </div>
                <div class="card col-lg-6 mb-2 rounded-0">
                  <div class="card-body d-flex align-items-center justify-content-between">

                    <!-- Text -->
                    <a href="bootstrap1" class="flex-grow-1 text-center text-decoration-none" style="color: gray;">
                      BS1
                    </a>

                    </div>
                </div>
                <div class="card col-lg-6 mb-2 rounded-0">
                  <div class="card-body d-flex align-items-center justify-content-between">

                    <!-- Text -->
                    <a href="bootstrap2" class="flex-grow-1 text-center text-decoration-none" style="color: gray;">
                      BS2
                    </a>

                    </div>
                </div>
                <div class="card col-lg-6 mb-2 rounded-0">
                  <div class="card-body d-flex align-items-center justify-content-between">

                    <!-- Text -->
                    <a href="blog" class="flex-grow-1 text-center text-decoration-none" style="color: gray;">
                      Blog
                    </a>

                    </div>
                </div>
                <div class="card col-lg-6 mb-2 rounded-0">
                  <div class="card-body d-flex align-items-center justify-content-between">

                    <!-- Text -->
                    <a href="bahanbelajar" class="flex-grow-1 text-center text-decoration-none" style="color: gray;">
                      Gabut1
                    </a>

                    </div>
                </div>
            </div>
    </body>
</html>
