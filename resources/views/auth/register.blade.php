<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - TemuBarang UMRAH</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
       
*,
*::before,
*::after {
    box-sizing: border-box;
}

:root {
    --yellow: #ffd20a;
    --white: #fffdfd;
}

html {
    width: 100%;
    min-width: 0;
}

body {
    margin: 0;
    min-height: 100vh;
    min-height: 100dvh;
    font-family: 'Poppins', Arial, sans-serif;
    color: white;
    background: linear-gradient(180deg, #213d88 0%, #102a4a 40%, #183b60 100%);
    overflow-x: hidden;
}

body::before {
    content: "";
    position: fixed;
    inset: 90px 0 0;
    background-image: url('/images/background-batik.png');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    opacity: .45;
    z-index: -1;
    pointer-events: none;
}

.site-header {
    min-height: 90px;
    padding: 12px clamp(16px, 4vw, 40px);
    display: flex;
    align-items: center;
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
}

.brand-name {
    margin: 0;
    font-size: 23px;
    font-weight: 800;
    line-height: 1.02;
    letter-spacing: 2px;
}

.brand-tagline {
    margin-top: 5px;
    color: #fff000;
    font-size: 10px;
    font-weight: 500;
    line-height: 1.3;
    letter-spacing: .6px;
}

.register-wrapper {
    display: flex;
    justify-content: center;
    width: 100%;
    padding: 48px 18px 40px;
}

.register-panel {
    width: 100%;
    max-width: 440px;
    position: relative;
    padding: 86px 30px 28px;
    border: 2px solid rgba(255, 255, 255, .8);
    border-radius: 12px;
    background: linear-gradient(
        110deg,
        rgba(222, 231, 244, .43),
        rgba(30, 57, 94, .78)
    );
    box-shadow: 0 5px 15px rgba(0, 0, 0, .18);
}

.logo-panel {
    width: 180px;
    max-width: calc(100% - 32px);
    height: 72px;
    position: absolute;
    top: -24px;
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
    width: 58px;
    height: 58px;
    object-fit: contain;
}

.form-heading {
    margin: 0 0 5px;
    font-size: 25px;
    line-height: 1.35;
    font-weight: 700;
}

.form-description {
    margin: 0 0 20px;
    font-size: 13px;
    line-height: 1.6;
    color: rgba(255, 255, 255, .85);
}

.form-group {
    margin-bottom: 13px;
}

.form-group label {
    display: block;
    margin-bottom: 6px;
    font-size: 13px;
    font-weight: 500;
}

.input-group {
    display: flex;
    width: 100%;
    min-height: 46px;
    background: var(--white);
    border-radius: 7px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, .2);
    overflow: hidden;
}

.input-icon {
    width: 44px;
    min-width: 44px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #fffdfd;
    border-right: 1px solid #dedede;
}

.input-icon img,
.input-icon svg {
    width: 21px;
    height: 21px;
    object-fit: contain;
}

.input-icon svg {
    fill: #111;
}

.input-group input {
    width: 100%;
    min-width: 0;
    padding: 10px 12px;
    border: none;
    outline: none;
    background: transparent;
    color: #222;
    font-family: inherit;
    font-size: 14px;
}

.input-group input::placeholder {
    color: #9ca3af;
}

.input-group:focus-within {
    outline: 2px solid var(--yellow);
}

.submit-button {
    width: 100%;
    min-height: 46px;
    margin-top: 8px;
    border: none;
    border-radius: 7px;
    background: var(--yellow);
    color: #17345d;
    font-family: inherit;
    font-size: 15px;
    font-weight: 700;
    cursor: pointer;
    box-shadow: 0 2px 5px rgba(0, 0, 0, .2);
    transition: background .2s, transform .2s;
}

.submit-button:hover {
    background: #f3c400;
    transform: translateY(-1px);
}

.form-footer {
    margin: 18px 0 0;
    text-align: center;
    font-size: 13px;
    line-height: 1.8;
}

.form-footer a {
    color: #fff000;
    font-weight: 600;
    text-decoration: none;
}

.form-footer a:hover {
    text-decoration: underline;
}

.alert-error {
    margin-bottom: 15px;
    padding: 10px 12px;
    border: 1px solid #ffcaca;
    border-radius: 7px;
    background: rgba(120, 0, 0, .4);
    color: white;
    font-size: 12px;
    line-height: 1.6;
    overflow-wrap: anywhere;
}

@media (max-width: 600px) {
    .site-header {
        min-height: 76px;
        padding: 10px 16px;
    }

    .brand-logo {
        width: 48px;
        height: 48px;
    }

    .brand {
        gap: 9px;
    }

    .brand-name {
        font-size: 19px;
        letter-spacing: 1.5px;
    }

    .brand-tagline {
        font-size: 9px;
    }

    body::before {
        top: 76px;
    }

    .register-wrapper {
        padding: 42px 14px 28px;
    }

    .register-panel {
        max-width: 420px;
        padding: 78px 20px 24px;
    }

    .logo-panel {
        width: 150px;
        height: 64px;
        top: -21px;
    }

    .logo-panel img {
        width: 52px;
        height: 52px;
    }

    .form-heading {
        font-size: 23px;
    }
}

@media (max-width: 360px) {
    .register-panel {
        padding-right: 15px;
        padding-left: 15px;
    }

    .input-icon {
        width: 38px;
        min-width: 38px;
    }

    .input-group input {
        padding-right: 8px;
        padding-left: 9px;
        font-size: 12px;
    }
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

    <main class="register-wrapper">
        <section class="register-panel">

            <div class="logo-panel">
                <img
                    src="{{ asset('images/logo-umrah.png') }}"
                    alt="Logo Universitas Maritim Raja Ali Haji"
                >
            </div>

            <h2 class="form-heading">Buat Akun</h2>
            <p class="form-description">
                Daftar untuk menggunakan layanan TemuBarang.
            </p>

            @if ($errors->any())
                <div class="alert-error">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('register.process') }}">
                @csrf

                <div class="form-group">
                    <label for="nim_nip">NIM/NIP</label>
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
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
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
                            id="name"
                            type="text"
                            name="name"
                            placeholder="Masukkan nama lengkap"
                            value="{{ old('name') }}"
                            autocomplete="name"
                            required
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-group">
                        <span class="input-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm0 4-8 5-8-5V6l8 5 8-5v2Z"/>
                            </svg>
                        </span>
                        <input
                            id="email"
                            type="email"
                            name="email"
                            placeholder="Masukkan email aktif"
                            value="{{ old('email') }}"
                            autocomplete="email"
                            required
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
                            placeholder="Minimal 8 karakter"
                            autocomplete="new-password"
                            minlength="8"
                            required
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Kata Sandi</label>
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
                            id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            placeholder="Ulangi kata sandi"
                            autocomplete="new-password"
                            minlength="8"
                            required
                        >
                    </div>
                </div>

                <button type="submit" class="submit-button">
                    Daftar
                </button>
            </form>

            <p class="form-footer">
                Sudah punya akun?
                <a href="{{ route('login') }}">Masuk di sini</a>
            </p>

        </section>
    </main>

</body>
</html>
