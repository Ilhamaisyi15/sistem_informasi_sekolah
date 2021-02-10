 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-12">
                     <h1 class="text-center font-weight-bold" class="m-0">Data Alumni <br> SMP Pangeran Diponegoro</h1><br>
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
                 </div>
                 <!-- /.card-header -->

                 <a class="btn btn-primary" href="<?= base_url("Data/tambah_dataalumni") ?>">Tambah Data Alumni</a>
                 <table id="example1" class="table table-bordered table-striped">
                     <thead class="thead-dark">
                         <tr>
                             <th class="text-center">No</th>
                             <th class="text-center">NISN</th>
                             <th class="text-center">Nama</th>
                             <th class="text-center">Alamat</th>
                             <th class="text-center">Tahun Lulus</th>
                             <th class="text-center">Opsi</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php $nomer = 1; ?>
                         <?php foreach ($data_alumni as $siswa) : ?>
                             <tr>
                                 <td><?= $nomer; ?></td>
                                 <td><?= $siswa["nisn"]; ?></td>
                                 <td><?= $siswa["nama"]; ?></td>
                                 <td><?= $siswa["alamat"]; ?></td>
                                 <td><?= $siswa["th_lulus"]; ?></td>
                                 <td>
                                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opsi</a>

                                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                         <a class="dropdown-item" href="<?= base_url('Data/edit_dataalumni/') .  $siswa["id_alumni"]; ?>">Edit</a>
                                         <a onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="dropdown-item" href="<?= base_url('Data/hapus_dataalumni/') . $siswa["id_alumni"];  ?>">Hapus</a>
                                 </td>
                             </tr>
                             <?php $nomer++; ?>
                         <?php endforeach; ?>
                     </tbody>
                 </table>
                 <!-- /.card-body -->
                 <!-- /.card -->
             </div>
             <!-- /.col -->
         </div>
         <!-- /.row -->
 </div>
 <!-- /.container-fluid -->
 </section>
 </div>