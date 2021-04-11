<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav>
                    <ol class="breadcrumb bg-transparent pl-0">
                        <li class="breadcrumb-item"><a href="<?= base_url('User'); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Siswa</li>
                    </ol>
                </nav>
                <div class="row">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center" scope="col">No</th>
                                <th class="text-center" scope="col">NIS</th>
                                <th class="text-center" scope="col">Nama</th>
                                <th class="text-center" scope="col">Tanggal Lahir</th>
                                <th class="text-center" scope="col">Alamat</th>
                                <th class="text-center" scope="col">Jenis Kelamin</th>
                                <th class="text-center" scope="col">Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data_siswa as $siswa) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td class="text-center"><?= $siswa['nis']; ?></td>
                                    <td class="text-center"><?= $siswa['nama']; ?></td>
                                    <td class="text-center"><?= $siswa['ttl']; ?></td>
                                    <td class="text-center"><?= $siswa['alamat']; ?></td>
                                    <td class="text-center"><?= $siswa['jk']; ?></td>
                                    <td class="text-center"><?= $siswa['kelas']; ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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

    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left" class="text-center">Copyright © SMP Pangeran Diponegoro 2020</div>
            </div>
        </div>
    </footer>
</section>