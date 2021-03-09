 <div class="content-wrapper">
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <!-- <h1 class="m-0 ">Data Siswa</h1> -->
         </div>
         <div class="col-sm-6">
         </div>
       </div>
     </div>
   </div>
   <section class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-8">

           <div class="card card-dark ">
             <div class="card-header">
               <h3 class="card-title"><?= $judul;  ?></h3>
             </div>
           </div>

           <form action="" method="POST">
             <div class="card-body">
               <div class="form-group">
                 <label for="nis">NIS</label>
                 <input class="form-control" type="text" name="nis" placeholder="NIS">
                 <?= form_error('nis', '<small class="text-danger pl-3"', '</small>'); ?>
               </div>
               <div class="form-group">
                 <label for="nama">Nama</label>
                 <input class="form-control" type="text" name="nama" placeholder="Nama">
                 <?= form_error('nama', '<small class="text-danger pl-3"', '</small>'); ?>
               </div>

               <div class="form-group">
                 <label for="ttl">Tanggal Lahir</label>
                 <input class="form-control" type="date" name="ttl" placeholder="Tanggal Lahir">
                 <?= form_error('ttl', '<small class="text-danger pl-3"', '</small>'); ?>
               </div>

               <div class="form-group">
                 <label for="alamat">Alamat</label>
                 <input class="form-control" type="text" name="alamat" placeholder="Alamat">
                 <?= form_error('alamat', '<small class="text-danger pl-3"', '</small>'); ?>

               </div>

               <div class="form-group">
                 <label for="exampleSelectBorderWidth2">Jenis Kelamin</label>
                 <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2" name="jk">
                   <option value="">Pilih</option>
                   <option value="laki-laki">Laki-laki</option>
                   <option value="perempuan">Perempuan</option>

                 </select>
                 <?= form_error('jk', '<small class="text-danger pl-3"', '</small>'); ?>
               </div>

               <div class="form-group">
                 <div class="form-group">
                   <label for="exampleSelectBorderWidth2">Kelas</label>
                   <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2" name="kelas">
                     <option value="">Pilih</option>
                     <option value="VII (Tujuh)">VII (Tujuh)</option>
                     <option value="VIII (Delapan)"> VIII (Delapan)</option>
                     <option value="IX (Sembilan)"> IX (Sembilan)</option>
                   </select>
                 </div>
               </div>
               <button type="submit" class="btn btn-dark">Tambah Data</button>
           </form>
         </div>
       </div>

     </div>
   </section>

 </div>