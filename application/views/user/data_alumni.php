<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav>
                    <ol class="breadcrumb bg-transparent pl-0">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('User'); ?>">
                                <h5>Home</h5>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <h5>Daftar Alumni</h5>
                        </li>
                    </ol>
                </nav>

                <div class="row">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center" scope="col">No</th>
                                <th class="text-center" scope="col">NISN</th>
                                <th class="text-center" scope="col">Nama</th>
                                <th class="text-center" scope="col">Alamat</th>
                                <th class="text-center" scope="col">Tahun Lulus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data_alumni as $alumni) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td class="text-center"><?= $alumni['nisn']; ?></td>
                                    <td class="text-center"><?= $alumni['nama']; ?></td>
                                    <td class="text-center"><?= $alumni['alamat']; ?></td>
                                    <td class="text-center"><?= $alumni['th_lulus']; ?></td>
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