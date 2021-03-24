  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-12">
                      <h1 class="text-center font-weight-bolder" class="m-0">Detail Berita</h1><br>
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
                  <div class="col-12">
                      <div class="card">
                      </div>
                      <!-- /.card-header -->
                      <table id="example1" class="table table-bordered table-striped">
                          <tr>
                              <td>Foto</td>
                              <td>
                                  <img width="500px" height="400px" class="img-thumbnail" src="<?= base_url('asset/gambar/berita/') . $berita['foto']; ?>" alt="">
                              </td>
                          </tr>
                          <tr>
                              <td>Judul</td>
                              <td><?= $berita['judul'];  ?></td>
                          </tr>
                          <tr>
                              <td>Isi</td>
                              <td><?= $berita['isi']; ?></td>
                          </tr>
                          <tr>
                              <td>Kategori</td>
                              <td><?= $berita['status']; ?></td>
                          </tr>
                          <tr>
                              <td>Penulis</td>
                              <td><?= $berita['penulis']; ?></td>
                          </tr>
                      </table> <br>
                      <a class="btn btn-dark" href="<?= base_url("Informasi/berita") ?>">Kembali</a>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
              </div>
              <!-- /.col -->
          </div>
          <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
  </section>
  </div>