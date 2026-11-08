<!DOCTYPE html>
<html>
<head>
    <title>Kategori Buku</title>
</head>
<body>
    <h1>Hasil Pencarian Kategori: {{ $nama_kategori }}</h1>

    <!-- Mengecek apakah ada buku di kategori tersebut -->
    @if(count($daftar_buku) > 0)
        <p>Buku yang tersedia:</p>
        <ul>
            <!-- Mengulang data buku yang ditemukan -->
            @foreach($daftar_buku as $buku)
                <li>{{ $buku['judul'] }}</li>
            @endforeach
        </ul>
    @else
        <!-- Tampil jika data kosong -->
        <p>Maaf, belum ada buku untuk kategori <b>{{ $nama_kategori }}</b>.</p>
    @endif

    <br>
    <a href="{{ url('/buku') }}">Kembali ke Daftar Buku</a>
</body>
</html>