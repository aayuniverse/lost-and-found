<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang Hilang | Temu Barang</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #e9e9f2;
            color: #080808;
            min-height: 100vh;
        }

        /* HEADER */
        .header {
            height: 170px;
            width: 100%;
            padding: 20px 4%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(110deg, #203e91, #102e50);
            box-shadow: 0 2px 5px rgba(0, 0, 0, .25);
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
            background: rgba(255, 255, 255, .18);
            color: white;
            font-size: 28px;
            cursor: pointer;
            transition: background .2s ease;
        }

        .logout:hover {
            background: rgba(255, 255, 255, .3);
        }

        /* LAYOUT UTAMA */
        .page {
            padding: 52px 4% 45px;
        }

        .report-action {
            display: flex;
            justify-content: flex-end;
            margin: 0 8.5% 56px 0;
        }

        .report-button {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            min-width: 350px;
            min-height: 59px;
            padding: 14px 24px;
            border-radius: 20px;
            background: #233f9e;
            color: white;
            text-decoration: none;
            font-size: 23px;
            font-weight: 700;
            transition: background .2s ease, transform .2s ease;
        }

        .report-button:hover {
            background: #17317f;
            transform: translateY(-2px);
        }

        .content-layout {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 230px;
            gap: 42px;
            align-items: start;
        }

        /* JUDUL DAN PAGINATION */
        .content-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin: 0 0 48px 8px;
        }

        .content-heading h1 {
            font-size: 40px;
            font-weight: 700;
        }

        .pagination {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .page-number {
            width: 51px;
            height: 45px;
            border: 1px solid #c8c8d0;
            border-radius: 12px;
            background: #fff;
            color: #080808;
            font-size: 21px;
            font-weight: 700;
            cursor: pointer;
            transition: background .2s ease, color .2s ease;
        }

        .page-number.active {
            background: #233f9e;
            color: #fff;
            border-color: #233f9e;
        }

        .page-number:hover {
            border-color: #233f9e;
        }

        /* DAFTAR BARANG */
        .items-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 36px 20px;
            transition: opacity .18s ease;
        }

        .item-card {
            min-width: 0;
            min-height: 214px;
            padding: 25px 22px;
            display: grid;
            grid-template-columns: 138px minmax(0, 1fr);
            gap: 22px;
            align-items: center;
            background: #fff;
            border-radius: 7px;
            box-shadow: 0 1px 8px rgba(0, 0, 0, .4);
        }

        .item-image {
            width: 138px;
            height: 138px;
            object-fit: contain;
            border-radius: 24px;
        }

        .item-info {
            min-width: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .item-info h2 {
            margin-bottom: 10px;
            font-size: 21px;
            line-height: 1.2;
        }

        .item-location {
            font-size: 14px;
            line-height: 1.45;
            overflow-wrap: anywhere;
        }

        .item-bottom {
            width: 100%;
            margin-top: auto;
            padding-top: 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
        }

        .item-date {
            font-size: 13px;
            white-space: nowrap;
        }

        .detail-button {
            padding: 9px 14px;
            border: none;
            border-radius: 11px;
            background: #233f9e;
            color: white;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
            white-space: nowrap;
            cursor: pointer;
            transition: background .2s ease;
        }

        .detail-button:hover {
            background: #17317f;
        }

        /* PANEL TIPS */
        .tips {
            padding: 22px 16px;
            background: #fff;
            border-radius: 7px;
            box-shadow: 0 1px 8px rgba(0, 0, 0, .35);
            font-size: 13px;
            line-height: 1.35;
            margin-top: 22px;
        }

        .tips h2 {
            font-size: 13px;
            margin-bottom: 20px;
            text-align: center;
        }

        .tips ol {
            padding-left: 18px;
        }

        .tips li {
            padding-left: 2px;
            margin-bottom: 17px;
        }

        .tips li:last-child {
            margin-bottom: 0;
        }

        /* ANIMASI RINGAN */
        .items-grid.changing {
            opacity: .35;
        }

        /* TABLET */
        @media (max-width: 1100px) {
            .header {
                height: 140px;
            }

            .logo {
                width: 230px;
                height: 110px;
            }

            .content-layout {
                grid-template-columns: minmax(0, 1fr) 200px;
                gap: 24px;
            }

            .items-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .report-action {
                margin-right: 0;
                margin-bottom: 35px;
            }

            .content-heading {
                margin-bottom: 30px;
            }

            .item-card {
                min-height: 190px;
            }
        }

        /* HP */
        @media (max-width: 650px) {
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

            .page {
                padding: 28px 5%;
            }

            .report-action {
                margin-bottom: 35px;
            }

            .report-button {
                min-width: 0;
                width: 100%;
                min-height: 48px;
                border-radius: 13px;
                font-size: 17px;
            }

            .content-layout {
                grid-template-columns: 1fr;
                gap: 28px;
            }

            .content-heading {
                margin: 0 0 25px;
                flex-direction: column;
                align-items: flex-start;
                gap: 18px;
            }

            .content-heading h1 {
                font-size: 30px;
            }

            .pagination {
                gap: 10px;
            }

            .page-number {
                width: 42px;
                height: 40px;
                font-size: 17px;
                border-radius: 9px;
            }

            .items-grid {
                grid-template-columns: 1fr;
                gap: 18px;
            }

            .item-card {
                grid-template-columns: 100px minmax(0, 1fr);
                gap: 15px;
                min-height: 160px;
                padding: 16px 13px;
            }

            .item-image {
                width: 100px;
                height: 100px;
                border-radius: 18px;
            }

            .item-info h2 {
                font-size: 18px;
                margin-bottom: 7px;
            }

            .item-location {
                font-size: 13px;
            }

            .item-bottom {
                flex-wrap: wrap;
                padding-top: 12px;
            }

            .item-date {
                font-size: 11px;
            }

            .detail-button {
                padding: 8px 10px;
                font-size: 11px;
            }

            .tips {
                margin-top: 0;
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

        <button type="button" class="logout" onclick="document.getElementById('modalKeluar').style.display='flex'">Keluar</button>
    </header>

    <main class="page">

        <div class="report-action">
            <a href="{{ route('barang.laporkan') }}" class="report-button">
                Laporkan Barang Hilang
            </a>
        </div>

        <div class="content-layout">

            <section class="lost-content">

                <div class="content-heading">
                    <h1>Barang Hilang</h1>

                    <nav class="pagination" aria-label="Navigasi halaman">
                        <button type="button" class="page-number active" data-page="1">1</button>
                        <button type="button" class="page-number" data-page="2">2</button>
                        <button type="button" class="page-number" data-page="3">3</button>
                        <button type="button" class="page-number" data-page="4">4</button>
                    </nav>
                </div>

                <div class="items-grid" id="itemsGrid">

    @forelse ($laporan as $item)
        <article class="item-card">
            @php
                $foto = $item->foto->first();
            @endphp

            <img
                class="item-image"
                src="{{ $foto ? asset('storage/' . $foto->url_foto) : asset('images/logo-temubarang.png') }}"
                alt="{{ $item->nama_barang }}"
            >

            <div class="item-info">
                <h2>{{ $item->nama_barang }}</h2>

                <p class="item-location">
                    {{ $item->lokasi_kejadian ?? 'Lokasi belum dicantumkan' }}
                </p>

                <div class="item-bottom">
                    <span class="item-date">
                        {{ \Carbon\Carbon::parse($item->tanggal_kejadian)->translatedFormat('j F Y') }}
                    </span>

                    <a href="#" class="detail-button">Lihat Detail</a>
                </div>
            </div>
        </article>
    @empty
        <p style="grid-column:1/-1; text-align:center; padding:35px; background:white; border-radius:10px;">
            Belum ada laporan barang hilang yang dipublikasikan.
        </p>
    @endforelse

</div>
            </section>

            <aside class="tips">
                <h2>Tips Aman Menyimpan Barang</h2>

                <ol>
                    <li>
                        Gunakan label nama. Tempelkan nama atau kontak pada
                        barang penting seperti laptop, botol minum, atau buku.
                    </li>

                    <li>
                        Simpan barang di tempat yang aman. Hindari
                        meninggalkan barang di tempat umum tanpa pengawasan.
                    </li>

                    <li>
                        Periksa barang sebelum meninggalkan lokasi.
                        Pastikan semua barang sudah dibawa sebelum keluar
                        dari kelas, perpustakaan, atau kantin.
                    </li>

                    <li>
                        Gunakan tas dengan resleting atau pengaman.
                        Tas yang tertutup dapat membantu mencegah barang
                        jatuh atau tertinggal.
                    </li>
                </ol>
            </aside>

        </div>
    </main>

    <script>
        const pageButtons = document.querySelectorAll('.page-number');
        const itemsGrid = document.getElementById('itemsGrid');

        pageButtons.forEach((button) => {
            button.addEventListener('click', () => {
                pageButtons.forEach((item) => {
                    item.classList.remove('active');
                });

                button.classList.add('active');

                itemsGrid.classList.add('changing');

                window.setTimeout(() => {
                    itemsGrid.classList.remove('changing');
                }, 180);
            });
        });
    </script>

<div id="modalKeluar" style="display:none;position:fixed;inset:0;background:#0006;z-index:9999;align-items:center;justify-content:center">
<div style="background:white;padding:45px 25px;border-radius:15px;text-align:center;width:min(780px,90%)">
<h2 style="font-size:30px;font-weight:400;margin-bottom:35px">Apakah anda yakin untuk Keluar<br>ke Beranda?</h2>
<form action="{{ route('dashboard') }}" method="GET">
@csrf
<button type="submit" style="background:#0645bd;color:white;padding:12px 45px;border:0;border-radius:15px;font-size:28px;font-weight:bold;cursor:pointer">YA</button>
<button type="button" onclick="document.getElementById('modalKeluar').style.display='none'" style="background:#c00;color:white;padding:12px 28px;margin-left:25px;border:0;border-radius:15px;font-size:28px;font-weight:bold;cursor:pointer">TIDAK</button>
</form></div></div>
</body>
</html>


