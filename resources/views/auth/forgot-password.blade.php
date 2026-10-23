<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password - TemuBarang UMRAH</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        :root { --navy: #173778; --blue: #1b4d91; --yellow: #ffd20a; --white: #fffdfd; }
        body {
            margin: 0; min-height: 100vh; font-family: 'Poppins', Arial, sans-serif;
            color: white; background: linear-gradient(180deg, #213d88 0%, #102a4a 45%, #183b60 100%);
            position: relative; overflow-x: hidden;
        }
        body::before {
            content: ""; position: fixed; inset: 96px 0 0;
            background: url('/images/background-batik.png') center / cover no-repeat;
            opacity: .55; z-index: -1;
        }
        .site-header {
            min-height: 96px; padding: 16px 32px; display: flex; align-items: center;
            position: relative; z-index: 1;
        }
        .brand { display: flex; align-items: center; gap: 12px; color: white; text-decoration: none; }
        .brand-logo { width: 60px; height: 60px; object-fit: contain; flex-shrink: 0; }
        .brand-name { margin: 0; font-size: 24px; font-weight: 800; line-height: 1; letter-spacing: 2px; }
        .brand-tagline { margin-top: 5px; color: #fff000; font-size: 10px; font-weight: 500; line-height: 1.35; letter-spacing: .6px; }
        .forgot-wrapper { width: 100%; display: flex; justify-content: center; padding: 42px 20px 48px; }
        .forgot-panel {
            width: 100%; max-width: 440px; position: relative; padding: 92px 32px 30px;
            border: 2px solid rgba(255,255,255,.8); border-radius: 12px;
            background: linear-gradient(110deg, rgba(222,231,244,.43), rgba(30,57,94,.72));
            box-shadow: 0 5px 15px rgba(0,0,0,.18);
        }
        .logo-panel {
            width: 180px; height: 100px; position: absolute; top: -28px; left: 50%; transform: translateX(-50%);
            display: flex; justify-content: center; align-items: center; background: var(--white);
            border-radius: 8px; box-shadow: 0 3px 7px rgba(0,0,0,.25);
        }
        .logo-panel img { width: 76px; height: 76px; object-fit: contain; }
        h2 { margin: 8px 0 10px; font-size: 23px; font-weight: 700; text-align: center; }
        .description { margin: 0 0 22px; font-size: 13px; line-height: 1.7; text-align: center; color: rgba(255,255,255,.94); }
        .form-group { margin-bottom: 16px; }
        .form-group label { display: block; margin-bottom: 7px; font-size: 14px; font-weight: 500; }
        .input-group { display: flex; min-height: 46px; border-radius: 6px; background: var(--white); box-shadow: 0 2px 7px rgba(0,0,0,.25); overflow: hidden; }
        .input-icon { width: 46px; min-width: 46px; display: flex; justify-content: center; align-items: center; background: #fffdfd; border-right: 1px solid #dedede; }
        .input-icon svg { width: 21px; height: 21px; fill: #080808; }
        .input-group input { width: 100%; min-width: 0; padding: 11px 12px; border: none; outline: none; background: transparent; color: #222; font-family: inherit; font-size: 14px; }
        .input-group input::placeholder { color: #a5a5a5; }
        .input-group:focus-within { outline: 2px solid var(--yellow); }
        .submit-button { width: 100%; min-height: 46px; border: none; border-radius: 6px; background: var(--yellow); color: #173778; font-family: inherit; font-size: 15px; font-weight: 700; cursor: pointer; box-shadow: 0 2px 7px rgba(0,0,0,.25); transition: background .2s, transform .2s; }
        .submit-button:hover { background: #f3c400; transform: translateY(-1px); }
        .back-link { display: block; margin-top: 20px; color: #fff000; text-align: center; font-size: 13px; font-weight: 600; text-decoration: none; }
        .back-link:hover { text-decoration: underline; }
        .alert-error, .alert-success { margin-bottom: 16px; padding: 10px 12px; border-radius: 6px; font-size: 12px; }
        .alert-error { border: 1px solid #ffcaca; background: rgba(120,0,0,.4); color: white; }
        .alert-success { border: 1px solid #b7f5c5; background: rgba(0,100,35,.35); color: white; }
        @media (max-width: 600px) {
            body::before { top: 80px; background-position: center; }
            .site-header { min-height: 80px; padding: 12px 16px; }
            .brand { gap: 9px; }
            .brand-logo { width: 48px; height: 48px; }
            .brand-name { font-size: 19px; letter-spacing: 1.5px; }
            .brand-tagline { font-size: 8px; }
            .forgot-wrapper { padding: 42px 16px 30px; }
            .forgot-panel { max-width: 420px; padding: 84px 20px 24px; }
            .logo-panel { width: 150px; height: 88px; top: -25px; }
            .logo-panel img { width: 66px; height: 66px; }
            h2 { font-size: 21px; }
            .form-group label { font-size: 13px; }
        }
        @media (max-width: 360px) {
            .forgot-panel { padding-right: 15px; padding-left: 15px; }
            .brand-logo { width: 42px; height: 42px; }
            .brand-name { font-size: 17px; }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <a href="{{ url('/') }}" class="brand">
            <img src="{{ asset('images/logo-umrah.png') }}" alt="Logo UMRAH" class="brand-logo">
            <div>
                <h1 class="brand-name">TEMU<br>BARANG</h1>
                <div class="brand-tagline">campus lost &amp; found<br>platform</div>
            </div>
        </a>
    </header>

    <main class="forgot-wrapper">
        <section class="forgot-panel">
            <div class="logo-panel">
                <img src="{{ asset('images/logo-umrah.png') }}" alt="Logo Universitas Maritim Raja Ali Haji">
            </div>

            <h2>Lupa Password?</h2>
            <p class="description">Masukkan email yang kamu gunakan saat mendaftar. Kami akan mengirimkan tautan untuk mengatur ulang password.</p>

            @if (session('success'))
                <div class="alert-success">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert-error">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <div class="input-group">
                        <span class="input-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm0 4-8 5-8-5V6l8 5 8-5v2Z"/></svg>
                        </span>
                        <input id="email" type="email" name="email" placeholder="Masukkan email terdaftar" value="{{ old('email') }}" autocomplete="email" required autofocus>
                    </div>
                </div>
                <button type="submit" class="submit-button">Kirim Tautan Reset</button>
            </form>

            <a href="{{ route('login') }}" class="back-link">Kembali ke Login</a>
        </section>
    </main>
</body>
</html>
