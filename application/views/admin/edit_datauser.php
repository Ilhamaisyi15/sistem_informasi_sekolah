<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fuild">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Data User</h1>
                </div>
                <div class=col-sm-6">
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <form action="<?= base_url('Dashboard/data_user'); ?>" method="POST" enctype="multipart/form-data">
                <h5 class="font-weight-bold">Username</h5>
                <input type="text" name="username" placeholder="username" value="<?= $getiduser['username'];  ?>">
                <?= form_error('username', '<small class="text-danger pl-3"', '</small>'); ?>
                <br>
                <br>
                <h5 class="font-weight-bold">Nama</h5>
                <input type="text" name="nama" placeholder="nama" value="<?= $getiduser['nama'];  ?>">
                <?= form_error('nama', '<small class="text-danger pl-3"', '</small>'); ?>
                <br>
                <br>
                <h5 class="font-weight-bold">Password</h5>
                <input type="password" name="password-1" placeholder="password" value="<?= $getiduser['password-1'];  ?>">
                <?= form_error('password-1', '<small class="text-danger pl-3"', '</small>'); ?>
                <br>
                <br>
                <h5 class="font-weight-bold">Konfirmasi Password</h5>
                <input type="password" name="password-2" placeholder="password" value="<?= $getiduser['password-2'];  ?>">
                <?= form_error('password-2', '<small class="text-danger pl-3"', '</small>'); ?>
                <button name="submit" type="submit" class="btn btn-danger">Tambah Data</button>

            </form>
            </form>
        </div>
    </section>
</div>