<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav>
                    <ol class="breadcrumb bg-transparent pl-0">
                        <li class="breadcrumb-item"><a href="<?= base_url('User'); ?>">
                                <h5>Home</h5>
                            </a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <h5>Data Guru</h5>
                        </li>
                    </ol>
                </nav>

                <div class="row">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center" scope="col">No</th>
                                <th class="text-center" scope="col">Foto</th>
                                <th class="text-center" scope="col">NIP</th>
                                <th class="text-center" scope="col">Nama</th>
                                <th class="text-center" scope="col">Alamat</th>
                                <th class="text-center" scope="col">Pendidikan</th>
                                <th class="text-center" scope="col">Mata pelajaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data_guru as $guru) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td> <img width="160px" height="160px" class="img-fluid" src="<?= base_url('asset/gambar/guru/') . $guru['foto']; ?>" alt="<?= $guru['nama']; ?>"> </td>
                                    <td class="text-center"><?= $guru['nip']; ?></td>
                                    <td class="text-center"><?= $guru['nama']; ?></td>
                                    <td class="text-center"><?= $guru['alamat']; ?></td>
                                    <td class="text-center"><?= $guru['pendidikan']; ?></td>
                                    <td class="text-center"><?= $guru['mapel']; ?></td>
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