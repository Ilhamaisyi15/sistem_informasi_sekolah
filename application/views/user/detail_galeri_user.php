<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <nav>
                        <ol class="breadcrumb bg-transparent pl-0">
                            <li class="breadcrumb-item"><a href="<?= base_url('User'); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                        </ol>
                    </nav>
                    <div class="card-header">
                        <div class="row no-gutters">
                            <div class="card-body">
                                <div class="card-img-top">
                                    <img width="800px" height="400px" class="img-thumbnail" src="<?= base_url('asset/gambar/galeri/') . $galeri['foto']; ?>" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-text text-justify">
                                    <?= $galeri['judul']; ?>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-text text-justify">
                                    <?= $galeri['keterangan']; ?>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-subtitle">
                                    <p class="text-right"> <small><?= $galeri['tanggal'];  ?> / <?= $galeri['penulis']; ?>
                                        </small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
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
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </section>

    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase mb-5">Contact Us</h2>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.2972304002437!2d109.09162241414667!3d-7.0915036714890345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f94208e4cc003%3A0xea3cdd30014a1be!2sSMP%20Pangeran%20Diponegoro!5e0!3m2!1sid!2sid!4v1610275409124!5m2!1sid!2sid" width="500" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-2">
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
                        <div class="col-sm-2">
                            <i class=" fa-2x fas fa-comments text-white"></i>
                        </div>
                        <br>
                        <div class="col-sm-1">
                            <h5 class="text-white">:</h5>
                        </div>
                        <br>
                        <div class="col-sm-8">
                            <h5 class="text-white">ilhamaisyinurrizki@gmail.com</h5>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-2">
                            <i class="fa-2x fas fa-home text-white"></i>
                        </div>
                        <div class="col-sm-1">
                            <h5 class="text-white">:</h5>
                        </div>
                        <div class="col-sm-8">
                            <h5 class="text-left text-white">Jl. Raya Batuagung No.1 Desa Batuagung, Kecamatan Balapulang, Kabupaten Tegal</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left" class="text-center">Copyright © SMP Pangeran Diponegoro 2020</div>
        </div>
    </div>
</footer>