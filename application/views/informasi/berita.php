  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-12">
                      <h1 class="text-center font-weight-bolder" class="m-0">Berita SMP Pangeran Diponegoro</h1><br>
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
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                      </div>
                      <!-- /.card-header -->
                      <a class="btn btn-dark" href="<?= base_url("Informasi/tambah_berita") ?>">Tambah Berita</a>
                      <table id="example1" class="table table-bordered table-striped">
                          <thead class="thead-dark">
                              <tr>
                                  <th class="text-center">Tanggal</th>
                                  <th class="text-center align-content-end">Judul</th>
                                  <th class="text-center">Isi Berita</th>
                                  <th class="text-center">Kategori Berita</th>
                                  <th class="text-center">Penulis</th>
                                  <th class="text-center">Opsi</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php $nomer = 1; ?>
                              <?php foreach ($berita as $bt) :  ?>
                                  <tr>
                                      <td><?= $bt['tanggal'];  ?></td>
                                      <td><?= $bt['judul'];  ?></td>
                                      <td><?= $bt['ringkas'];  ?>...</td>
                                      <td><?= $bt['status'];  ?></td>
                                      <td><?= $bt['penulis'];  ?></td>
                                      <td>
                                          <div class="btn-group">
                                              <button type="button" class="btn btn-dark">Aksi</button>
                                              <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <span class="sr-only">Toggle Dropdown</span>
                                              </button>
                                              <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="<?= base_url('Informasi/detail_berita/') . $bt['id_berita'];  ?>">Detail</a>
                                                  <a class="dropdown-item" href="<?= base_url('Informasi/edit_berita/') . $bt['id_berita'];  ?>">Edit</a>
                                                  <a onclick="return confirm('Apakah anda ingin menghapus informasi ini?')" class="dropdown-item" href="<?= base_url('Informasi/hapus_berita/') . $bt['id_berita'];  ?>">Hapus</a>
                                      </td>
                                  </tr>
                                  <?php $nomer++; ?>
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