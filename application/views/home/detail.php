<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1>Detail Buku</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <img src="<?php echo base_url('assets/uploads/buku/' . $bukuById['gambar']) ?>" class="card-img-top" width="500" height="450">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <h5 class="card-header"><?php echo $bukuById['judul'] ?></h5>
                <div class="card-body">
                    <p class="card-text mb-0">Pengarang : <?php echo $bukuById['pengarang'] ?></p>
                    <p class="card-text mb-0">Penerbit : <?php echo $bukuById['penerbit'] ?></p>
                    <p class="card-text mb-0">Kategori : <?php echo $bukuById['kategori'] ?></p>
                    <p class="card-text mb-0">Deskripsi : <?php echo $bukuById['deskripsi'] ?></p>
                    <p class="card-text mb-0">Bahasa : <?php echo $bukuById['bahasa'] ?></p>
                    <p class="card-text mb-0">Subjek : <?php echo $bukuById['subjek'] ?></p>
                    <p class="card-text mb-0">Abstrak : <?php echo $bukuById['abstrak'] ?></p>
                    <p class="card-text mb-0">Tahun Terbit : <?php echo $bukuById['tahun'] ?></p>
                    <p class="card-text mb-0">Jumlah Buku : <?php echo $bukuById['jumlah_buku'] ?></p>
                    <p class="card-text mb-0">Jumlah Eksemplar : <?php echo $bukuById['jumlah_eksemplar'] ?></p>
                    <p class="card-text mb-0">Nomor Kelas : <?php echo $bukuById['nomor_kelas'] ?></p>
                    <p class="card-text mb-0">Kelas Deposit : <?php echo $bukuById['kelas_deposit'] ?></p>
                    <p class="card-text">No ISBN : <?php echo $bukuById['no_ISBN'] ?></p>

                    <button class="btn btn-primary" onclick="window.history.back()">Kembali</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// var_dump($bukuById);
?>