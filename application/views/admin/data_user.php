<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data User</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="col-12">

                    <a class="btn btn-dark mb-3" href="<?= base_url('Dashboard/tambahDataUser'); ?>">Tambah Data</a>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-dark">Data User</h6>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($data_user as $user) : ?>

                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $user['name']; ?></td>
                                                <td><?= $user['email']; ?></td>
                                                <td>
                                                    <!-- Example split danger button -->
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark">Aksi</button>
                                                        <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini!!')" class="dropdown-item" href="<?= base_url('Dahsboard/hapusDataUser/') . $user['id']; ?>">Hapus</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <?php $i++; ?>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">

            </div>
        </div>
    </section>
</div>