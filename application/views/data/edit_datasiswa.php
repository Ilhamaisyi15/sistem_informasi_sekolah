<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 ">Edit Data Siswa</h1>
        </div>
        <div class="col-sm-6">

        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="container-fluid">

      <form action="" method="POST">
        <h5 class="font-weight-bold">NIS</h5>
        <input type="hidden" name="id_siswa" value="<?= $getsiswa['id_siswa']; ?>">
        <input type="text" name="nis" placeholder="NIS" value="<?= $getsiswa['nis'];   ?>">
        <?= form_error('nis', '<small class="text-danger pl-3"', '</small>'); ?>
        <br>
        <br>
        <h5 class="font-weight-bold">Nama</h5>
        <input type="text" name="nama" placeholder="NAMA" value="<?= $getsiswa['nama'];  ?>">
        <?= form_error('nama', '<small class="text-danger pl-3"', '</small>'); ?>
        <br>
        <br>
        <h5 class="font-weight-bold">Tanggal Lahir</h5>
        <input type="date" name="ttl" placeholder="TTL" value="<?= $getsiswa['ttl'];  ?>">
        <?= form_error('ttl', '<small class="text-danger pl-3"', '</small>'); ?>
        <br>
        <br>
        <h5 class="font-weight-bold">Alamat</h5>
        <input type="text" name="alamat" placeholder="ALAMAT" value="<?= $getsiswa['alamat'];  ?>">
        <?= form_error('alamat', '<small class="text-danger pl-3"', '</small>'); ?>
        <br>
        <br>
        <h5 class="font-weight-bold">Jenis Kelamin</h5>
        <select name="jk" id="" value="<?= $getsiswa['jk'];  ?>">
          <option value="">Pilih</option>
          <option value="laki-laki">Laki-laki</option>
          <option value="perempuan">Perempuan</option>

        </select>
        <?= form_error('jk', '<small class="text-danger pl-3"', '</small>'); ?>
        <br>
        <br>
        <h5 class="font-weight-bold">Kelas</h5>
        <select name="kelas" id="kelas" value="<?= $getsiswa['kelas']; ?>">
          <option value="">Pilih</option>
          <option value="VII (Tujuh)">VII (Tujuh)</option>
          <option value="VIII (Delapan)"> VII (Delapan)</option>
          <option value="XI ()Sembilan"> XI (Sembilan)</option>

        </select>
        <br>
        <br>
        <button name="submit" type="submit" class="btn btn-danger">Tambah Data</button>

      </form>

    </div>
  </section>

</div>