<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!-- <h1>
            <?php echo $title; ?>
        </h1> -->
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
                        <h3 class="box-title">Tabel Data Laporan </h3>
                        <?php if ($data_buku == null) {
                            $data = '';
                        } else {
                            $data = $data_buku[0]['kategori'];
                        }  ?>
                        <a href="<?php echo base_url("Laporan/cetakPdf/" . $data) ?>" target="_blank" class="btn btn-success btn-sm mb-5 pull-right"><i class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"> Cetak</i></a>
                    </div>
                    <!-- Start table -->
                    <form action="<?php echo base_url("Laporan") ?>" class="navbar-form navbar-left" role="search" method="post">
                        <div class="form-group">
                            <select name="kategori" class="form-control">
                                <?php if ($data_buku[0]["kategori"] == "") { ?>
                                    <option selected value="">--pilih kategori--</option>
                                <?php } else { ?>
                                    <option selected value="<?php echo $data_buku[0]["kategori"] ?>"><?php echo $data_buku[0]["kategori"] ?></option>
                                <?php } ?>
                                <option value="cerpen">Cerpen</option>
                                <option value="komik">Komik</option>
                                <option value="novel">Novel</option>
                                <option value="ensiklopedia">Ensiklopedia</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default">Cari</button>
                    </form>
                    <div class="box-body">
                        <table class="table table-sm table-bordered table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Judul Buku</th>
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th>Tahun</th>
                                    <th>Kategori</th>
                                    <th>Jumlah</th>
                                    <th>Bahasa</th>
                                    <th>Subjek</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($data_buku as $buku) : ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $buku['judul'] ?></td>
                                        <td><?php echo $buku['pengarang']; ?></td>
                                        <td><?php echo $buku['penerbit']; ?></td>
                                        <td><?php echo $buku['tahun'] ?></td>
                                        <td><?php echo $buku['kategori'] ?></td>
                                        <td><?php echo $buku['jumlah_buku'] ?></td>
                                        <td><?php echo $buku['bahasa'] ?></td>
                                        <td><?php echo $buku['subjek'] ?></td>
                                        <td>
                                            <div style="position:absolute;">
                                                <button type="button" class="btn btn-xs btn-success" <?php echo $buku['id']; ?>" data-toggle="tooltip" data-placement="top" title="Cetak"><i class="fa fa-print"></i></button>
                                            </div>
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