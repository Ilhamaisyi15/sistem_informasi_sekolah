<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <nav>
                    <ol class="breadcrumb bg-transparent pl-0">
                        <li class="breadcrumb-item"><a href="<?= base_url('User'); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Guru</li>
                    </ol>
                </nav>
                <nav>
                    <?php foreach ($data_guru as $guru) : ?>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="<?= base_url('asset/gambar/guru/') . $guru['foto']; ?>" alt="<?= $guru['nama']; ?>" width="150" height="150" class="img-fluid rounded">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <tr>
                                            <th class="text-center" scope="col">NIP:
                                            <td class="text-center"><?= $guru['nip']; ?></td>
                                            </th> <br>
                                            <th class="text-center" scope="col">Nama:
                                            <td class="text-center"><?= $guru['nama']; ?></td>
                                            </th> <br>
                                            <th class="text-center" scope="col">Alamat:
                                            <td class="text-center"><?= $guru['alamat']; ?></td>
                                            </th><br>
                                            <th class="text-center" scope="col">Pendidikan:
                                            <td class="text-center"><?= $guru['pendidikan']; ?></td>
                                            </th><br>
                                            <th class="text-center" scope="col">Mata pelajaran:
                                            <td class="text-center"><?= $guru['mapel']; ?></td>
                                            </th><br>
                                        </tr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    <?php endforeach; ?>
                </nav>
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
        </div>
    </div>
</section>