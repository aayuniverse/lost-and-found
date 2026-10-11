
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TEMUBARANG | Campus Lost & Found</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
</head>
<body>

<header class="navbar">
    <div class="nav-inner">
        <a href="{{ url('/beranda') }}" class="brand">
            <img src="{{ asset('images/logo-temubarang.png') }}" alt="Logo TEMUBARANG">
        </a>
    </div>
</header>

<main>
    
<section class="hero">
    <div class="hero-decoration circle-one"></div>
    <div class="hero-decoration circle-two"></div>

    <div class="hero-inner">
        <div class="hero-copy">
            <span class="eyebrow">CAMPUS LOST &amp; FOUND PLATFORM</span>

            <h1>
                Kehilangan barang<br>
                di kampus?<br>
                Temukan kembali<br>
                di <span>TEMUBARANG</span>
            </h1>

            <p>
                Platform campus lost &amp; found yang membantu mahasiswa
                melaporkan barang hilang dan menemukan kembali barang
                yang ditemukan di lingkungan kampus dengan lebih mudah
                dan cepat.
            </p>

            <a href="{{ route('login') }}" class="btn btn-masuk">
                Masuk
            </a>
        </div>

        <div class="hero-visual">
            <div class="hero-campus"></div>
        </div>
    </div>
</section>

    <section class="about">
        <div class="about-inner">
            <div class="about-description">
                <span class="section-label">KENALI PLATFORM KAMI</span>
                <h2>Apa itu TEMUBARANG?</h2>
                <div class="title-line"></div>

                <p>
                    TEMUBARANG adalah platform digital yang memfasilitasi
                    mahasiswa melaporkan barang hilang maupun barang yang
                    ditemukan di lingkungan kampus. Dengan sistem yang
                    sederhana dan mudah digunakan, mahasiswa dapat saling
                    membantu menemukan kembali barang yang hilang.
                </p>

                <div class="video-placeholder">
                    <div class="play-button">▶</div>
                    <span>Video pengenalan TEMUBARANG</span>
                </div>
            </div>

            <div class="student-visual">
                <div class="student-glow"></div>
                <img src="{{ asset('images/mahasiswa.png') }}" alt="Mahasiswa pengguna TEMUBARANG">
                <p class="student-note">Satu langkah lebih dekat ke barangmu kembali!</p>
            </div>

            <div class="about-cta">
                <div class="cta-icon">✓</div>

                <div class="cta-copy">
                    <h3>Kehilangan Sesuatu?</h3>
                    <p>
                        Laporkan barang yang hilang dan lihat daftar barang
                        yang telah ditemukan oleh mahasiswa lain di sekitar kampus.
                    </p>
                </div>

                <a href="{{ route('login') }}" class="btn btn-cari">
                    Cari Barang <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>

    <section class="latest" id="barang-terbaru">
        <div class="latest-inner">
            <div class="latest-heading">
                <div>
                    <span class="section-label">INFORMASI TERKINI</span>
                    <h2>Barang Terbaru</h2>
                    <div class="title-line"></div>
                </div>

                <a href="#barang-terbaru" class="arrow-button" aria-label="Lihat barang lainnya">→</a>
            </div>

            <div class="item-grid">
                <article class="item-card">
                    <div class="item-image">
                        <img src="{{ asset('images/kunci-motor.png') }}" alt="Kunci motor">
                    </div>
                    <div class="item-info">
                        <h3>Kunci Motor</h3>
                        <span class="item-category">Kunci</span>
                        <p><span class="item-dot"></span> Hilang</p>
                        <small>12 Maret 2026</small>
                    </div>
                    <a href="{{ url('/login') }}" class="btn-detail">Lihat Detail</a>
                </article>

                <article class="item-card">
                    <div class="item-image">
                        <img src="{{ asset('images/tas.png') }}" alt="Tas sekolah">
                    </div>
                    <div class="item-info">
                        <h3>Tas Sekolah</h3>
                        <span class="item-category">Tas</span>
                        <p><span class="item-dot found"></span> Ditemukan</p>
                        <small>10 Maret 2026</small>
                    </div>
                    <a href="{{ url('/login') }}" class="btn-detail">Lihat Detail</a>
                </article>

                <article class="item-card">
                    <div class="item-image">
                        <img src="{{ asset('images/dompet.png') }}" alt="Dompet">
                    </div>
                    <div class="item-info">
                        <h3>Dompet</h3>
                        <span class="item-category">Dompet</span>
                        <p><span class="item-dot found"></span> Ditemukan</p>
                        <small>8 Maret 2026</small>
                    </div>
                    <a href="{{ url('/login') }}" class="btn-detail">Lihat Detail</a>
                </article>

                <article class="item-card">
                    <div class="item-image">
                        <img src="{{ asset('images/lost-found-bg.png') }}" alt="Barang elektronik">
                    </div>
                    <div class="item-info">
                        <h3>Barang Elektronik</h3>
                        <span class="item-category">Elektronik</span>
                        <p><span class="item-dot found"></span> Ditemukan</p>
                        <small>5 Maret 2026</small>
                    </div>
                    <a href="{{ url('/login') }}" class="btn-detail">Lihat Detail</a>
                </article>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <p><strong>TEMUBARANG</strong> — Campus Lost &amp; Found Platform</p>
    <span>Membantu menemukan kembali barang yang berarti.</span>
</footer>

</body>
</html>
