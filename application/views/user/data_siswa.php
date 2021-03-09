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