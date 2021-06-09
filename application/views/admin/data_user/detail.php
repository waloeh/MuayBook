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
        <div class="row">
            <!-- right column -->
            <div class="col-md-8">
                <!-- Horizontal Form -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Detail Data User</h3>
                    </div>
                    <!-- Start table -->
                    <div class="box-body">
                        <div class="card mb-5 mt-5" style="max-width: 100%;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="<?php echo base_url('/assets/uploads/users/' . $data_user['gambar']); ?>" width="200px" height="200px">
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-7">
                                    <div class="card-body ">
                                        <h5 class="card-title font-weight-bold"><b>Nama : <?php echo $data_user['nama_petugas'] ?></b></h5>
                                        <p class="card-text"><b>Jenis Kelamin : <?php echo $data_user['jenis_kelamin'] ?></b></p>
                                        <p class="card-text"><b>Alamat : <?php echo $data_user['alamat_petugas'] ?></b></p>
                                        <p class="card-text"><b>Jabatan : <?php echo $data_user['jabatan'] ?></b></p>
                                        <p class="card-text"><b>No Telpon : <?php echo $data_user['no_tlp'] ?></b></p>
                                        <p class="card-text"><b>Email : <?php echo $data_user['email'] ?></b></p>
                                        <p class="card-text"><small class="text-muted">Terakhir Update <?php echo $data_user['tanggal_update'] ?></small></p>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url('data_user') ?>" class="btn btn-sm btn-danger pull-right">Kembali</a>
                        </div>
                    </div>
                    <!-- End table -->
                </div>
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>