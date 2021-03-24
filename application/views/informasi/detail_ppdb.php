  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-12">
                      <h1 class="text-center font-weight-bolder" class="m-0">Detail Calon Data Peserta Didik Baru</h1>
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
                  <div class="col-8">
                      <div class="card">
                      </div>
                      <!-- /.card-header -->
                      <table id="example1" class="table table-bordered">
                          <div class="row">
                              <div class="col-6">
                                  <tr>
                                      <td class="text-bold ">NISN</td>
                                      <td><?= $ppdb['nisn'];  ?></td>
                                  </tr>
                                  <tr>
                                      <td class="text-bold">Nama</td>
                                      <td><?= $ppdb['nama']; ?></td>
                                  </tr>
                                  <tr>
                                      <td class="text-bold">Jenis Kelamin</td>
                                      <td><?= $ppdb['jk']; ?></td>
                                  </tr>
                                  <tr>
                                      <td class="text-bold">Tanggal Lahir</td>
                                      <td><?= $ppdb['ttl']; ?></td>
                                  </tr>
                                  <tr>
                                      <td class="text-bold">Agama</td>
                                      <td><?= $ppdb['agama']; ?></td>
                                  </tr>
                                  <tr>
                                      <td class="text-bold">Anak Ke-</td>
                                      <td><?= $ppdb['anak_ke']; ?></td>
                                  </tr>
                                  <tr>
                                      <td class="text-bold">Status</td>
                                      <td><?= $ppdb['status']; ?></td>
                                  </tr>
                                  <tr>
                                      <td class="text-bold">Alamat</td>
                                      <td><?= $ppdb['alamat']; ?></td>
                                  </tr>
                                  <tr>
                                      <td class="text-bold">No. Telepon</td>
                                      <td><?= $ppdb['no_telp']; ?></td>
                                  </tr>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-6">
                                  <tr>
                                      <td class="text-bold">Asal Sekolah</td>
                                      <td><?= $ppdb['asal_sekolah']; ?></td>
                                  </tr>
                                  <tr>
                                      <td class="text-bold">Nilai Akhir</td>
                                      <td><?= $ppdb['nilai_akhir']; ?></td>
                                  </tr>
                                  <tr>
                                      <td class="text-bold">Nilai Rata</td>
                                      <td><?= $ppdb['nilai_rata']; ?></td>
                                  </tr>
                                  <tr>
                                      <td class="text-bold">Nama Orang Tua</td>
                                      <td><?= $ppdb['nama_ortu']; ?></td>
                                  </tr>
                                  <tr>
                                      <td class="text-bold">Tanggal Lahir</td>
                                      <td><?= $ppdb['ttl_ortu']; ?></td>
                                  </tr>
                                  <tr>
                                      <td class="text-bold">Alamat</td>
                                      <td><?= $ppdb['alamat']; ?></td>
                                  </tr>
                                  <tr>
                                      <td class="text-bold">Pekerjaan</td>
                                      <td><?= $ppdb['pekerjaan']; ?></td>
                                  </tr>
                                  <tr>
                                      <td class="text-bold">Penghasilan</td>
                                      <td><?= $ppdb['penghasilan']; ?></td>
                                  </tr>
                              </div>
                          </div>
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