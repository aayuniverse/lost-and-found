<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - TemuBarang</title>
</head>
<body>
    <h1>Selamat datang di TemuBarang!</h1>
    <p>Halo, {{ auth()->user()->name }}.</p>

    <h2>Menu Mahasiswa</h2>
    <ul>
        <li><a href="{{ route('barang.cari') }}">Cari Barang</a></li>
        <li><a href="{{ route('barang.hilang') }}">Barang Hilang</a></li>
        <li><a href="{{ route('barang.ditemukan') }}">Barang Ditemukan</a></li>
        <li><a href="{{ route('barang.laporkan') }}">Laporkan Barang</a></li>
    </ul>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Keluar</button>
    </form>
</body>
</html>
