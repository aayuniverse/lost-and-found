<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporkan Barang Ditemukan | TemuBarang</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #eae9f3;
            color: #171717;
        }

        .header {
            min-height: 138px;
            padding: 20px 4%;
            background: linear-gradient(110deg, #233f9b, #0b294b);
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px #999;
        }

        .brand img {
            width: 235px;
            max-width: 65vw;
            height: auto;
            object-fit: contain;
        }

        .exit-btn {
            padding: 10px 25px;
            border: 2px solid #dbe4ff;
            border-radius: 30px;
            background: rgba(255,255,255,.15);
            color: white;
            font-size: 22px;
            cursor: pointer;
        }

        .container {
            padding: 40px 4% 48px;
        }

        .page-title {
            font-size: 34px;
            margin-bottom: 12px;
        }

        .subtitle {
            font-size: 20px;
            margin-bottom: 46px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 28px 32px;
            align-items: start;
        }

        .column {
            display: flex;
            flex-direction: column;
            gap: 28px;
        }

        .panel {
            padding: 25px;
            background: white;
            border-radius: 7px;
            box-shadow: 0 1px 7px #999;
        }

        .panel-title {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-bottom: 28px;
            font-size: 25px;
        }

        .panel-icon {
            width: 52px;
            height: 52px;
            object-fit: contain;
            padding: 5px;
            border-radius: 5px;
            background: #7d9bff;
            box-shadow: 0 1px 4px #aaa;
        }

        .field {
            margin-bottom: 22px;
        }

        .field:last-child {
            margin-bottom: 0;
        }

        label, .field-label {
            display: block;
            margin-bottom: 9px;
            font-size: 17px;
        }

        input, select, textarea {
            width: 100%;
            min-height: 46px;
            padding: 11px 14px;
            border: 1px solid #d4d4d4;
            border-radius: 10px;
            background: white;
            color: #292929;
            font: inherit;
            font-size: 16px;
        }

        input:focus, select:focus, textarea:focus {
            outline: 2px solid #9cb5ff;
            border-color: #1749bd;
        }

        textarea {
            min-height: 88px;
            resize: vertical;
        }

        .date-fields {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 8px;
        }

        .date-fields select {
            min-width: 0;
        }

        .radio-options {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            padding: 8px 4px 0;
        }

        .radio-options label {
            display: flex;
            align-items: center;
            gap: 8px;
            margin: 0;
            white-space: nowrap;
        }

        .radio-options input {
            width: 18px;
            min-height: auto;
            height: 18px;
            accent-color: #333;
        }

        input[type="file"] {
            padding: 6px;
            font-size: 14px;
        }

        .actions {
            display: flex;
            gap: 35px;
            margin-top: 32px;
        }

        .action-btn {
            width: 248px;
            min-height: 56px;
            border: none;
            border-radius: 28px;
            font-size: 21px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 2px 4px #bbb;
        }

        .cancel-btn {
            background: white;
            color: #111;
        }

        .submit-btn {
            background: #1046bd;
            color: white;
        }

        .action-btn:hover, .exit-btn:hover {
            opacity: .88;
        }

        .modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 10;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: rgba(0,0,0,.5);
        }

        .modal-overlay.show {
            display: flex;
        }

        .modal {
            width: 100%;
            max-width: 420px;
            padding: 30px;
            border-radius: 14px;
            background: white;
            text-align: center;
            box-shadow: 0 5px 20px #3335;
        }

        .modal h2 {
            margin-bottom: 12px;
        }

        .modal p {
            margin-bottom: 24px;
            line-height: 1.5;
        }

        .modal-actions {
            display: flex;
            justify-content: center;
            gap: 12px;
        }

        .modal-actions button {
            padding: 10px 25px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        .yes-btn {
            background: #1046bd;
            color: white;
        }

        .no-btn {
            background: #e5e5e5;
            color: #222;
        }

        @media (max-width: 800px) {
            .header {
                min-height: 100px;
                padding: 18px 5%;
            }

            .brand img {
                width: 180px;
            }

            .exit-btn {
                padding: 9px 16px;
                font-size: 17px;
            }

            .container {
                padding: 28px 5%;
            }

            .page-title {
                font-size: 27px;
            }

            .subtitle {
                font-size: 17px;
                margin-bottom: 28px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 22px;
            }

            .column {
                gap: 22px;
            }

            .panel {
                padding: 20px;
            }

            .panel-title {
                font-size: 21px;
            }

            .actions {
                gap: 14px;
            }

            .action-btn {
                width: 50%;
                font-size: 17px;
            }
        }

        @media (max-width: 400px) {
            .radio-options {
                gap: 6px;
            }

            .radio-options label {
                gap: 4px;
                font-size: 14px;
            }

            .date-fields {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    
@if (session('laporan_berhasil'))
<div id="modalBerhasil" style="position:fixed;inset:0;background:rgba(0,0,0,.45);z-index:10000;display:flex;align-items:center;justify-content:center;">
    <div style="background:#fff;width:min(500px,90%);padding:40px 25px;border-radius:15px;text-align:center;box-shadow:0 4px 15px #0002;">
        <div style="width:90px;height:90px;border:5px solid #20a464;border-radius:50%;margin:0 auto 25px;display:flex;align-items:center;justify-content:center;color:#20a464;font-size:60px;font-weight:bold;">✓</div>
        <h2 style="font-size:30px;margin:0 0 30px;color:#222;">Berhasil Dilaporkan!</h2>
        <button type="button" onclick="window.location.href='{{ route('dashboard') }}'" style="background:#0645bd;color:white;padding:12px 45px;border:0;border-radius:12px;font-size:22px;font-weight:bold;cursor:pointer;">OK</button>
    </div>
</div>
@endif

    <header class="header">
        <a class="brand" href="{{ route('dashboard') }}">
            <img src="{{ asset('images/logo-temubarang.png') }}"
                 alt="TemuBarang">
        </a>

        <button type="button" class="exit-btn" onclick="bukaModalKeluar()">
            Keluar
        </button>
    </header>

    <main class="container">
        <h1 class="page-title">Laporkan Barang Ditemukan</h1>
        <p class="subtitle">Laporkan barang yang kamu temukan disini</p>

        <form action="{{ route('laporkan.ditemukan.simpan') }}" method="POST" enctype="multipart/form-data">
         @csrf

            <div class="form-grid">
                <div class="column">
                    <section class="panel">
                        <h2 class="panel-title">
                            <img class="panel-icon"
                                 src="{{ asset('images/logo-informasibarang.png') }}"
                                 alt="">
                            Informasi Barang
                        </h2>

                        <div class="field">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" id="nama_barang"
                                   name="nama_barang"
                                   placeholder="Contoh: Dompet hitam putih"
                                   required>
                        </div>

                        <div class="field">
                            <label for="warna_barang">Warna Barang</label>
                            <input type="text" id="warna_barang"
                                   name="warna_barang"
                                   placeholder="Masukkan warna dan ciri barang"
                                   required>
                        </div>
                    </section>

                    <section class="panel">
                        <h2 class="panel-title">
                            <img class="panel-icon"
                                 src="{{ asset('images/logo-kontakpelapor.png') }}"
                                 alt="">
                            Kontak Penemu
                        </h2>

                        <div class="field">
                            <label for="nama_pelapor">Nama Mahasiswa</label>
                            <input type="text" id="nama_pelapor"
                                   name="nama_pelapor"
                                   placeholder="Masukkan nama mahasiswa"
                                   required>
                        </div>

                        <div class="field">
                            <label for="whatsapp">Nomor WhatsApp</label>
                            <input type="tel" id="whatsapp" name="whatsapp"
                                   placeholder="Contoh: 08xxxxxxxxxx"
                                   required>
                        </div>

                        <div class="field">
                            <label for="email">Email (Opsional)</label>
                            <input type="email" id="email" name="email"
                                   placeholder="Masukkan email">
                        </div>
                    </section>
                </div>

                <div class="column">
                    <section class="panel">
                        <h2 class="panel-title">
                            <img class="panel-icon"
                                 src="{{ asset('images/logo-lokasiwaktu.png') }}"
                                 alt="">
                            Lokasi &amp; Waktu
                        </h2>

                        <div class="field">
                            <label for="lokasi">Lokasi Ditemukan</label>
                            <select id="lokasi" name="lokasi" required>
                                <option value="">Pilih lokasi</option>
                                <option value="Gedung Rektorat">Gedung Rektorat</option>
                                <option value="Gedung Kuliah">Gedung Kuliah</option>
                                <option value="Perpustakaan">Perpustakaan</option>
                                <option value="Kantin">Kantin</option>
                                <option value="Parkiran">Parkiran</option>
                                <option value="Lapangan">Lapangan</option>
                                <option value="Di depan R7">Di depan R7</option>
                                <option value="Lokasi lainnya">Lokasi lainnya</option>
                            </select>
                        </div>

                        <div class="field">
                            <label>Tanggal Ditemukan</label>
                            <div class="date-fields">
                                <select name="tanggal" required>
                                    <option value="">Tanggal</option>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>

                                <select name="bulan" required>
                                    <option value="">Bulan</option>
                                    @foreach ([
                                        1 => 'Januari', 2 => 'Februari',
                                        3 => 'Maret', 4 => 'April',
                                        5 => 'Mei', 6 => 'Juni',
                                        7 => 'Juli', 8 => 'Agustus',
                                        9 => 'September', 10 => 'Oktober',
                                        11 => 'November', 12 => 'Desember'
                                    ] as $angka => $nama)
                                        <option value="{{ $angka }}">{{ $nama }}</option>
                                    @endforeach
                                </select>

                                <select name="tahun" required>
                                    <option value="">Tahun</option>
                                    @for ($i = date('Y'); $i >= date('Y') - 5; $i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="field">
                            <span class="field-label">Perkiraan Waktu Ditemukan</span>
                            <div class="radio-options">
                                <label>
                                    <input type="radio" name="waktu"
                                           value="Pagi" required>
                                    Pagi
                                </label>
                                <label>
                                    <input type="radio" name="waktu"
                                           value="Siang">
                                    Siang
                                </label>
                                <label>
                                    <input type="radio" name="waktu"
                                           value="Sore">
                                    Sore
                                </label>
                            </div>
                        </div>
                    </section>

                    <section class="panel">
                        <h2 class="panel-title">
                            <img class="panel-icon"
                                 src="{{ asset('images/detailbarang.png') }}"
                                 alt="">
                            Detail Barang
                        </h2>

                        <div class="field">
                            <label for="deskripsi">Deskripsi Barang</label>
                            <textarea id="deskripsi" name="deskripsi"
                                      placeholder="Jelaskan ciri-ciri barang dan kondisi saat ditemukan"
                                      required></textarea>
                        </div>

                        <div class="field">
                            <label for="foto">Foto Barang</label>
                            <input type="file" id="foto" name="foto"
                                   accept="image/*">
                        </div>
                    </section>
                </div>
            </div>

            <div class="actions">
                <button type="button" class="action-btn cancel-btn"
                        onclick="window.location.href='{{ route('laporkan.pilih') }}'">
                    Batalkan
                </button>

                <button type="submit" class="action-btn submit-btn">
                    Laporkan
                </button>
            </div>
        </form>
    </main>

    
    <!-- MODAL KELUAR -->
    <div id="modalKeluar"
         style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.4); z-index:9999; align-items:center; justify-content:center;">

        <div style="background:white; padding:45px 25px; border-radius:15px; text-align:center; width:min(780px,90%); box-shadow:0 4px 12px rgba(0,0,0,0.25);">

            <h2 style="font-size:30px; font-weight:400; margin-bottom:35px; line-height:1.5;">
                Apakah anda yakin untuk Keluar<br>ke Beranda?
            </h2>

            <div style="display:flex; justify-content:center; align-items:center; gap:25px; flex-wrap:wrap;">
                <button type="button"
                        onclick="window.location.href='{{ route('dashboard') }}'"
                        style="background:#0645bd; color:white; padding:12px 45px; border:0; border-radius:15px; font-size:28px; font-weight:bold; cursor:pointer;">
                    YA
                </button>

                <button type="button"
                        onclick="tutupModalKeluar()"
                        style="background:#c00; color:white; padding:12px 28px; border:0; border-radius:15px; font-size:28px; font-weight:bold; cursor:pointer;">
                    TIDAK
                </button>
            </div>
        </div>
    </div>

    <script>
        function bukaModalKeluar() {
            document.getElementById('modalKeluar').style.display = 'flex';
        }

        function tutupModalKeluar() {
            document.getElementById('modalKeluar').style.display = 'none';
        }

        document.getElementById('modalKeluar').addEventListener('click', function(event) {
            if (event.target === this) {
                tutupModalKeluar();
            }
        });
    </script>
</body>
</html>
