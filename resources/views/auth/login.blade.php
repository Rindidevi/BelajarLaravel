<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.mi
n.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.10.5/font/bootstrap-icons.css">
    <title>Login</title>
    <style>
    body {
        background-color: #fff;
        /* Latar belakang body putih */
        color: #000;
        /* Warna teks hitam */
        font-family: Arial, sans-serif;
    }

    .card {
        background-color: #000;
        /* Latar belakang card hitam */
        color: #fff;
        /* Warna teks putih */
        border: none;
    }

    .form-control {
        background-color: #333;
        /* Latar belakang input hitam gelap */
        color: #fff;
        /* Warna teks putih */
        border: none;
    }

    .btn-primary {
        background-color: #000;
        /* Tombol menjadi hitam */
        color: #fff;
        /* Warna teks putih */
        border: none;
        box-shadow: 2px 2px 4px #000;
        /* Bayangan hitam */
    }

    .btn-custom:active {
        background-color: #888;
        /* Warna latar belakang tombol menjadi abu-abu saat ditekan */
    }
    </style>
</head>

<body>
    <div class="container">
        <a href="/">
            <i class="bi-arrow-left h1"></i>
        </a>
    </div>
    <div class="container mt-3">
        @if (Session::get('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Login Gagal!</strong> {{ Session::get('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" arialabel="Close"></button>
        </div>
        @endif
        @if (Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" arialabel="Close"></button>
        </div>
        @endif
    </div>
    <div class="container d-flex justify-content-center align-items-center" style="margin-top: 60px">
        <div class="card" style="width: 35%">
            <div class="card-body p-4">
                <h3 class="card-title text-center">Login</h3>
                <form method="POST" action="{{ route('postLogin') }}">
                    @csrf
                    <div class="form-group mt-4">
                        <label class="text-secondary">Email Anda</label>
                        <input type="email" class="form-control border bordersecondary form-control-lg" name="email"
                            required value="{{ old('email') }}">
                        <span class="text-danger">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </span>
                    </div><br>
                    <div class="form-group mt-1">
                        <label class="text-secondary">Password Anda</label>
                        <input type="password" class="form-control border bordersecondary form-control-lg"
                            name="password">

                        <span class="text-danger">
                            @error('password')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <br><br>
                    @csrf
                    <button type="submit" class=" form-control btn btn-custom mt5">Login</button>
                </form>
                <p class="mt-2 text-center">Belum punya akun?
                    <a href="#" style="text-decoration: none;  color: #888;">
                        Ayo buat akun!
                    </a>
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>