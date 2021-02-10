<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  fixed-top" id="mainNav">
        <div class="container">
            <div class="row">
                <div class="col-8">
                </div>
            </div>
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?= base_url('asset/template_user'); ?>assets/img/navbar-logo.svg" alt="" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('User'); ?>">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tentang Kami </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url("User/sejarah");  ?>">Sejarah</a>
                            <a class="dropdown-item" href="<?= base_url("User/visi");  ?>">Visi & Misi</a>
                            <a class="dropdown-item" href="<?= base_url("User/struktur");  ?>">Struktur Organisasi</a>
                            <a class="dropdown-item" href="<?= base_url("User/fasilitas");  ?>">Fasilitas</a>
                            <a class="dropdown-item" href="<?= base_url("User/tatatertib");  ?>">Tata Tertib</a></a>
                            <a class="dropdown-item" href="<?= base_url("User/prestasi");  ?>">Prestasi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warga Sekolah </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url("User/dataGuruUser"); ?>">Daftar Guru</a>
                            <a class="dropdown-item" href="<?= base_url("User/dataSiswaUser"); ?>">Daftar Siswa</a>
                            <a class="dropdown-item" href="<?= base_url("User/dataAlumniUser"); ?>">Daftar Alumni</a>
                            </a>
                    </li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Berita">Berita</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Ekstrakulikuler">Ekstrakulikuler</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Kritik & Saran">PPDB</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->