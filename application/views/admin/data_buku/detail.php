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
            <div class="col-md- 12">
                <!-- Horizontal Form -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Detail Data Buku</h3>
                    </div>
                    <!-- Start table -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-5 mt-3" style="max-width: 100%;">
                                    <div class="row no-gutters ">
                                        <div class="col-md-12">
                                            <img src="<?php echo base_url('/assets/uploads/buku/' . $detail_buku['gambar']); ?>" width="298px" height="250px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card mb-5 mt-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-12">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="card-text"><b>Judul Buku : <?php echo $detail_buku['judul'] ?></b></p>
                                                        <p class="card-text"><b>Pengarang : <?php echo $detail_buku['pengarang'] ?></b></p>
                                                        <p class="card-text"><b>Penerbit : <?php echo $detail_buku['penerbit'] ?></b></p>
                                                        <p class="card-text"><b>Tahun : <?php echo $detail_buku['tahun'] ?></b></p>
                                                        <p class="card-text"><b>Jumlah Buku : <?php echo $detail_buku['jumlah_buku'] ?></b></p>
                                                        <p class="card-text"><b>Jumlah Eksemplar : <?php echo $detail_buku['jumlah_eksemplar'] ?></b></p>
                                                        <p class="card-text"><b>Kategori : <?php echo $detail_buku['kategori'] ?></b></p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p class="card-text"><b>Nomor Kelas : <?php echo $detail_buku['nomor_kelas'] ?></b></p>
                                                        <p class="card-text"><b>Kelas Deposit : <?php echo $detail_buku['kelas_deposit'] ?></b></p>
                                                        <p class="card-text"><b>Deskripsi : <?php echo $detail_buku['deskripsi'] ?></b></p>
                                                        <p class="card-text"><b>No ISBN : <?php echo $detail_buku['no_ISBN'] ?></b></p>
                                                        <p class="card-text"><b>Bahasa : <?php echo $detail_buku['bahasa'] ?></b></p>
                                                        <p class="card-text"><b>Subjek : <?php echo $detail_buku['subjek'] ?></b></p>
                                                        <p class="card-text"><b>Abstrak : <?php echo $detail_buku['abstrak'] ?></b></p>
                                                        <p class="card-text"><small class="text-muted">Terakhir Update <?php echo $detail_buku['tanggal_update'] ?></small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('data_buku') ?>" class="btn btn-sm btn-danger pull-right">Kembali</a>
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