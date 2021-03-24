  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-12">
                      <h1 class="text-center font-weight-bolder" class="m-0">Galeri Sekolah SMP Pangeran Diponegoro</h1><br>
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
                      <a class="btn btn-dark" href="<?= base_url("Informasi/tambah_galeri") ?>">Tambah Galeri</a>
                      <table id="example1" class="table table-bordered table-striped">
                          <thead class="thead-dark">
                              <tr>
                                  <th class="text-center">Tanggal</th>
                                  <th class="text-center">Foto</th>
                                  <th class="text-center">Keterangan</th>
                                  <th class="text-center">Penulis</th>
                                  <th class="text-center">Opsi</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php foreach ($galeri as $gal) : ?>
                                  <tr>
                                      <td><?= $gal["tanggal"]; ?></td>
                                      <td><img width="80px" height="80px" class="img-thumbnail" src="<?= base_url('asset/gambar/galeri/') . $gal['foto']; ?>" alt="<?= $gal["foto"]; ?>"></td>
                                      <td><?= $gal["keterangan"]; ?></td>
                                      <td><?= $gal["penulis"]; ?></td>
                                      <td>
                                          <div class="btn-group">
                                              <button type="button" class="btn btn-dark">Aksi</button>
                                              <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <span class="sr-only">Toggle Dropdown</span>
                                              </button>
                                              <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="<?= base_url('Informasi/edit_galeri/') . $gal['id_galeri'];  ?>">Edit</a>
                                                  <a onclick="return confirm('Apakah anda ingin menghapus informasi ini?')" class="dropdown-item" href="<?= base_url('Informasi/hapus_galeri/') . $gal['id_galeri'];  ?>">Hapus</a>
                                      </td>
                                  </tr>
                              <?php endforeach; ?>
                          </tbody>
                      </table>
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