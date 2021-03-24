 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-12">
           <h1 class="text-center font-weight-bolder" class="m-0">Data Siswa <br> SMP Pangeran Diponegoro</h1> <br>

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
       <div class=" row">
         <div class="col-12">
           <div class="card">
           </div>
           <!-- /.card-header -->

           <a class="btn btn-dark" href="<?= base_url("Data/tambahdatasiswa") ?>">Tambah Data Siswa</a>
           <table id="example1" class="table table-bordered">
             <thead class="thead-dark">
               <tr>
                 <th class="text-center">No</th>
                 <th class="text-center">NIS</th>
                 <th class="text-center">Nama</th>
                 <th class="text-center">Tanggal Lahir</th>
                 <th class="text-center">Alamat</th>
                 <th class="text-center">Jenis Kelamin</th>
                 <th class="text-center">Kelas</th>
                 <th class="text-center">Opsi</th>
               </tr>
             </thead>
             <tbody>
               <?php $nomer = 1; ?>
               <?php foreach ($datasiswa as $siswa) : ?>

                 <tr>
                   <td><?= $nomer; ?></td>
                   <td><?= $siswa["nis"]; ?></td>
                   <td><?= $siswa["nama"]; ?></td>
                   <td><?= $siswa["ttl"]; ?></td>
                   <td><?= $siswa["alamat"]; ?></td>
                   <td><?= $siswa["jk"]; ?></td>
                   <td><?= $siswa["kelas"]; ?></td>
                   <td>
                     <div class="btn-group">
                       <button type="button" class="btn btn-dark">Aksi</button>
                       <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <span class="sr-only">Toggle Dropdown</span>
                       </button>
                       <div class="dropdown-menu">
                         <a class="dropdown-item" href="<?= base_url('Data/edit_datasiswa/') . $siswa["id_siswa"]; ?>">Edit</a>
                         <a onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="dropdown-item" href="<?= base_url('Data/hapus_datasiswa/') . $siswa["id_siswa"];  ?>">Hapus</a>
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