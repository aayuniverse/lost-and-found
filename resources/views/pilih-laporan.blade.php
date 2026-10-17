
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporkan Barang | Temu Barang</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
            background: #172f50 url("{{ asset('images/background-batik.png') }}")
                center center / cover fixed no-repeat;
        }

        .header {
            height: 160px;
            width: 100%;
            padding: 20px 4%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(110deg, #203e91, #102e50);
            border-radius: 0 0 18px 18px;
            box-shadow: 0 2px 5px #0004;
        }

        .logo {
            width: 280px;
            height: 130px;
            object-fit: contain;
            object-position: left center;
        }

        .logout {
            padding: 8px 26px;
            border: 3px solid #dce4f5;
            border-radius: 35px;
            background: #ffffff25;
            color: white;
            font-size: 28px;
            cursor: pointer;
        }

        .logout:hover {
            background: #ffffff45;
        }

        .main {
            min-height: calc(100vh - 160px);
            padding: 42px 20px 55px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .page-title {
            width: min(540px, 100%);
            min-height: 128px;
            padding: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            font-size: 46px;
            font-weight: 700;
            background: linear-gradient(120deg, #7c8da5, #203d63);
            border: 3px solid white;
            border-radius: 22px;
            box-shadow: 0 2px 5px #0003;
        }

        .choices {
            width: min(850px, 100%);
            margin-top: 94px;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 74px;
        }

        .choice-card {
            min-width: 0;
            padding: 30px 18px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: linear-gradient(120deg, #7c8da5, #203d63);
            border: 3px solid white;
            border-radius: 21px;
            box-shadow: 0 2px 5px #0003;
        }

        .illustration {
            width: 100%;
            max-width: 320px;
            height: 300px;
            object-fit: contain;
            margin-bottom: 28px;
        }

        .choice-button {
            width: 100%;
            min-height: 48px;
            padding: 12px 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: #ffcc00;
            color: #080808;
            border: none;
            border-radius: 7px;
            box-shadow: 0 2px 5px #0004;
            text-decoration: none;
            font-size: 21px;
            font-weight: 700;
            transition: background .2s ease, transform .2s ease;
        }

        .choice-button:hover {
            background: #ffda36;
            transform: translateY(-2px);
        }

        /* Modal konfirmasi keluar */
        .modal {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 9999;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: #0006;
        }

        .modal-content {
            width: min(780px, 100%);
            padding: 40px 25px;
            text-align: center;
            background: white;
            border-radius: 15px;
        }

        .modal-content h2 {
            margin-bottom: 30px;
            font-size: 30px;
            font-weight: 400;
        }

        .modal-button {
            padding: 12px 35px;
            border: none;
            border-radius: 12px;
            color: white;
            font-size: 23px;
            font-weight: 700;
            cursor: pointer;
        }

        .yes {
            background: #0645bd;
        }

        .no {
            margin-left: 15px;
            background: #c00;
        }

        @media (max-width: 700px) {
            .header {
                height: 100px;
                padding: 10px 5%;
            }

            .logo {
                width: 165px;
                height: 80px;
            }

            .logout {
                padding: 7px 13px;
                font-size: 16px;
                border-width: 2px;
            }

            .main {
                padding-top: 28px;
            }

            .page-title {
                min-height: 85px;
                font-size: 30px;
                border-radius: 15px;
            }

            .choices {
                margin-top: 35px;
                grid-template-columns: 1fr;
                gap: 25px;
                max-width: 380px;
            }

            .choice-card {
                padding: 20px;
            }

            .illustration {
                height: 240px;
                margin-bottom: 20px;
            }

            .choice-button {
                font-size: 17px;
            }

            .modal-content h2 {
                font-size: 22px;
            }

            .modal-button {
                padding: 10px 25px;
                font-size: 18px;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <img
            class="logo"
            src="{{ asset('images/logo-temubarang.png') }}"
            alt="Logo Temu Barang"
        >

        <button
            type="button"
            class="logout"
            onclick="document.getElementById('modalKeluar').style.display='flex'"
        >
            Keluar
        </button>
    </header>

    <main class="main">
        <h1 class="page-title">Laporkan Barang</h1>

        <section class="choices">
            <article class="choice-card">
                <img
                    class="illustration"
                    src="{{ asset('images/ilustrasi-barang-hilang.png') }}"
                    alt="Ilustrasi Barang Hilang"
                >

                <a
                    class="choice-button"
                    href="{{ route('laporkan.hilang') }}"
                >
                    Lapor Barang Hilang
                </a>
            </article>

            <article class="choice-card">
                <img
                    class="illustration"
                    src="{{ asset('images/ilustrasi-barang-ditemukan.png') }}"
                    alt="Ilustrasi Barang Ditemukan"
                >

                <a
                    class="choice-button"
                    href="{{ route('laporkan.ditemukan') }}"
                >
                    Lapor Barang Ditemukan
                </a>
            </article>
        </section>
    </main>

    <div id="modalKeluar" class="modal">
        <div class="modal-content">
            <h2>Apakah anda yakin untuk Keluar<br>ke Beranda?</h2>

            <form action="{{ route('dashboard') }}" method="GET">
                <button type="submit" class="modal-button yes">YA</button>

                <button
                    type="button"
                    class="modal-button no"
                    onclick="document.getElementById('modalKeluar').style.display='none'"
                >
                    TIDAK
                </button>
            </form>
        </div>
    </div>
</body>
</html>
