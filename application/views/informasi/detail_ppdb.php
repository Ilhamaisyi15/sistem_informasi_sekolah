  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-12">
                      <h1 class="text-center font-weight-bolder" class="m-0">Detail Calon Data Peserta Didik Baru</h1><br>
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
                              <td>NISN</td>
                              <td><?= $ppdb['nisn'];  ?></td>
                          </tr>
                          <tr>
                              <td>Nama</td>
                              <td><?= $ppdb['nama']; ?></td>
                          </tr>
                          <tr>
                              <td>Jenis Kelamin</td>
                              <td><?= $ppdb['jk']; ?></td>
                          </tr>
                          <tr>
                              <td>Tanggal Lahir</td>
                              <td><?= $ppdb['ttl']; ?></td>
                          </tr>
                          <tr>
                              <td>Agama</td>
                              <td><?= $ppdb['agama']; ?></td>
                          </tr>
                          <tr>
                              <td>Anak Ke-</td>
                              <td><?= $ppdb['anak_ke']; ?></td>
                          </tr>
                          <tr>
                              <td>Status</td>
                              <td><?= $ppdb['status']; ?></td>
                          </tr>
                          <tr>
                              <td>Alamat</td>
                              <td><?= $ppdb['alamat']; ?></td>
                          </tr>
                          <tr>
                              <td>No. Telepon</td>
                              <td><?= $ppdb['no_telp']; ?></td>
                          </tr>
                          <tr>
                              <td>Asal Sekolah</td>
                              <td><?= $ppdb['asal_sekolah']; ?></td>
                          </tr>
                          <tr>
                              <td>Nilai Akhir</td>
                              <td><?= $ppdb['nilai_akhir']; ?></td>
                          </tr>
                          <tr>
                              <td>Nilai Rata</td>
                              <td><?= $ppdb['nilai_rata']; ?></td>
                          </tr>
                          <tr>
                              <td>Nama Orang Tua</td>
                              <td><?= $ppdb['nama_ortu']; ?></td>
                          </tr>
                          <tr>
                              <td>Tanggal Lahir</td>
                              <td><?= $ppdb['ttl_ortu']; ?></td>
                          </tr>
                          <tr>
                              <td>Alamat</td>
                              <td><?= $ppdb['alamat']; ?></td>
                          </tr>
                          <tr>
                              <td>Pekerjaan</td>
                              <td><?= $ppdb['pekerjaan']; ?></td>
                          </tr>
                          <tr>
                              <td>Penghasilan</td>
                              <td><?= $ppdb['penghasilan']; ?></td>
                          </tr>
                      </table> <br>
                      <a class="btn btn-dark" href="<?= base_url("Informasi/ppdb") ?>">Kembali</a>
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