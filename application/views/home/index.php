<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1>Semua Kategory</h1>
        </div>
    </div>
    <div class="input-group input-group-lg mt-3">
        <input id="text-cari" type="text" class="form-control" placeholder="Cari buku" aria-label="Cari buku" aria-describedby="tombol-cari">
        <div class="input-group-append" id="tombol-cari">
            <span class="input-group-text">
                <i class="fas fa-search" id="tombol-cari"></i>
            </span>
        </div>
    </div>
    <?php $url = $this->uri->segment(3); ?>
    <input type="hidden" id="url" value="<?php echo $url ?>">
    <div class="row" id="daftar-buku">
        <!-- <?php foreach ($data_buku as $buku) : ?>
            <div class="col-md-4 mb-3 mt-4">
                <div class="card">
                    <img src="<?php echo base_url('assets/uploads/buku/' . $buku['gambar']) ?>" class="card-img-top bg-light">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $buku['judul'] ?></h5>
                        <p class="card-text"><?php echo $buku['deskripsi'] ?></p>
                        <h5><?php echo $buku['kategori'] ?></h5><a href="http://localhost/BUKU/Home/detailBuku/" <?php $buku['id'] ?> class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?> -->
    </div>
    <?php echo $this->pagination->create_links() ?>
    <!-- <nav aria-label="Page navigation example">
        <ul class="pagination pagination-sm">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav> -->
</div>