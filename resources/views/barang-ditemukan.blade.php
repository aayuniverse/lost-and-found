
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang Ditemukan | Temu Barang</title>

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

        button, a {
            -webkit-tap-highlight-color: transparent;
        }

        /* HEADER */
        .header {
            min-height: 145px;
            width: 100%;
            padding: 15px 4%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            background: linear-gradient(110deg, #203e91, #102e50);
            box-shadow: 0 2px 5px rgba(0, 0, 0, .25);
        }

        .logo {
            display: block;
            width: 280px;
            max-width: 70%;
            height: 115px;
            object-fit: contain;
            object-position: left center;
        }

        .exit-btn {
            flex-shrink: 0;
            padding: 10px 27px;
            border: 3px solid #dce4f5;
            border-radius: 35px;
            background: rgba(255, 255, 255, .12);
            color: white;
            font-size: 25px;
            cursor: pointer;
            transition: background .2s ease;
        }

        .exit-btn:hover {
            background: rgba(255, 255, 255, .3);
        }

        /* LAYOUT UTAMA */
        .page {
            width: 100%;
            max-width: 1800px;
            margin: 0 auto;
            padding: 45px 4% 55px;
        }

        .report-action {
            display: flex;
            justify-content: flex-end;
            margin: 0 0 42px;
        }

        .report-button {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            min-height: 56px;
            padding: 13px 25px;
            border-radius: 16px;
            background: #233f9e;
            color: white;
            text-decoration: none;
            text-align: center;
            font-size: 20px;
            font-weight: 700;
            transition: background .2s ease, transform .2s ease;
        }

        .report-button:hover {
            background: #17317f;
            transform: translateY(-2px);
        }

        .content-layout {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 250px;
            gap: 30px;
            align-items: start;
        }

        .lost-content {
            min-width: 0;
        }

        /* JUDUL DAN PAGINATION */
        .content-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 18px;
            margin: 0 0 30px;
        }

        .content-heading h1 {
            font-size: clamp(28px, 2.5vw, 40px);
            font-weight: 700;
        }

        .pagination {
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .page-number {
            width: 43px;
            height: 42px;
            border: 1px solid #c8c8d0;
            border-radius: 10px;
            background: #fff;
            color: #080808;
            font-size: 17px;
            font-weight: 700;
            cursor: pointer;
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
            gap: 24px 18px;
            align-items: stretch;
        }

        .item-card {
            min-width: 0;
            min-height: 190px;
            padding: 20px;
            display: grid;
            grid-template-columns: 115px minmax(0, 1fr);
            gap: 18px;
            align-items: center;
            background: #fff;
            border-radius: 9px;
            box-shadow: 0 2px 7px rgba(0, 0, 0, .22);
        }

        .item-image {
            display: block;
            width: 115px;
            height: 115px;
            object-fit: contain;
            border-radius: 18px;
        }

        .item-info {
            min-width: 0;
            min-height: 145px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .item-info h2 {
            margin-bottom: 9px;
            font-size: 19px;
            line-height: 1.3;
            overflow-wrap: anywhere;
        }

        .item-location {
            font-size: 13px;
            line-height: 1.5;
            overflow-wrap: anywhere;
        }

        .item-bottom {
            width: 100%;
            margin-top: auto;
            padding-top: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
        }

        .item-date {
            font-size: 12px;
            line-height: 1.4;
        }

        .detail-button {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            padding: 9px 13px;
            border: none;
            border-radius: 10px;
            background: #233f9e;
            color: white;
            font-size: 12px;
            font-weight: 700;
            text-decoration: none;
            white-space: nowrap;
            cursor: pointer;
            transition: background .2s ease;
        }

        .detail-button:hover {
            background: #17317f;
        }

        .item-card[hidden] {
            display: none !important;
        }

        /* PANEL TIPS */
        .tips {
            min-width: 0;
            padding: 22px 18px;
            background: #fff;
            border-radius: 9px;
            box-shadow: 0 2px 7px rgba(0, 0, 0, .2);
            font-size: 13px;
            line-height: 1.55;
        }

        .tips h2 {
            font-size: 16px;
            line-height: 1.4;
            margin-bottom: 18px;
            text-align: center;
        }

        .tips ol {
            padding-left: 19px;
        }

        .tips li {
            padding-left: 2px;
            margin-bottom: 15px;
            overflow-wrap: anywhere;
        }

        .tips li:last-child {
            margin-bottom: 0;
        }

        /* TABLET */
        @media (max-width: 1150px) {
            .page {
                padding: 35px 3%;
            }

            .content-layout {
                grid-template-columns: minmax(0, 1fr) 220px;
                gap: 20px;
            }

            .items-grid {
                grid-template-columns: 1fr;
                gap: 18px;
            }

            .item-card {
                grid-template-columns: 115px minmax(0, 1fr);
            }
        }

        /* TABLET KECIL DAN HP */
        @media (max-width: 760px) {
            .header {
                min-height: 100px;
                padding: 10px 5%;
            }

            .logo {
                width: 190px;
                height: 78px;
            }

            .exit-btn {
                padding: 8px 15px;
                font-size: 16px;
                border-width: 2px;
            }

            .page {
                padding: 27px 5% 40px;
            }

            .report-action {
                margin-bottom: 28px;
            }

            .report-button {
                width: 100%;
                min-height: 48px;
                padding: 12px 15px;
                border-radius: 12px;
                font-size: 16px;
            }

            .content-layout {
                grid-template-columns: minmax(0, 1fr);
                gap: 25px;
            }

            .content-heading {
                margin-bottom: 22px;
            }

            .content-heading h1 {
                font-size: 29px;
            }

            .items-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .item-card {
                min-height: 155px;
                padding: 15px;
                grid-template-columns: 95px minmax(0, 1fr);
                gap: 14px;
            }

            .item-image {
                width: 95px;
                height: 95px;
            }

            .item-info {
                min-height: 125px;
            }

            .item-info h2 {
                font-size: 17px;
            }

            .item-location {
                font-size: 12px;
            }

            .item-date {
                font-size: 11px;
            }

            .detail-button {
                padding: 8px 10px;
                font-size: 11px;
            }

            .tips {
                padding: 20px;
                font-size: 13px;
            }
        }

        @media (max-width: 380px) {
            .logo {
                width: 150px;
                height: 65px;
            }

            .exit-btn {
                padding: 7px 10px;
                font-size: 14px;
            }

            .item-card {
                grid-template-columns: 78px minmax(0, 1fr);
                gap: 11px;
                padding: 12px;
            }

            .item-image {
                width: 78px;
                height: 78px;
            }

            .item-info {
                min-height: 135px;
            }

            .item-bottom {
                align-items: flex-start;
                flex-direction: column;
                gap: 8px;
            }
        }

        /* MODAL KELUAR */
        .modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 9999;
            padding: 20px;
            background: rgba(0, 0, 0, .45);
            align-items: center;
            justify-content: center;
        }

        .modal-overlay.show {
            display: flex;
        }

        .modal-box {
            width: min(600px, 100%);
            padding: 38px 24px;
            background: #fff;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 18px rgba(0, 0, 0, .25);
        }

        .modal-box h2 {
            margin-bottom: 28px;
            font-size: clamp(21px, 4vw, 30px);
            font-weight: 400;
            line-height: 1.5;
        }

        .modal-actions {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .modal-button {
            min-width: 105px;
            padding: 11px 25px;
            border: 0;
            border-radius: 12px;
            color: #fff;
            font-size: 20px;
            font-weight: 700;
            cursor: pointer;
        }

        .modal-yes {
            background: #0645bd;
        }

        .modal-no {
            background: #c00;
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
            class="exit-btn"
            onclick="bukaModalKeluar()"
        >
            Keluar
        </button>
    </header>

    <main class="page">

        <div class="report-action">
            <a href="{{ route('barang.laporkan') }}" class="report-button">
                Laporkan Barang Ditemukan
            </a>
        </div>

        <div class="content-layout">

            <section class="lost-content">

                <div class="content-heading">
                    <h1>Barang Ditemukan</h1>

                    <nav class="pagination" aria-label="Navigasi halaman">
                        <button type="button" class="page-number active" data-page="1" aria-label="Halaman 1">1</button>
                        <button type="button" class="page-number" data-page="2" aria-label="Halaman 2">2</button>
                    </nav>
                </div>

                

<div class="items-grid" id="itemsGrid">

    @forelse ($laporan as $item)
        @php
            $foto = $item->foto->first();
        @endphp

        <article class="item-card">
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
        <p style="grid-column: 1 / -1; text-align: center; padding: 35px;">
            Belum ada laporan barang ditemukan yang dipublikasikan.
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

    <!-- MODAL KELUAR -->
    <div
        id="modalKeluar"
        class="modal-overlay"
        role="dialog"
        aria-modal="true"
        aria-labelledby="judulModalKeluar"
    >
        <div class="modal-box">
            <h2 id="judulModalKeluar">
                Apakah anda yakin untuk Keluar<br>ke Beranda?
            </h2>

            <div class="modal-actions">
                <button
                    type="button"
                    class="modal-button modal-yes"
                    onclick="window.location.href='{{ route('dashboard') }}'"
                >
                    YA
                </button>

                <button
                    type="button"
                    class="modal-button modal-no"
                    onclick="tutupModalKeluar()"
                >
                    TIDAK
                </button>
            </div>
        </div>
    </div>

    <script>
        
const pageButtons = document.querySelectorAll('.page-number');
const itemCards = document.querySelectorAll('.item-card');
const itemsPerPage = 4;

function tampilkanHalaman(page) {
    const totalHalaman = Math.max(
        1,
        Math.ceil(itemCards.length / itemsPerPage)
    );

    page = Math.min(Math.max(1, Number(page)), totalHalaman);

    itemCards.forEach((card, index) => {
        const halamanKartu = Math.floor(index / itemsPerPage) + 1;
        card.hidden = halamanKartu !== page;
    });

    pageButtons.forEach((button) => {
        const active = Number(button.dataset.page) === page;
        button.classList.toggle('active', active);
        button.setAttribute('aria-current', active ? 'page' : 'false');
    });
}

pageButtons.forEach((button) => {
    button.addEventListener('click', () => {
        tampilkanHalaman(button.dataset.page);
    });
});

tampilkanHalaman(1);

        // Modal Keluar.
        const modalKeluar = document.getElementById('modalKeluar');

        function bukaModalKeluar() {
            modalKeluar.classList.add('show');
        }

        function tutupModalKeluar() {
            modalKeluar.classList.remove('show');
        }

        modalKeluar.addEventListener('click', function (event) {
            if (event.target === modalKeluar) {
                tutupModalKeluar();
            }
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                tutupModalKeluar();
            }
        });
    </script>

</body>
</html>
