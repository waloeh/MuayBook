<div class="modal fade" id="tambahBuku" tabindex="-1" role="dialog" aria-labelledby="tambahBuku" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-bold" id="exampleModalLabel">Tambah Data Buku</h4>
            </div>
            <form action="<?php echo base_url('Data_buku/tambah') ?>" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-6 col-xs-6">
                            <div class="form-group">
                                <label>Judul Buku</label>
                                <input class="form-control" type="text" name="judul" required placeholder="judul buku">
                                <?php echo form_error('nama'); ?>
                            </div>
                            <div class="form-group">
                                <label>Pengarang</label>
                                <input class="form-control" type="text" name="pengarang" required placeholder="pengarang">
                            </div>
                            <div class="form-group">
                                <label>Penerbit</label>
                                <input class="form-control" type="text" name="penerbit" required placeholder="penerbit">
                            </div>
                            <div class="form-group">
                                <label>Tahun</label>
                                <input class="form-control" type="text" name="tahun" required placeholder="tahun terbit">
                            </div>
                            <div class="form-group">
                                <label>Jumlah Buku</label>
                                <input class="form-control" type="text" name="jumlah_buku" required placeholder="jumlah buku">
                            </div>
                            <div class="form-group">
                                <label>Jumlah Eksemplar</label>
                                <input class="form-control" type="text" name="jumlah_eksemplar" required placeholder="jumlah eksemplar">
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <!-- <input class="form-control" type="text" name="kategori" required placeholder="kategori buku"> -->
                                <select name="kategori" id="kategori" class="form-control" required>
                                    <option value="" selected>--pilih kategori--</option>
                                    <option value="cerpen">Cerpen</option>
                                    <option value="komik">Komik</option>
                                    <option value="ensiklopedia">Ensiklopedia</option>
                                    <option value="novel">Novel</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nomor Kelas</label>
                                <input class="form-control" type="text" name="nomor_kelas" required placeholder="nomor kelas">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-6">
                            <div class="form-group">
                                <label>Kelas Deposit</label>
                                <input class="form-control" type="text" name="kelas_deposit" required placeholder="kelas deposit">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input class="form-control" type="text" name="deskripsi" required placeholder="deskripsi">
                            </div>
                            <div class="form-group">
                                <label>No-ISBN</label>
                                <input class="form-control" type="text" name="no_ISBN" required placeholder="no ISBN">
                            </div>
                            <div class="form-group">
                                <label>Bahasa</label>
                                <input class="form-control" type="text" name="bahasa" required placeholder="bahasa">
                            </div>
                            <div class="form-group">
                                <label>Subjek</label>
                                <input class="form-control" type="text" name="subjek" required placeholder="subjek">
                            </div>
                            <div class="form-group">
                                <label>Abstrak</label>
                                <input class="form-control" type="text" name="abstrak" required placeholder="abstrak">
                            </div>
                            <div class="form-group">
                                <label>File Digital</label>
                                <input class="form-control" type="text" name="file_digital" required placeholder="file digital">
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input class="form-control" type="file" name="gambar" id="gambar" required>
                                <small>jpg, png, jpeg</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-sm btn-primary">Simapn</button>
                </div>
            </form>
        </div>
    </div>
</div>