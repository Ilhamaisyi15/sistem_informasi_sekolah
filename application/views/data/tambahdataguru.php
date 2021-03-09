<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1 class="m-0 ">Data Guru</h1> -->
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">

                    <div class="card card-dark ">
                        <div class="card-header">
                            <h3 class="card-title"><?= $judul;  ?></h3>
                        </div>
                    </div>

                    <form action="" method="POST" enctype="multipart/form-data">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input class="form-control" type="text" name="nip" placeholder="nip">
                                <?= form_error('nip', '<small class="text-danger pl-3"', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" name="nama" placeholder="nama">
                                <?= form_error('nama', '<small class="text-danger pl-3"', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input class="form-control" type="text" name="alamat" placeholder="alamat">
                                <?= form_error('alamat', '<small class="text-danger pl-3"', '</small>'); ?>

                            </div>

                            <div class="form-group">
                                <label for="exampleSelectBorderWidth2">Pendidikan</label>
                                <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2" name="pendidikan">
                                    <option value="">Pilih</option>
                                    <option value="SMA/SMK">SMA/SMK</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                </select>
                                <?= form_error('pendidikan', '<small class="text-danger pl-3"', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleSelectBorderWidth2">Mapel</label>
                                    <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2" name="mapel">
                                        <option value="">Pilih</option>
                                        <option value="Matematika">Matematika</option>
                                        <option value="Bahasa Inggris"> Bahasa Inggris</option>
                                        <option value="Bahasa Indonesia"> Bahasa Indonesia</option>
                                        <option value="IPA"> IPA</option>
                                        <option value="IPS"> IPS</option>
                                        <option value="PKN"> PKN</option>
                                        <option value="Agama"> Agama</option>
                                        <option value="BTQ"> BTQ</option>
                                        <option value="Olahraga"> Olahraga</option>
                                        <option value="Bahasa Jawa"> Bahasa Jawa</option>
                                        <option value="Prakarya"> Prakarya</option>
                                        <option value="SBK"> SBK</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Foto</label>
                                <input class="form-control" type="file" name="foto_guru" placeholder="Foto Guru">
                                <?= form_error('alamat', '<small class="text-danger pl-3"', '</small>'); ?>

                            </div>

                            <button name="submit" type="submit" class="btn btn-dark">Tambah Data</button>

                    </form>
                </div>
            </div>

        </div>
    </section>

</div>