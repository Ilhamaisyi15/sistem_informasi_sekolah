<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SMP Pangeran Diponegoro</title>
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
    <nav class="navbar navbar-expand-lg navbar-dark  fixed-top" id="mainNav">
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
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Beranda">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tentang Kami </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url('User/sejarah'); ?>">Sejarah</a>
                            <a class="dropdown-item" href="<?= base_url("User/visi");  ?>">Visi & Misi</a>
                            <a class="dropdown-item" href="<?= base_url("User/struktur");  ?>">Struktur Organisasi</a>
                            <a class="dropdown-item" href="<?= base_url("User/fasilitas"); ?>">Fasilitas</a>
                            <a class="dropdown-item" href="<?= base_url("User/tatatertib"); ?>">Tata Tertib</a></a>
                            <a class="dropdown-item" href="<?= base_url("User/prestasi"); ?>">Prestasi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warga Sekolah </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url("User/dataGuruUser"); ?>">Daftar Guru</a>
                            <a class="dropdown-item" href="<?= base_url("User/DataSiswaUser"); ?>">Daftar Siswa</a>
                            <a class="dropdown-item" href="<?= base_url("User/dataAlumniUser"); ?>">Daftar Alumni</a>
                            </a>
                    </li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Berita">Berita</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Acara">Acara</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Kritik & Saran">PPDB</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Login">Login</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang di Website SMP Pangeran Diponegoro</div>
            <div class="masthead-heading text-uppercase"><?= $visi['isi'];  ?></div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container ">
            <div class="text-center">
                <h2 class="section-heading text-uppercase mb-5">Sambutan Kepala Sekolah</h2>
            </div>
            <div class="row mt-3 justify-content-center mb-5">
                <div class="col-sm-4 offset-1 ">
                    <img width="350px" height="350px" class="img-fluid rounded " src="<?= base_url('asset/template_user/'); ?>assets/img/team/img-kepala.png" alt="">

                </div>
                <div class="col-sm-6 ">
                    <p>
                    <h4>Tuan Guru Bajang Ilham Aisyi M.Hum</h4>
                    </p>
                    <p class="text-justify text-muted mt-3 ">
                        Bismillahhirrahmanirrahim, Assalamualaikum warahmatullahi wabarakatuh, Salam Sejahtera bagi kita semua, Shalom, Om Swastyastu, Namo Budhaya, Salam Kebajikan.
                    </p>
                    <p class="text-justify text-muted mt-3">
                        Puji syukur kami panjatkan kehadirat Tuhan Yang Maha Esa,bahwasanya dengan Rahmat dan Karunia-Nya lah Website sekolah ini dengan url www.smp-diponegoro.sch.id dapat kami wujudkan. Kami mengucapkan selamat datang di Website kami Sekolah Menengah Pertama (SMP) Pangeran Diponegoro Batuagung yang saya tunjukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum guna dapat mengakses seluruh informasi tentang segala profil, aktifitas/kegiatan serta fasilitas sekolah kami.
                    </p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= base_url('asset/template_user/'); ?>assets/img/team/1.jpg" alt="" />
                        <h4>Mega Kusmayati</h4>
                        <p class="text-muted">Wakil Kepala 1</p>
                        <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni eius eveniet aliquid repellendus porro pariatur aperiam vero a iusto placeat quod cumque voluptates vel in voluptate reprehenderit nostrum, nihil cum.</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= base_url('asset/template_user/'); ?>assets/img/team/3.jpg" alt="" />
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Wakil Kepala 2</p>
                        <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni eius eveniet aliquid repellendus porro pariatur aperiam vero a iusto placeat quod cumque voluptates vel in voluptate reprehenderit nostrum, nihil cum.</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= base_url('asset/template_user/'); ?>assets/img/team/2.jpg" alt="" />
                        <h4>Kiki Agustin</h4>
                        <p class="text-muted">Wakil Kepala 3</p>
                        <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni eius eveniet aliquid repellendus porro pariatur aperiam vero a iusto placeat quod cumque voluptates vel in voluptate reprehenderit nostrum, nihil cum.</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Berita Terkini</h2>
            </div>
            <div class="row mt-5">
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-6 mb-4">
                            <a href="">
                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?= base_url('asset/template_user/'); ?>assets/img/berita/berita-1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="text-black-50">Gunung Everest</h4>
                                        <p class="card-text text-black-50">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 mb-4 ">
                            <a href="">
                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?= base_url('asset/template_user/'); ?>assets/img/berita/berita-2.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="text-black-50">London Kota</h4>
                                        <p class="card-text text-black-50">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 mb-4 ">
                            <a href="">
                                <div class="card" style="width: 100%;">
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
                                <div class="card" style="width: 100%;">
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
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?= base_url('asset/template_user/'); ?>assets/img/team/img-kepala.png" width="200" height="200" class="img-fluid rounded " alt="">
                        </div>
                        <div class="col-sm-6">
                            <h4>Ibu Kita Kartini</h4>

                            <p class="text-justify">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus aliquam nostrum assumenda mollitia voluptas eaque omnis, autem eum blanditiis ipsam enim inventore eligendi dolorem eligendi dolorem
                            </p>
                        </div>
                    </div>
                    <p class="text-justify">
                        alias mollitia expedita voluptatum impedit cumque officia quas natus esse, perspiciatis maiores a eveniet rem fugiat. Laborum id dicta numquam ullam esse voluptatum assumenda rem inventore veritatis. Id quod quibusdam possimus? Libero quidem ratione nisi temporibus reiciendis quod tempora doloribus molestiae optio placeat consequatur officia, mollitia sed minima rem a quia eos iusto commodi minus?
                    </p>
                </div>
            </div>

            <div class="container mb-5">
                <div class="text-center mt-5 mb-5">
                    <h2 class="section-heading text-uppercase">Galery Sekolah</h2>
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
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?= base_url('asset/template_user/'); ?>assets/img/portfolio/05-thumbnail.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Lapangan Olahraga</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?= base_url('asset/template_user/'); ?>assets/img/portfolio/06-thumbnail.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Taman Bermain</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase mb-5">EkstraKulikuler</h2>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?= base_url('asset/template_user/'); ?>assets/img/about/1.jpg" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">Pramuka</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?= base_url('asset/template_user/'); ?>assets/img/about/2.jpg" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">Paskibra</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?= base_url('asset/template_user/'); ?>assets/img/about/3.jpg" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">Bola Basket</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?= base_url('asset/template_user/'); ?>assets/img/about/4.jpg" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">Bola Voly</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Dan Masih
                            <br />
                            Banyak Lagi
                        </h4>
                    </div>
                </li>
            </ul>
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
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase mb-5">Contact Us</h2>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.2972304002437!2d109.09162241414667!3d-7.0915036714890345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f94208e4cc003%3A0xea3cdd30014a1be!2sSMP%20Pangeran%20Diponegoro!5e0!3m2!1sid!2sid!4v1610275409124!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-3">
                            <i class=" fa-2x fas fa-phone-alt text-white"></i>
                        </div>
                        <br>
                        <div class="col-sm-1">
                            <h4 class="text-white">:</h4>
                        </div>
                        <br>
                        <div class="col-sm-8">
                            <h4 class="text-white">0283-7793901</h4>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3">
                            <i class="fa-2x fas fa-home text-white"></i>
                        </div>
                        <div class="col-sm-1">
                            <h4 class="text-white">:</h4>
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-white">Jl. Raya Batuagung No.1 Desa Batuagung, Kecamatan Balapulang, Kabupaten Tegal</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left">Copyright © Your Website 2020</div>

            </div>
        </div>
    </footer>
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