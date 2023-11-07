<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tambahkan link Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <title>CV by Rindi Devi</title>

    <style>
    /* Tambahkan gaya kustom untuk latar belakang navbar */
    .navbar-custom {
        background-color: #0B22FF;
        /* Warna latar belakang biru tua */
    }

    /* Gaya untuk foto profil */
    .profile-picture {
        width: 150px;
        /* Lebar foto profil */
        height: 150px;
        /* Tinggi foto profil */
        border-radius: 50%;
        /* Membuat foto profil berbentuk bulat */
        object-fit: cover;
        /* Memastikan gambar tidak terdistorsi */
        margin: 20px auto;
        /* Margins untuk penempatan foto profil */
        display: block;
        /* Memastikan foto profil berada di tengah */
    }
    </style>
</head>

<body>

    <!-- Membuat navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <!-- Gunakan kelas CSS yang telah ditambahkan -->
        <div class="container">
            <a class="navbar-brand" href="#">RinDI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">My CV</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">About Me</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br><br>
    <!-- Tambahkan foto profil -->
    <div class="container text-center">
        <img src="/images/pot.jpg" alt="Foto Profil" class="profile-picture">

        <h3>Rindi Devi</h3>
        <h5>Mahasiswa</h5>

        <br>

        <hr>
        <!-- ini adalah garis lurus -->


        <h5>Overview</h5>

        <p>Nama saya Rindi Devi, nama panggilan saya Rindi. <br> Saya mahasiswa Politeknik Negeri Bengkalis<br>
            Jurusan Teknik Informatika, Program Studi Rekayasa Perangkat Lunak.<br>
            Saat ini saya telah semester 5.
        </p>


    </div>

    <!-- Tambahkan tabel -->
    <div class="container mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Skill</th>
                    <th>Pengalaman Organisasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Saya memiliki skill pada seni tarik suara<br>
                        semenjak tahun 2014 saya memperdalami ilmu<br>
                        seni baca alquran.
                    </td>
                    <td>Saya pernah mengikuti organisasi HMTI pada tahun 2021, <br>
                        tetapi hanya berselang selama satu tahun saja<br>
                        Setelah itu saya mengikuti UKM Kesenian Bathin Alam<br>
                        dimana saya masuk kedalam Devisi Musik.
                    </td>
                </tr>

            </tbody>
        </table>

        <br><br>
        <hr>
    </div>

    <!-- footer -->
    <section>
        <footer class="bg-light text-primary pt-5 pb-4">
            <div class="container text-md-left">
                <div class="row text-md-left">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Ferisable</h5>
                        <p>Halaman berisi CV tentang diri Saya.</p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Proyek</h5>
                        <p>
                            <a href="#" class="text-primary" style="text-decoration: none;">My Curiculum Vitae</a>
                        </p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Sosial Media</h5>
                        <p>
                            <a href="https://www.instagram.com/rindidevi_/" class="text-primary"
                                style="text-decoration: none;"><i class="bi bi-instagram"> rindidevii_</i></a>
                        </p>
                        <p>
                            <a href="#" class="text-primary" style="text-decoration: none;"><i
                                    class="bi bi-facebook">Rindyyy</i></a>
                        </p>

                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Kontak</h5>
                        <p><i class="bi bi-house-fill">Siak Kecil, Bengkalis</i></p>
                        <p><i class="bi bi-envelope-fill">rindidevi41@gmail.com</i></p>
                        <p><i class="bi bi-telephone-fill"> 082283447725</i></p>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="row align-item-center">
                    <div class="col-md-7 col-lg-8">
                        <p>Copyright @2023 All right reserved by : <a href="#" style="text-decoration: none;"><strong
                                    class="text-warning">Rindi_Devixxx</strong></p>
                    </div>
                </div>
            </div>
        </footer>
    </section>



    <!-- Tambahkan script Bootstrap JavaScript (jQuery diperlukan) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>