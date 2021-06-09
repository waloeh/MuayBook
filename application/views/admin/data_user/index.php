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
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <?php echo $this->session->flashdata('message'); ?>
                        <h3 class="box-title">Tabel Data User</h3>
                        <button class="btn btn-primary btn-sm mb-5 pull-right" data-toggle="modal" data-target="#modalDataUser"><i class="fa fa-plus"> Tambah</i></button>
                    </div>
                    <?php include 'tambah.php'; ?>
                    <!-- Start table -->
                    <div class="box-body">
                        <table id="table-user" class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama User</th>
                                    <th>Alamat</th>
                                    <th>Jabatan</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <?php $i = 1; ?>
                            <?php foreach ($data_user as $data) : ?>
                                <tbody>
                                    <tr>
                                        <th><?php echo $i; ?></th>
                                        <td><?php echo $data['nama_petugas'] ?></td>
                                        <td><?php echo $data['alamat_petugas'] ?></td>
                                        <td><?php echo $data['jabatan'] ?></td>
                                        <td><?php echo $data['username'] ?></td>
                                        <td><?php echo $data['email'] ?></td>
                                        <td>
                                            <a id="detail" class="btn btn-xs btn-success" href="<?php echo base_url('data_user/detail/' . $data['id_petugas']) ?>"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="detail"></i></a>
                                            <a id="hapus" class="btn btn-xs btn-danger" href="<?php echo base_url('data_user/hapus/' . $data['id_petugas']) ?>" onclick="return confirm('yakin mau dihapus?');" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </table>
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