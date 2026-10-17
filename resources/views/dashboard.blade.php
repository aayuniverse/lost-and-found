<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temu Barang</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #17365f;
            background-image: url("{{ asset('images/background-batik.png') }}");
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* HEADER */
        .header {
            width: 100%;
            height: 160px;
            padding: 15px 4%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(
                110deg,
                #203e91 0%,
                #18336f 48%,
                #102e50 100%
            );
            border-radius: 0 0 24px 24px;
        }

        .brand {
            display: flex;
            align-items: center;
        }

        /* Logo sudah mencakup lambang dan tulisan Temu Barang */
        .brand img {
            display: block;
            width: 220px;
            height: 125px;
            object-fit: contain;
            object-position: left center;
        }

        .logout {
            padding: 7px 22px;
            color: #fff;
            font-size: 27px;
            font-weight: 400;
            background: rgba(255, 255, 255, .20);
            border: 3px solid #dce4f5;
            border-radius: 25px;
            cursor: pointer;
            transition: background .2s ease;
        }

        .logout:hover {
            background: rgba(255, 255, 255, .32);
        }

        /* KONTEN UTAMA */
        .main {
            width: 100%;
            min-height: calc(100vh - 160px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 35px 5%;
        }

        .cards {
            width: 100%;
            max-width: 1308px;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 4%;
        }

        /* KARTU TRANSPARAN */
        .card {
            min-width: 0;
            height: 410px;
            padding: 22px 18px 25px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;

            background: rgba(180, 196, 219, .48);
            border: 3px solid #dce5f3;
            border-radius: 0;
            box-shadow: none;
        }

        .card-image {
            width: 100%;
            height: 290px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }

        .card-image img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        /* TOMBOL KUNING */
        .card-button {
            width: 100%;
            min-height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px 6px;

            color: #000;
            background: #ffcf08;
            border: none;
            border-radius: 6px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, .25);

            font-size: clamp(13px, 1.4vw, 22px);
            font-weight: 700;
            line-height: 1.2;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background .2s ease;
        }

        .card-button:hover {
            background: #ffdc35;
        }

        /* TABLET */
        @media (max-width: 900px) {
            .header {
                height: 125px;
                padding: 12px 4%;
            }

            .brand img {
                width: 175px;
                height: 100px;
            }

            .logout {
                padding: 7px 16px;
                font-size: 20px;
                border-width: 2px;
            }

            .main {
                min-height: calc(100vh - 125px);
                padding: 30px 4%;
            }

            .cards {
                gap: 18px;
            }

            .card {
                height: 340px;
                padding: 18px 12px 20px;
            }

            .card-image {
                height: 225px;
                margin-bottom: 12px;
            }

            .card-button {
                min-height: 44px;
                font-size: 14px;
            }
        }

        /* HP */
        @media (max-width: 600px) {
            .header {
                height: 95px;
                padding: 10px 5%;
                border-radius: 0 0 16px 16px;
            }

            .brand img {
                width: 145px;
                height: 78px;
            }

            .logout {
                padding: 7px 12px;
                font-size: 15px;
                border-width: 2px;
            }

            .main {
                min-height: calc(100vh - 95px);
                padding: 28px 7%;
            }

            .cards {
                grid-template-columns: 1fr;
                gap: 22px;
            }

            .card {
                width: 100%;
                max-width: 360px;
                height: 365px;
                justify-self: center;
                padding: 18px 16px 20px;
            }

            .card-image {
                height: 265px;
                margin-bottom: 12px;
            }

            .card-button {
                min-height: 45px;
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="brand">
            <img
                src="{{ asset('images/logo-temubarang.png') }}"
                alt="Logo Temu Barang"
            >
        </div>

        <button type="button" class="logout" onclick="document.getElementById('modalKeluar').style.display='flex'">Keluar</button>
    </header>

    <main class="main">
        <section class="cards">

            <article class="card">
                <div class="card-image">
                    <img
                        src="{{ asset('images/ilustrasi-barang-hilang.png') }}"
                        alt="Ilustrasi barang hilang"
                    >
                </div>

                <a href="{{ route('barang.hilang') }}" class="card-button">
                    Daftar Barang Hilang
                </a>
            </article>

            <article class="card">
                <div class="card-image">
                    <img
                        src="{{ asset('images/ilustrasi-barang-ditemukan.png') }}"
                        alt="Ilustrasi barang ditemukan"
                    >
                </div>

                <a href="{{ route('barang.ditemukan') }}" class="card-button">
                    Daftar Barang Ditemukan
                </a>
            </article>

            <article class="card">
                <div class="card-image">
                    <img
                        src="{{ asset('images/ilustrasi-laporkan-barang.png') }}"
                        alt="Ilustrasi laporkan barang"
                    >
                </div>

                <a href="{{ route('barang.laporkan') }}" class="card-button">
                    Laporkan Barang
                </a>
            </article>

        </section>
    </main>
<div id="modalKeluar" style="display:none;position:fixed;inset:0;background:#0006;z-index:9999;align-items:center;justify-content:center">
<div style="background:white;padding:45px 25px;border-radius:15px;text-align:center;width:min(780px,90%)">
<h2 style="font-size:30px;font-weight:400;margin-bottom:35px">Apakah anda yakin untuk Keluar<br>ke Beranda?</h2>
<form action="{{ route('logout') }}" method="POST">
@csrf
<button type="submit" style="background:#0645bd;color:white;padding:12px 45px;border:0;border-radius:15px;font-size:28px;font-weight:bold;cursor:pointer">YA</button>
<button type="button" onclick="document.getElementById('modalKeluar').style.display='none'" style="background:#c00;color:white;padding:12px 28px;margin-left:25px;border:0;border-radius:15px;font-size:28px;font-weight:bold;cursor:pointer">TIDAK</button>
</form></div></div>
</body>
</html>

