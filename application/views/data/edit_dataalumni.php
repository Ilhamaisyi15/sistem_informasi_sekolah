<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 ">Edit Data Alumni</h1>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">

            <form action="" method="POST">
                <h5 class="font-weight-bold">NISN</h5>
                <input type="hidden" name="id_alumni" value="<?= $getidalumni['id_alumni']; ?>">
                <input type="text" name="nisn" placeholder="nisn" value="<?= $getidalumni['nisn'];   ?>">
                <?= form_error('nisn', '<small class="text-danger pl-3"', '</small>'); ?>
                <br>
                <br>
                <h5 class="font-weight-bold">Nama</h5>
                <input type="text" name="nama" placeholder="nama" value="<?= $getidalumni['nama'];  ?>">
                <?= form_error('nama', '<small class="text-danger pl-3"', '</small>'); ?>
                <br>
                <br>
                <h5 class="font-weight-bold">Alamat</h5>
                <input type="text" name="alamat" placeholder="ALAMAT" value="<?= $getidalumni['alamat'];  ?>">
                <?= form_error('alamat', '<small class="text-danger pl-3"', '</small>'); ?>
                <br>
                <br>
                <h5 class="font-weight-bold">Tahun Lulus</h5>
                <select name="th_lulus" id="" value="<?= $getidguru['th_lulus'];  ?>">
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
                </select>
                <br>
                <br>
                <button name="submit" type="submit" class="btn btn-dark">Simpan</button>

            </form>

        </div>
    </section>

</div>