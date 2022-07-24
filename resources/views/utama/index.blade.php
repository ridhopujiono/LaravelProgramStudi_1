<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Teknik Informatika :: Adi Karya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('template/main.css') }}" />
</head>

<body>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar" id="navbar">
        <div class="container">
            <img src="{{ asset('template/logo1.png') }}">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-item">
                                <a class="nav-link" href="#staff">Dosen</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ url('visi_misi') }}">Visi Misi Prodi</a></li>
                            <li><a class="dropdown-item" href="{{ url('tentang') }}">Tentang</a></li>
                            <li><a class="dropdown-item" href="{{ url('penghargaan') }}">Penghargaan</a></li>
                            <li><a class="dropdown-item" href="{{ url('galeri') }}">Galeri</a></li>
                        </ul>

                    <li class="nav-item">
                        <a class="nav-link" href="#portofolio">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('bergabung') }}">Bergabung</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger fw-bold" href="{{ url('logout') }}">Logout <span
                                class="fas fa-sign-out"></span> </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @if (auth()->user()->daftar == 2)
        <div class="alert alert-success text-center">Terimakasih anda telah bergabung</div>
    @elseif (auth()->user()->daftar == 1)
        <div class="alert alert-info text-center">Anda sudah mendaftar, mohon tunggu konfirmasi dari pihak administrator
        </div>
    @else
        <div class="alert alert-warning text-center">Anda belum bergabung, ayo bergabung</div>
    @endif
    <!-- banner -->
    <div class="container-fluid banner">
        <div class="container-fluid banner pt-5 pb-5">
            <div class="container text-center">
                <h1 class="display-5 mb-5">Selamat datang di website Program Studi Teknik Informatika</h1>
            </div>
        </div>
    </div>
    <!-- layanan -->
    <div class="container-fluid layanan pt-5 pb-5">
        <div class="container text-center">
            <h2 class="display-3" id="layanan">3 Alasan Memilih
                Teknik Informatika</h2>
            <div class="row pt-4">
                <div class="col-md-4">
                    <span class="lingkaran"><i style="color: rgb(64, 187, 64);" class="fas fa-check fa-5x"></i></span>
                    <h3 class="mt-3">Tenaga Pengajar yang Handal</h3>
                    <p>
                        Tenaga pengajar yang merupakan lulusan dari dalam negeri maupun luar negeri dan ditunjang dengan
                        berbagai keahlian dari berbagai profesi.
                    </p>
                </div>

                <div class="col-md-4">
                    <span class="lingkaran"><i style="color: rgb(64, 187, 64);" class="fas fa-check fa-5x"></i></span>
                    <h2 class="mt-3">Lulusan Prodi TI Cepat Kerja</h2>
                    <p>
                        Masa tunggu kerja lulusan kami hanya sekitar 3 bulan.
                    </p>
                </div>

                <div class="col-md-4">
                    <span class="lingkaran"><i style="color: rgb(64, 187, 64);" class="fas fa-check fa-5x"></i>
                    </span>
                    <h2 class="mt-3">Unggul Dalam Fasilitas</h2>
                    <p>
                        Kami memiliki laboratorium yang memadai untuk melakukan penelitian-penelitian.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- portofolio -->
    <div class="container-fluid pt-5 pb-5 bg-light">
        <div class="container text-center">
            <h2 class="display-3" id="portofolio">Berita Teknik Informatika</h2>
            <div class="row pt-4 gx-4 gy-4">
                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="http://ti.ft.uika-bogor.ac.id/assets/img/content/cover-2022-02-04%2008.22.16am.jpeg"
                            class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title">Balai Penelitian Tanaman Rempah dan Obat (Balittro) menerima
                                kunjungan dari tiga mahasiswa Fakultas Teknik Informatika Universitas Ibn Khaldun Bogor.
                            </h5>
                            <p class="text-card">
                                Bogor, 26 Januari 2022 Balai Penelitian Tanaman Rempah dan Obat (Balittro) menerima
                                kunjungan dari tiga mahasiswa Fakultas Teknik Informatika Universitas Ibn Khaldun Bogor.
                                Kunjungan kali ini dalam rangka konsultasi bahan penelitian untuk penyusunan tugas
                                akhir. Mahasiswa tersebut ingin membuat suatu sistem terkait hama dan penyakit pada
                                tanaman kunyit dan jahe. Diskusi berlangsung di ruang PPID bersama Dr. Ir. Rr. Setyowati
                                Retno Djiwanti selaku Ketua Kelompok Peneliti Proteksi Tanaman sekaligus Peneliti Hama
                                dan Penyakit pada tanaman kunyit dan jahe.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="http://ti.ft.uika-bogor.ac.id/assets/img/content/cover-2021-08-07%2010.26.09am.png"
                            class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title">13 Besar Mahasiswa Berprestasi Tingkat Nasional</h5>
                            <p class="card-text">
                                Hanif Hidayaturrahman Mahasiswa semester 6 Program Studi Teknik Informatika UIKA Bogor
                                berhasil lulus 13 besar Mahasiswa Berprestasi Tahun 2021.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="http://ti.ft.uika-bogor.ac.id/assets/img/content/cover-2021-06-04%2004.34.38am.jpeg"
                            class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title">Kegiatan Bazar dan Pameran BAPPEDALITBANG Kabupaten Bogor</h5>
                            <p class="card-text">
                                Mahasiswa/i Program Studi Teknik Informatika mengikuti kegiatan acara Bazar dan Pameran
                                Inovasi yang diselenggarakan oleh Koperasi Pegawai Bappedalitbang Kabupaten Bogor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="http://ti.ft.uika-bogor.ac.id/assets/img/content/cover-2021-05-03%2005.45.23am.jpeg"
                            class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title">Kegiatan Bukber Fakultas Teknik Dan Sains Ramadhan 1442 H</h5>
                            <p class="card-text">
                                Kegiatan Buka Bersama Fakultas Teknik dan Sains UIKA Bogor ini dilaksanakan pada tanggal
                                30 April 2021. Kegiatan ini diisi tausiah oleh Penceramah: Dr. Budi Handriyanto, M.Pd.
                                dengan mengangkat tema "Kesesuaian Sains Modern dengan Ayat-Ayat Al Quran dan Ibadah
                                Puasa.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="http://ti.ft.uika-bogor.ac.id/assets/img/content/cover-2021-03-19%2006.51.59am.jpeg"
                            class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title">Obrolan Santai Dengan Inovator Dari Kabupaten Bogor</h5>
                            <p class="card-text">
                                Kerja sama Bappedalitbang dengan Radio Tegar Beriman FM menyelenggarakan kegiatan
                                Obrolan Santai dengan Inovator dari Kabupaten Bogor dengan Tema "Inovasi E-Tracking
                                Sebagai Sistem Pemandu Wisata Berbasis Android Di Kabupaten Bogor". Hanif
                                Hidayaturrahman dan Sylviana Yuniar mahasiswa/i Program Studi Fakultas Teknik dan Sains
                                UIKA Bogor menjadi Narasumber utama. Kegiatan yang dipandu oleh Mey Cresentya ini turut
                                mengundang juga ibu Dr. Riny Kusumawati, SP, MM Kabid Litbang Bappedalitbang Kabupaten
                                Bogor.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="https://i0.wp.com/quipperhome.wpcomstaging.com/wp-content/uploads/2019/04/45a18-template-image-blog-white-4.png?resize=800%2C533"
                            class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title">Sosialisasi Kegiatan Kampus Mengajar Lembaga Pengelola dan
                                Pendidikan KEMENRISTEK DIKTI 2021</h5>
                            <p class="card-text">
                                Sosialisasi Program Kampus Mengajar Angkatan 1 Tahun 2021


                                Kampus Mengajar, bagian dari Kampus Merdeka, memanggil mahasiswa dari seluruh program
                                studi dan perguruan tinggi di Indonesia untuk berkontribusi, membuat perubahan, sambil
                                mengembangkan diri.

                                Di masa pandemi, adik-adik di Sekolah Dasar, khususnya di daerah 3T (Tertinggal,
                                Terluar, danTerdepan), mengalami tantangan belajar sementara para guru harus beradaptasi
                                dengan teknologi dan berkreasi. Mahasiswa Kampus Mengajar akan membantu mereka mengubah
                                tantangan menjadi harapan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- dosen -->
    <div class="container-fluid pt-5 pb-5 bg-light">
        <div class="container text-center">
            <h2 class="display-3" id="staff">Dosen</h2>
            <p>
                Dosen Teknik Informatika
            </p>
            <div class="row pt-4 gx-4 gy-4">
                <div class="col-md-4 text-center tim">
                    <img src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/810/profiles/19338/profileImage/profile-square-extra-small.png"
                        class="rounded-circle mb-3" />
                    <h4>Slamet</h4>
                    <p>Web Designer</p>
                    <p>
                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </p>
                </div>
                <div class="col-md-4 text-center tim">
                    <img src="http://gokubi.com/wp-content/uploads/2013/10/Steve-Andersen-Headshot-square1.jpeg"
                        class="rounded-circle mb-3" />
                    <h4>Joko</h4>
                    <p>Data Scientist</p>
                    <p>
                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </p>
                </div>
                <div class="col-md-4 text-center tim">
                    <img src="https://www.kingrosales.com/wp-content/uploads/2018/05/king-rosales-profile-photo-square.jpg"
                        class="rounded-circle mb-3" />
                    <h4>Yayan</h4>
                    <p>Network Engineer</p>
                    <p>
                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- kontak -->
    <div class="container-fluid pt-5 pb-5 kontak">
        <div class="container text-center">
            <h2 class="display-3" id="kontak">HUBUNGI KAMI</h2>
            <div class="row pt-4">
                <div class="col-md-4">
                    <span class="lingkaran"><i style="color: rgb(64, 117, 187);"
                            class="fas fa-map-marker-alt fa-4x"></i></span>
                    <h3 class="mt-3">Alamat</h3>
                    <p>
                        Jalan Ngemplak Nomer 37A, Sidorejo, Kecamatan Tuban, Kabupaten Tuban , Jawa Timur Indonesia
                    </p>
                </div>

                <div class="col-md-4">
                    <span class="lingkaran"><i style="color: rgb(64, 117, 187);"
                            class="fas fa-phone fa-4x"></i></span>
                    <h2 class="mt-3">085693765584</h2>
                </div>

                <div class="col-md-4">
                    <span class="lingkaran"><i style="color: rgb(64, 117, 187);" class="fas fa-envelope fa-4x"></i>
                    </span>
                    <h2 class="mt-3">Silahkan mengirim email anda ke alamat email di bawah ini:</h2>
                    <p>
                        agamadikarya3@gmail.com
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <a href="#navbar" class="circle justify-content-center d-none"
        style="
        position: fixed;
        right: 20px;
        bottom: 20px;
        background: red;
        border-radius: 50%;
        width: 55px;
        height: 55px;
        align-items: center;
        color: white;
        cursor: pointer;
        box-shadow: 1px 1px 7px 0px #787878;
    ">
        <div class="fas fa-arrow-alt-up"></div>
    </a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

<script>
    window.addEventListener('scroll', function() {
        document.querySelector(".circle").classList.add('d-flex')
        document.querySelector(".circle").classList.remove('d-none')
    })
</script>

</html>
