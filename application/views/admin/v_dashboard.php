 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       <?php echo $title; ?>
     </h1>
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="callout callout-info">
       <h4><i class="icon fa fa-info"></i> Selamat Datang!</h4>

       <p>Aplikasi Pencarian Buku</p>
     </div>

     <?php $this->load->view('layouts/notifikasi'); ?>
     <!-- Small boxes (Stat box) -->
     <div class="row">
       <div class="col-lg-4 col-xs-6">
         <!-- small box -->
         <div class="small-box bg-red">
           <div class="inner">
             <h3><?php echo $jml_user; ?></h3>

             <p>Data User</p>
           </div>
           <div class="icon">
             <i class="ion ion-person-add"></i>
           </div>
           <a href="<?php echo base_url('data_user') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
       </div>
       <!-- ./col -->
       <div class="col-lg-4 col-xs-6">
         <!-- small box -->
         <div class="small-box bg-yellow">
           <div class="inner">
             <h3><?php echo $jml_buku; ?></h3>

             <p>Data Buku</p>
           </div>
           <div class="icon">
             <i class="ion ion-stats-bars"></i>
           </div>
           <a href="<?php echo base_url('data_buku') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
       </div>
       <!-- ./col -->
       <div class="col-lg-4 col-xs-6">
         <!-- small box -->
         <div class="small-box bg-green">
           <div class="inner">
             <h3><?php echo $jml_member; ?></h3>

             <p>Data Member</p>
           </div>
           <div class="icon">
             <i class="ion ion-pie-graph"></i>
           </div>
           <a href="<?php echo base_url('data_member') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
       </div>
       <!-- ./col -->
     </div>
   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->