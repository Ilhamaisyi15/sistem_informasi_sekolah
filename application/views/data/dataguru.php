 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-12">
           <h1 class="text-center font-weight-bolder" class="m-0">Data Guru <br> SMP Pangeran Diponegoro</h1><br>
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
           <a class="btn btn-primary" href="<?= base_url("Data/tambahdataguru") ?>">Tambah Data Guru</a>
           <table id="example1" class="table table-bordered table-striped">
             <thead class="thead-dark">
               <tr>
                 <th class="text-center">No</th>
                 <th class="text-center">Foto</th>
                 <th class="text-center">NIP</th>
                 <th class="text-center">Nama</th>
                 <th class="text-center">Alamat</th>
                 <th class="text-center">Pendidikan</th>
                 <th class="text-center">Mata pelajaran</th>
                 <th class="text-center">Opsi</th>
               </tr>
             </thead>
             <tbody>
               <?php $nomer = 1; ?>
               <?php foreach ($dataguru as $siswa) : ?>
                 <tr>
                   <td><?= $nomer; ?></td>
                   <td><img width="120px" height="120px" class="img-thumbnail" src="<?= base_url('asset/gambar/guru/') . $siswa['foto']; ?>" alt="<?= $siswa["nama"]; ?>"></td>
                   <td><?= $siswa["nip"]; ?></td>
                   <td><?= $siswa["nama"]; ?></td>
                   <td><?= $siswa["alamat"]; ?></td>
                   <td><?= $siswa["pendidikan"]; ?></td>
                   <td><?= $siswa["mapel"]; ?></td>
                   <td>
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opsi</a>

                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                       <a class="dropdown-item" href="<?= base_url('Data/edit_dataguru/') .  $siswa["id_guru"]; ?>">Edit</a>
                       <a onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="dropdown-item" href="<?= base_url('Data/hapus_dataguru/') . $siswa["id_guru"];  ?>">Hapus</a>
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