
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - TemuBarang UMRAH</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * { box-sizing: border-box; }

        :root {
            --navy: #173778;
            --blue: #1b4d91;
            --yellow: #ffd20a;
            --white: #fffdfd;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Poppins', Arial, sans-serif;
            color: white;
            background: linear-gradient(180deg, #213d88 0%, #102a4a 45%, #183b60 100%);
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 96px 0 0;
            background: url('/images/background-batik.png') center / cover no-repeat;
            opacity: .55;
            z-index: -1;
        }

        .site-header {
            min-height: 96px;
            padding: 16px 32px;
            display: flex;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            color: white;
            text-decoration: none;
        }

        .brand-logo {
            width: 60px;
            height: 60px;
            object-fit: contain;
            flex-shrink: 0;
        }

        .brand-name {
            margin: 0;
            font-size: 24px;
            font-weight: 800;
            line-height: 1;
            letter-spacing: 2px;
        }

        .brand-tagline {
            margin-top: 5px;
            color: #fff000;
            font-size: 10px;
            font-weight: 500;
            line-height: 1.35;
            letter-spacing: .6px;
        }

        .login-wrapper {
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 42px 20px 48px;
        }

        .login-panel {
            width: 100%;
            max-width: 440px;
            position: relative;
            padding: 92px 32px 30px;
            border: 2px solid rgba(255, 255, 255, .8);
            border-radius: 12px;
            background: linear-gradient(110deg, rgba(222, 231, 244, .43), rgba(30, 57, 94, .72));
            box-shadow: 0 5px 15px rgba(0, 0, 0, .18);
        }

        .logo-panel {
            width: 180px;
            height: 100px;
            position: absolute;
            top: -28px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--white);
            border-radius: 8px;
            box-shadow: 0 3px 7px rgba(0, 0, 0, .25);
        }

        .logo-panel img {
            width: 76px;
            height: 76px;
            object-fit: contain;
        }

        .form-group { margin-bottom: 16px; }

        .form-group label {
            display: block;
            margin-bottom: 7px;
            font-size: 14px;
            font-weight: 500;
        }

        .input-group {
            display: flex;
            min-height: 46px;
            border-radius: 6px;
            background: var(--white);
            box-shadow: 0 2px 7px rgba(0, 0, 0, .25);
            overflow: hidden;
        }

        .input-icon {
            width: 46px;
            min-width: 46px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fffdfd;
            border-right: 1px solid #dedede;
        }

        .input-icon img, .input-icon svg {
            width: 21px;
            height: 21px;
            object-fit: contain;
        }

        .input-icon svg { fill: #080808; }

        .input-group input {
            width: 100%;
            min-width: 0;
            padding: 11px 12px;
            border: none;
            outline: none;
            background: transparent;
            color: #222;
            font-family: inherit;
            font-size: 14px;
        }

        .input-group input::placeholder { color: #a5a5a5; }
        .input-group:focus-within { outline: 2px solid var(--yellow); }

        .forgot-password {
            display: block;
            margin: 12px 0 22px;
            color: white;
            text-align: right;
            font-size: 13px;
            font-weight: 500;
            text-decoration: none;
        }

        .forgot-password:hover, .register-link:hover { text-decoration: underline; }

        .login-button {
            width: 100%;
            min-height: 46px;
            border: none;
            border-radius: 6px;
            background: var(--yellow);
            color: #173778;
            font-family: inherit;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 2px 7px rgba(0, 0, 0, .25);
            transition: background .2s, transform .2s;
        }

        .login-button:hover { background: #f3c400; transform: translateY(-1px); }

        .divider {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 24px 0 16px;
            color: white;
            font-size: 13px;
        }

        .divider::before, .divider::after {
            content: "";
            height: 1px;
            flex: 1;
            background: rgba(255, 255, 255, .8);
        }

        .google-button {
            min-height: 46px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            border: none;
            border-radius: 6px;
            background: var(--white);
            color: #222;
            font-family: inherit;
            font-size: 13px;
            text-decoration: none;
            box-shadow: 0 2px 7px rgba(0, 0, 0, .25);
            cursor: pointer;
        }

        .google-button img { width: 22px; height: 22px; object-fit: contain; }

        .register-text {
            margin: 20px 0 0;
            text-align: center;
            font-size: 13px;
            line-height: 1.6;
        }

        .register-link { color: #fff000; font-weight: 600; text-decoration: none; }

        .alert-error, .alert-success {
            margin-bottom: 16px;
            padding: 10px 12px;
            border-radius: 6px;
            font-size: 12px;
        }

        .alert-error {
            border: 1px solid #ffcaca;
            background: rgba(120, 0, 0, .4);
            color: white;
        }

        .alert-success {
            border: 1px solid #b7f5c5;
            background: rgba(0, 100, 35, .35);
            color: white;
        }

        @media (max-width: 600px) {
            body::before { top: 80px; background-position: center; }

            .site-header {
                min-height: 80px;
                padding: 12px 16px;
            }

            .brand { gap: 9px; }
            .brand-logo { width: 48px; height: 48px; }
            .brand-name { font-size: 19px; letter-spacing: 1.5px; }
            .brand-tagline { font-size: 8px; }

            .login-wrapper { padding: 42px 16px 30px; }

            .login-panel {
                max-width: 420px;
                padding: 84px 20px 24px;
            }

            .logo-panel { width: 150px; height: 88px; top: -25px; }
            .logo-panel img { width: 66px; height: 66px; }
            .form-group label { font-size: 13px; }
        }

        @media (max-width: 360px) {
            .login-panel { padding-right: 15px; padding-left: 15px; }
            .brand-logo { width: 42px; height: 42px; }
            .brand-name { font-size: 17px; }
        }
    </style>
</head>
<body>

    <header class="site-header">
        <a href="{{ url('/') }}" class="brand">
            <img
                src="{{ asset('images/logo-umrah.png') }}"
                alt="Logo UMRAH"
                class="brand-logo"
            >

            <div>
                <h1 class="brand-name">TEMU<br>BARANG</h1>
                <div class="brand-tagline">
                    campus lost &amp; found<br>platform
                </div>
            </div>
        </a>
    </header>

    <main class="login-wrapper">
        <section class="login-panel">

            <div class="logo-panel">
                <img
                    src="{{ asset('images/logo-umrah.png') }}"
                    alt="Logo Universitas Maritim Raja Ali Haji"
                >
            </div>

            @if (session('success'))
                <div class="alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert-error">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('login.process') }}">
                @csrf

                <div class="form-group">
                    <label for="nim_nip">ID Pengguna (NIM / NIP)</label>

                    <div class="input-group">
                        <span class="input-icon">
                            <img
                                src="{{ asset('images/icon-user.png') }}"
                                alt=""
                                onerror="this.style.display='none';this.nextElementSibling.style.display='block';"
                            >
                            <svg viewBox="0 0 24 24" style="display:none" aria-hidden="true">
                                <path d="M12 12a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm0 2c-4.1 0-7.5 2.1-7.5 4.7V21h15v-2.3c0-2.6-3.4-4.7-7.5-4.7Z"/>
                            </svg>
                        </span>

                        <input
                            id="nim_nip"
                            type="text"
                            name="nim_nip"
                            placeholder="Masukkan User ID (NIM / NIP)"
                            value="{{ old('nim_nip') }}"
                            autocomplete="username"
                            required
                            autofocus
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Kata Sandi</label>

                    <div class="input-group">
                        <span class="input-icon">
                            <img
                                src="{{ asset('images/icon-key.png') }}"
                                alt=""
                                onerror="this.style.display='none';this.nextElementSibling.style.display='block';"
                            >
                            <svg viewBox="0 0 24 24" style="display:none" aria-hidden="true">
                                <path d="M14.5 3a6.5 6.5 0 0 0-5.9 9.2L2 18.8V22h5v-3h3v-3h2.2A6.5 6.5 0 1 0 14.5 3Zm2.5 6a2 2 0 1 1 0-4 2 2 0 0 1 0 4Z"/>
                            </svg>
                        </span>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="Masukkan Password"
                            autocomplete="current-password"
                            required
                        >
                    </div>
                </div>

                <button type="submit" class="login-button">
                    Masuk
                </button>

                <a href="{{ route('password.request') }}" class="forgot-password">
                    Lupa Password?
                </a>
            </form>

            <div class="divider">Atau</div>

            <a href="#" class="google-button" onclick="event.preventDefault(); alert('Login Google belum dikonfigurasi.');">
                <img
                    src="{{ asset('images/google.png') }}"
                    alt=""
                    onerror="this.style.display='none';"
                >
                <span>Masuk dengan Google</span>
            </a>

            <p class="register-text">
                Belum punya akun?
                <a href="{{ route('register') }}" class="register-link">
                    Daftar sekarang
                </a>
            </p>

        </section>
    </main>

</body>
</html>


