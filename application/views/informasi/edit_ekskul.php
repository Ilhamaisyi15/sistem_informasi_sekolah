<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="text-center font-weight-bolder" class="m-0">Ekstrakulikuler <br> SMP Pangeran Diponegoro</h1> <br>
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
                <div class="col-md-12">
                    <div class="card carid-primary">
                    </div>
                    <form action="" method="POST">

                        <div class="form-group">
                            <input class="form-control mt-3 " type="text" name="judul" value="<?= $ekskul['judul']; ?>">
                            <script src="<?= base_url("asset/ckeditor/"); ?>ckeditor.js"></script>
                            <label for="exampleFormControlTextarea1"></label>
                            <input type="hidden" name="id" value="<?= $this->uri->segment(3) ?>">
                            <textarea class="form-control ckeditor  " name="isi" id="exampleFormControlTextarea1" rows="6"> <?= $ekskul['isi'];  ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
</div>
</section>