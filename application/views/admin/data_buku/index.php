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
            <h3 class="box-title">Tabel Data Buku</h3>
            <button class="btn btn-primary btn-sm mb-5 pull-right" data-toggle="modal" data-target="#tambahBuku"><i class="fa fa-plus"> Tambah</i></button>
          </div>
          <?php include "tambah.php"; ?>
          <!-- Start table -->
          <div class="box-body">
            <table id="table-buku" class="table table-sm table-bordered table-responsive table-hover">
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
                  <th>Petugas</th>
                  <th>Option</th>
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
                    <td><?php echo $buku['nama_petugas'] ?></td>
                    <td>
                      <div style="position:absolute;">
                        <a href="<?php echo base_url('data_buku/detail/' . $buku['id']) ?>"><button type="button" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="detail"><i class="fa fa-edit"></i></button></a>
                        <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#modalBuku<?php echo $buku['id']; ?>"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="edit"></i></button>
                        <a href="<?php echo base_url('data_buku/hapus/' . $buku['id']) ?>"><button type="button" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fa fa-trash" onclick="return confirm('yakin mau dihapus?');"></i></button></a>
                      </div>
                    </td>
                  </tr>
                  <?php $i++; ?>
                  <?php include 'edit.php'; ?>
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