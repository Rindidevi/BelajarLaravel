<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background-image: url('/images/wk.jpg');
        /* Gantilah 'nama_gambar.jpg' dengan path ke gambar latar belakang Anda */
        background-size: cover;
        /* Untuk mengisi seluruh area latar belakang */
        background-position: center;
        /* Posisi gambar latar belakang di tengah halaman */
    }

    /* Gaya untuk latar belakang navbar */
    .navbar {
        background-color: black;
        color: white;
        padding: 15px 0;
        display: flex;
        justify-content: space-between;
    }

    /* Gaya untuk logo */
    .navbar-brand {
        font-size: 24px;
        font-weight: bold;
        text-decoration: none;
        color: white;
    }

    /* Gaya untuk daftar navigasi */
    .navbar-nav {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }

    /* Gaya untuk item navigasi */
    .nav-item {
        margin-right: 20px;
        /* Margin kanan antara item navigasi */
    }

    /* Gaya untuk tautan navigasi */
    .nav-link {
        text-decoration: none;
        /* Menghapus garis bawah pada tautan */
        color: white;
        /* Warna teks putih */
    }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                Politeknik Negeri Bengkalis | D-IV Rekayasa Perangkat Lunak</a>
        </div>
    </nav>
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-secondary text-white">Selamat Datang!</h1>
                <h4 class="text-secondary text-white">
                    Di Perpustakaan Negeri Bengkalis
                </h4>
                <h6 class="mt-3">
                    <span style="color: white;">Silahkan</span>
                    <a href="{{ route('auth.login') }}" style="text-decoration: none;  color: #888;">masuk</a>
                    <span style="color: white;">Atau</span> <a href="{{ route('auth.register') }}"
                        style="text-decoration: none;  color: #888;">daftar</a>
                    <span style="color: white;">Jika Anda Belum Memiliki Akun</span>
                </h6>

                <a href="{{ route('biodata') }}" class="btn btn-dark mt-3">Biodata</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>