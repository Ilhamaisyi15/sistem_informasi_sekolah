<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="text-center font-weight-bolder" class="m-0">Berita SMP Pangeran Diponegoro</h1> <br>
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
                    <div class="card card-primary ">
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input class="form-control mt-3 " type="text" name="judul" placeholder="judul">
                            <script src="<?= base_url("asset/ckeditor/"); ?>ckeditor.js"></script>
                            <label for="exampleFormControlTextarea1"></label>
                            <textarea class="form-control ckeditor" name="isi" id="exampleFormControlTextarea1" rows="6"></textarea>
                            <input class="form-control mt-3 " type="text" name="penulis" placeholder="penulis">

                            <select name="status" class="form-control">
                                <option value="pendidikan">Pendidikan</option>
                                <option value="umum">Umum</option>
                                <option value="pengumuman">Pengumuman</option>
                            </select>
                            <br>
                            <div class="form-group">
                                <label for="alamat" class="">Foto</label>
                                <input class="form-control" type="file" name="foto_berita" placeholder="Foto Berita">
                                <?= form_error('alamat', '<small class="text-danger pl-3"', '</small>'); ?>
                            </div>

                        </div>
                        <button name="submit" type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>