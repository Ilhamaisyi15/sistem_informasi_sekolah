 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Siswa</h3>
              </div>
              <form action=""  method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="text" name="nip" class="form-control" value="<?= set_value('nis'); ?>"   id="nis" placeholder="NIS">
                    <?= form_error('nis', '<small class="text-danger pl-3"', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  
                  <div class="form-group">
                    <label for="ttl">Tempat Tanggal Lahir</label>
                    <input type="date" name="ttl" class="form-control" id="ttl" placeholder="ttl">
                    <?= form_error('ttl', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="alamat">
                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="form-group">
                  <label for="jenis kelamin"> Jenis Kelamin </label>
                  <select class="custom-select form-control-border" name="jeniskelamin" id="jenis kelamin">
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                    </select>
                    <?= form_error('jenis kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <select class="custom-select form-control-border" name="kelas" id="kelas">
                     <option value="VII (Tujuh),">VII (Tujuh)</option>
                     <option value="VIII (Delapan)">VIII (Delapan)</option>
                     <option value="IX (Sembilan)">IX (Sembilan)</option>
                     </select>
                     <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div> 

                </div>

                <div class="card-footer">
                  <button type="submit"  class="btn btn-primary">Tambah Data</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
           
             <!-- /.card -->

            <!-- Input addon -->
           
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
 
    </div>