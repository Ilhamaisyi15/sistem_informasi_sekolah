  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-12">
                      <h1 class="text-center font-weight-bolder" class="m-0">Data Calon Peserta Didik Baru</h1><br>
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
                          <thead class="thead-dark">
                              <tr>
                                  <th class="text-center">No</th>
                                  <th class="text-center">NISN</th>
                                  <th class="text-center align-content-end">Nama</th>
                                  <th class="text-center">Jenis Kelamin</th>
                                  <th class="text-center">Tanggal Lahir</th>
                                  <th class="text-center">Agama</th>
                                  <th class="text-center">Anak-ke</th>
                                  <th class="text-center">Opsi</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php $nomer = 1; ?>
                              <?php foreach ($ppdb as $pb) :  ?>
                                  <tr>
                                      <td><?= $nomer; ?></td>
                                      <td><?= $pb['nisn'];  ?></td>
                                      <td><?= $pb['nama'];  ?></td>
                                      <td><?= $pb['jk'];  ?></td>
                                      <td><?= $pb['ttl'];  ?></td>
                                      <td><?= $pb['agama'];  ?></td>
                                      <td><?= $pb['anak_ke'];  ?></td>
                                      <td>
                                          <div class="btn-group">
                                              <button type="button" class="btn btn-dark">Aksi</button>
                                              <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <span class="sr-only">Toggle Dropdown</span>
                                              </button>
                                              <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="<?= base_url('Informasi/detail_ppdb/') . $pb['id_ppdb'];  ?>">Detail</a>
                                                  <a onclick="return confirm('Apakah anda ingin menghapus informasi ini?')" class="dropdown-item" href="<?= base_url('Informasi/hapus_ppdb/') . $pb['id_ppdb'];  ?>">Hapus</a>
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