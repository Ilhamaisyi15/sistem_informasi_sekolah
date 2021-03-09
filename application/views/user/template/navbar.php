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
                <nav class="navbar navbar-expand-lg navbar-dark  fixed-top" id="mainNav">
                    <div class="image">
                        <img src="<?= base_url('asset/template_user/'); ?>assets/img/team/logo_dipo.png" width="50" height="50" class="img-circle elevation-2" alt="">
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= base_url("User"); ?>">Home <span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tentang Kami </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?= base_url('User/sejarah'); ?>">Sejarah</a>
                                    <a class="dropdown-item" href="<?= base_url("User/visimisi");  ?>">Visi & Misi</a>
                                    <a class="dropdown-item" href="<?= base_url("User/struktur");  ?>">Struktur Organisasi</a>
                                    <a class="dropdown-item" href="<?= base_url("User/fasilitas"); ?>">Fasilitas</a>
                                    <a class="dropdown-item" href="<?= base_url("User/tatatertib"); ?>">Tata Tertib</a></a>
                                    <a class="dropdown-item" href="<?= base_url("User/prestasi"); ?>">Prestasi</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Warga Sekolah
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?= base_url("User/dataGuruUser"); ?>">Daftar Guru</a>
                                    <a class="dropdown-item" href="<?= base_url("User/DataSiswaUser"); ?>">Daftar Siswa</a>
                                    <a class="dropdown-item" href="<?= base_url("User/dataAlumniUser"); ?>">Daftar Alumni</a>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url("User/berita"); ?>">Berita</a></li>
                            </li>
                            <li class="nav-item">
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url("User/ekskul"); ?>">Ekstrakulikuler</a></li>
                            </li>
                            <li class="nav-item">
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url("User/galeri"); ?>">Galeri</a></li>
                            </li>
                            <li class="nav-item">
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url("User/ppdb"); ?>">PPDB</a></li>
                            </li>
                            <li class="nav-item">
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('Auth'); ?>">Login</a></li>
                            </li>
                        </ul>
                        <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            </form> -->
                    </div>
                </nav>

            </div>
        </nav>
        <!-- Masthead-->