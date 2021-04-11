<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Selamat Datang Di SMP Pangeran Diponegoro</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('asset/template_user/'); ?>css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark  fixed-top" id="mainNav">
            <div class="image">
                <img src="<?= base_url('asset/template_user/'); ?>assets/img/team/logo_dipo.png" width="50" height="50" class="img-circle elevation-2" alt="">
            </div>
            <!-- <div style="width: 10%;">
            <img class="card-img-top" src="<?= base_url('asset/template_user/'); ?>assets/img/team/logo_dipo.png" width="50" height="50" class="img-fluid rounded" alt="">
            <h6 class="text-white text-align-center">SMP Dipo</h6>
        </div> -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
            </div>
        </nav>
    </div>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="display-4" class="masthead-subheading">Selamat Datang di Website SMP Pangeran Diponegoro</div>
            <div class="masthead-heading text-uppercase"></div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
    </header>
    <!-- Services-->
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <section class="page-section" id="services">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Tentang Kami</h2>
                        <br><br>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-4">
                            <span class="fa-stack fa-3x">
                                <i class="fas fa-circle fa-stack-2x text-dark"></i>
                                <i class="fas fa-users fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">Pengajar Yang Berpengalaman</h4>
                            <p class="text-muted">
                                Guru pengajar SMP Pangeran Diponegoro merupakan pengajar dengan keahlian di bidang mata pelajaran masing-masing, serta penerapan pembelajaran yang
                            </p>
                        </div>
                        <div class="col-md-4">
                            <span class="fa-stack fa-3x">
                                <i class="fas fa-circle fa-stack-2x text-dark"></i>
                                <i class="fas fa-book-open fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">Perpustakaan SMP Pangeran Diponegoro</h4>
                            <p class="text-muted">
                                Perpustakaan sekolah menyediakan beraneka ragam sumber bacaan dan referensi, serta merupakan tempat belajar dengan berbagai fasilitas yang ada.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <span class="fa-stack fa-3x">
                                <i class="fas fa-circle fa-stack-2x text-dark"></i>
                                <i class="fas fa-university fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">Fasilitas Pembelajaran Yang Lengkap</h4>
                            <p class="text-muted">
                                SMP Pangeran Diponegoro memiliki beberapa fasilitas pendukung pembelajaran yang lengkap, diantaranya Laboraturium, Prakarya, Lab.Agama, Lapangan Bola, Lapangan Voli, dll.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <span class="fa-stack fa-3x">
                                <i class="fas fa-circle fa-stack-2x text-dark"></i>
                                <i class="fas fa-trophy fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">Prestasi Sekolah</h4>
                            <p class="text-muted">
                                Prestasi sekolah yang diperoleh bermacam-macam, mulai dari bidang akademik maupun non akademik dengan prestasi tingkat daerah maupun nasional.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <span class="fa-stack fa-3x">
                                <i class="fas fa-circle fa-stack-2x text-dark"></i>
                                <i class="fas fa-universal-access fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">Bermacam Ekstrakulikuler</h4>
                            <p class="text-muted">
                                Pilihan ekstrakurikuler di SMP Pangeran Diponegoro bermacam-macam adanya, mulai dari bidang akademik, olahraga, kesenian, dan lain sebagainya.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="col-sm-8">
                <h4 class="text-center mb-6">Berita Terkini</h4>
            </div>
            <div class="row mt-5">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-6 mb-4">
                            <a class="link-berita" href="">
                                <div class="card" style="width: 80%;">
                                    <img class="card-img-top" src="<?= base_url('asset/template_user/'); ?>assets/img/berita/berita-1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="text-black-50">Gunung Everest</h5>
                                        <p class="card-text text-black-50">Ini adalah gunung everest..</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 mb-4 ">
                            <a href="">
                                <div class="card" style="width: 80%;">
                                    <img class="card-img-top" src="<?= base_url('asset/template_user/'); ?>assets/img/berita/berita-2.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="text-black-50">London Kota</h5>
                                        <p class="card-text text-black-50">Ini kota london lho..</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 mb-4 ">
                            <a href="">
                                <div class="card" style="width: 80%;">
                                    <img class="card-img-top" src="<?= base_url('asset/template_user/'); ?>assets/img/berita/berita-3.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="text-black-50">Bali Indonesia</h4>
                                        <p class="card-text text-black-50">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 mb-4 ">
                            <a href="">
                                <div class="card" style="width: 80%;">
                                    <img class="card-img-top" src="<?= base_url('asset/template_user/'); ?>assets/img/berita/berita-4.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="text-black-50">France City</h4>
                                        <p class="card-text text-black-50">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h4 class="text-center mb-3">Sambutan Kepala Sekolah</h4>
                    <p class="text align-center">
                    <h6 class="text-muted text-center">Siti Khulasoh, S. Th.I</h6>
                    </p>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?= base_url('asset/template_user/'); ?>assets/img/team/kepalasekolah.jpg" width="200" height="200" class="img-fluid rounded " alt="">
                        </div>
                        <div class="col-sm-6">

                            <p class="text-justify">
                                Bismillahhirrahmanirrahim, Assalamualaikum warahmatullahi wabarakatuh, Salam Sejahtera bagi kita semua, Shalom, Om Swastyastu, Namo Budhaya, Salam Kebajikan.
                            </p>
                        </div>
                    </div>
                    <p class="text-justify">
                        Puji syukur kami panjatkan kehadirat Tuhan Yang Maha Esa,bahwasanya dengan Rahmat dan Karunia-Nya lah Website sekolah ini dengan url www.smp-diponegoro.sch.id dapat kami wujudkan. Kami mengucapkan selamat datang di Website kami Sekolah Menengah Pertama (SMP) Pangeran Diponegoro Batuagung yang saya tunjukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum guna dapat mengakses seluruh informasi tentang segala profil, aktifitas/kegiatan serta fasilitas sekolah kami.
                    </p>
                </div>

                <div class="container">
                    <div class="col-sm-6">
                        <div class="text-center mt-5 mb-5">
                            <h4 class="section-heading text-uppercase">Galery Sekolah</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="<?= base_url('asset/template_user/'); ?>assets/img/portfolio/01-thumbnail.jpg" alt="" />
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Ruang Guru</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="<?= base_url('asset/template_user/'); ?>assets/img/portfolio/02-thumbnail.jpg" alt="" />
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Perpustakaan</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="<?= base_url('asset/template_user/'); ?>assets/img/portfolio/03-thumbnail.jpg" alt="" />
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Ruangan Belajar</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="<?= base_url('asset/template_user/'); ?>assets/img/portfolio/04-thumbnail.jpg" alt="" />
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Kantin</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!-- Team-->
    <!-- <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?= base_url('asset/template_user/'); ?>assets/img/team/1.jpg" alt="" />
                            <h4>Kay Garland</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?= base_url('asset/template_user/'); ?>assets/img/team/2.jpg" alt="" />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?= base_url('asset/template_user/'); ?>assets/img/team/3.jpg" alt="" />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- Clients-->
    <!-- <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid d-block mx-auto" src="<?= base_url('asset/template_user/'); ?>assets/img/logos/envato.jpg" alt="" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid d-block mx-auto" src="<?= base_url('asset/template_user/'); ?>assets/img/logos/designmodo.jpg" alt="" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid d-block mx-auto" src="<?= base_url('asset/template_user/'); ?>assets/img/logos/themeforest.jpg" alt="" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid d-block mx-auto" src="<?= base_url('asset/template_user/'); ?>assets/img/logos/creative-market.jpg" alt="" /></a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Contact-->
    <!-- <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase mb-5">Contact Us</h2>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.2972304002437!2d109.09162241414667!3d-7.0915036714890345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f94208e4cc003%3A0xea3cdd30014a1be!2sSMP%20Pangeran%20Diponegoro!5e0!3m2!1sid!2sid!4v1610275409124!5m2!1sid!2sid" width="450" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-3">
                            <i class=" fa-2x fas fa-phone-alt text-white"></i>
                        </div>
                        <br>
                        <div class="col-sm-1">
                            <h5 class="text-white">:</h5>
                        </div>
                        <br>
                        <div class="col-sm-8">
                            <h5 class="text-white">0283-7793901</h5>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3">
                            <i class="fa-2x fas fa-home text-white"></i>
                        </div>
                        <div class="col-sm-1">
                            <h5 class="text-white">:</h5>
                        </div>
                        <div class="col-sm-8">
                            <h5 class="text-white">Jl. Raya Batuagung No.1 Desa Batuagung, Kecamatan Balapulang, Kabupaten Tegal</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> -->
    <!-- Footer-->
    <div class="footer" style="background-color:yellow padding-top: 10px;">
        <div class="container">
            <div class="row">
                <div class="col col-md-6">
                    <p style="color:firebrick; text-align:center;"> © SMP Pangeran Diponegoro 2020 </p>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-6">
                    <p style="color:white; text-align:center;"> Jl. Raya Batuagung No.1 Batuagung, Balapulang, Tegal</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modals-->
    <!-- Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="<?= base_url('asset/template_user/'); ?>assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="<?= base_url('asset/template_user/'); ?>assets/img/portfolio/01-full.jpg" alt="" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Threads</li>
                                    <li>Category: Illustration</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="<?= base_url('asset/template_user/'); ?>assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="<?= base_url('asset/template_user/'); ?>assets/img/portfolio/02-full.jpg" alt="" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Explore</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="<?= base_url('asset/template_user/'); ?>assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="<?= base_url('asset/template_user/'); ?>assets/img/portfolio/03-full.jpg" alt="" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Finish</li>
                                    <li>Category: Identity</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 4-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="<?= base_url('asset/template_user/'); ?>assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="<?= base_url('asset/template_user/'); ?>assets/img/portfolio/04-full.jpg" alt="" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Lines</li>
                                    <li>Category: Branding</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 5-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="<?= base_url('asset/template_user/'); ?>assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="<?= base_url('asset/template_user/'); ?>assets/img/portfolio/05-full.jpg" alt="" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Southwest</li>
                                    <li>Category: Website Design</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 6-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="<?= base_url('asset/template_user/'); ?>assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="<?= base_url('asset/template_user/'); ?>assets/img/portfolio/06-full.jpg" alt="" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Window</li>
                                    <li>Category</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="<?= base_url('asset/template_user/'); ?>assets/mail/jqBootstrapValidation.js"></script>
    <script src="<?= base_url('asset/template_user/'); ?>assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('asset/template_user/'); ?>assets/js/scripts.js"></script>

    <script>
        const navbar = document.getElementById("mainNav");

        window.onscroll = function() {
            myFunction()
        };

        function myFunction() {
            if (document.body.scrollTop > 688 || document.documentElement.scrollTop > 688) {
                navbar.classList.add("bg-dark");
            } else if (document.body.scrollTop < 688 || document.documentElement.scrollTop < 688) {
                navbar.classList.remove("bg-dark")
            }
        }
    </script>
</body>

</html>