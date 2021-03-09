 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0" class="type text-bold">Dashboard</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item active">Dashboard</li>
           </ol>
         </div><!-- /.col -->

       </div><!-- /.col -->
     </div><!-- /.row -->
   </div><!-- /.container-fluid -->

   <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
     <div class="container-fluid">
       <!-- Small boxes (Stat box) -->
       <div class="row">
         <div class="col-lg-3 col-6">
           <!-- small box -->
           <div class="small-box bg-info">
             <div class="inner">
               <h4>Daftar Guru</h4>
               <br>
             </div>
             <div class="icon">
               <i class="ion ion-person-add"></i>
             </div>
             <a href="<?= base_url("Data/data_guru"); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
           </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
           <!-- small box -->
           <div class="small-box bg-success">
             <div class="inner">
               <h4>Daftar Siswa</h4>
               <br>
             </div>
             <div class="icon">
               <i class="ion ion-person-add"></i>
             </div>
             <a href="<?= base_url("Data/data_siswa"); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
           </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
           <!-- small box -->
           <div class="small-box bg-warning">
             <div class="inner">
               <h4>Daftar Alumni</h4>
               <br>
             </div>
             <div class="icon">
               <i class="ion ion-person-add"></i>
             </div>
             <a href="<?= base_url("Data/data_alumni"); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
           </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
           <!-- small box -->
           <div class="small-box bg-danger">
             <div class="inner">
               <h4>Daftar Pendaftar</h4>
               <br>
             </div>
             <div class="icon">
               <i class="ion ion-pie-graph"></i>
             </div>
             <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
           </div>
         </div><!-- /.container-fluid -->
   </section>

   <section class="content">
     <div class="container-fluid">
       <div class="jumbotron mt-3">
         <div class="col-12">
           <div class="row">
             <div class="col-sm-2">
               <nav>
                 <div style="width: 120%;">
                   <img class="card-img-top" src="<?= base_url('asset/template_user/'); ?>assets/img/team/logo_dipo.png" width="10" height="200" class="img-fluid rounded " alt="">
                 </div>
               </nav>
             </div>
             <div class="col-sm-10">
               <nav>
                 <h1>Selamat Datang di</h1>
                 <h1 class="display-4"> SMP Pangeran Diponegoro</h1>
                 <h3>Anda login sebagai Administrator</h3>
               </nav>
             </div>
           </div>
         </div>
       </div>
     </div>
 </div>
 </section>


 <!-- /.content -->
 </div>