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
                        <h3 class="box-title">Tabel Data Member</h3>
                    </div>
                    <!-- Start table -->
                    <div class="box-body">
                        <table id="table-member" class="table table-sm table-bordered table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>No Telpon</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($data_member as $member) : ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $member['nama_member'] ?></td>
                                        <td><?php echo $member['alamat']; ?></td>
                                        <td><?php echo $member['email']; ?></td>
                                        <td><?php echo $member['no_tlp'] ?></td>
                                        <td><?php echo $member['jenis_kelamin'] ?></td>
                                        <td>
                                            <a href="<?php echo base_url('data_member/detail/' . $member['id_member']) ?>" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="detail"><i class="fa fa-edit"></i></a>
                                            <a href="<?php echo base_url('data_member/hapus/' . $member['id_member']) ?>"><button type="button" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fa fa-trash" onclick="return confirm('yakin mau dihapus?');"></i></button></a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
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