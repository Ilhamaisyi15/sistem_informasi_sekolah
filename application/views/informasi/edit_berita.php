<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="text-center font-weight-bolder" class="m-0">Berita SMP Pangeran Diponegoro</h1> <br>
                </div><!-- /.col -->
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class=" row">
                <div class="col-md-8">
                    <div class="card card-primary">
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input class="form-control mt-3 " type="text" name="judul" value="judul">
                            <script src="<?= base_url("asset/ckeditor/"); ?>ckeditor.js"></script>
                            <label for="exampleFormControlTextarea1"></label>
                            <textarea class="form-control ckeditor" name="isi" id="exampleFormControlTextarea1" rows="6"> <?= $berita['isi'];  ?></textarea>
                            <input class="form-control mt-3 " type="text" name="penulis" value="<?= $berita['penulis']; ?>">
                            <select name="status" class="form-control">
                                <option value="pendidikan">Pendidikan</option>
                                <option value="umum">Umum</option>
                                <option value="pengumuman">Pengumuman</option>
                            </select>
                            <div class="form-group">
                                <label for="foto">
                                    <h5 class="font-weight-bold">Foto</h5>
                                </label>
                                <input class="form-control" type="file" name="foto_berita" placeholder="Foto Berita">
                                <?= form_error('foto', '<small class="text-danger pl-3"', '</small>'); ?>
                            </div>
                            <input type="hidden" name="id" value="<?= $berita['id_berita'] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
</div>
</section>