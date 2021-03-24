  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-12">
                      <h1 class="text-center font-weight-bolder" class="m-0">Tata tertib Sekolah SMP Pangeran Diponegoro</h1><br>
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
                      <table id="example1" class="table table-bordered">
                          <tr>
                              <td>Judul</td>
                              <td><?= $tatatertib['judul'];  ?></td>
                          </tr>
                          <tr>
                              <td>Isi</td>
                              <td><?= $tatatertib['isi'];  ?></td>
                          </tr>
                          <tr>
                              <td>Penulis</td>
                              <td><?= $tatatertib['penulis']; ?></td>
                          </tr>

                          <tr>
                              <td></td>
                              <td><a class="btn btn-dark" href="<?= base_url('Dashboard/edit_tatatertib/') . $tatatertib['id_tatatertib']; ?>">Edit Tata Tertib</a></td>
                          </tr>
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