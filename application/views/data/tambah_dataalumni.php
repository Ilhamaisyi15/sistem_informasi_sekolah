<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 ">Data Alumni</h1>
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
                        <div class="card-header">
                            <h3 class="card-title"><?= $judul;  ?></h3>
                        </div>
                    </div>

                    <form action="" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nisn">NISN</label>
                                <input class="form-control" type="text" name="nisn" placeholder="nisn">
                                <?= form_error('nisn', '<small class="text-danger pl-3"', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nama">NAMA</label>
                                <input class="form-control" type="text" name="nama" placeholder="nama">
                                <?= form_error('nama', '<small class="text-danger pl-3"', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="alamat">ALAMAT</label>
                                <input class="form-control" type="text" name="alamat" placeholder="alamat">
                                <?= form_error('alamat', '<small class="text-danger pl-3"', '</small>'); ?>

                            </div>

                            <div class="form-group">
                                <label for="exampleSelectBorderWidth2">TAHUN LULUS</label>
                                <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2" name="th_lulus">
                                    <option value="">Pilih</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                </select>
                                <?= form_error('th_lulus', '<small class="text-danger pl-3"', '</small>'); ?>
                            </div>

                            <button name="submit" type="submit" class="btn btn-primary">Tambah Data</button>

                    </form>
                </div>
            </div>

        </div>
    </section>

</div>