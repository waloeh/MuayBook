 <div class="modal fade" id="modalBuku<?php echo $buku['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalBuku" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
         <h4 class="modal-title text-bold" id="exampleModalLabel">Edit Data Buku</h4>
       </div>
       <form action="<?php echo base_url('Data_buku/edit/' . $buku['id']) ?>" method="post" enctype="multipart/form-data">
         <div class="box-body">
           <div class="row">
             <div class="col-lg-6 col-xs-6">
               <div class="form-group">
                 <label>Judul Buku</label>
                 <input class="form-control" type="text" name="judul" value="<?php echo $buku['judul'] ?>">
                 <?php echo form_error('nama'); ?>
               </div>
               <div class="form-group">
                 <label>Pengarang</label>
                 <input class="form-control" type="text" name="pengarang" value="<?php echo $buku['pengarang'] ?>">
               </div>
               <div class="form-group">
                 <label>Penerbit</label>
                 <input class="form-control" type="text" name="penerbit" value="<?php echo $buku['penerbit'] ?>">
               </div>
               <div class="form-group">
                 <label>Tahun</label>
                 <input class="form-control" type="text" name="tahun" value="<?php echo $buku['tahun'] ?>">
               </div>
               <div class="form-group">
                 <label>Jumlah Buku</label>
                 <input class="form-control" type="text" name="jumlah_buku" value="<?php echo $buku['jumlah_buku'] ?>">
               </div>
               <div class="form-group">
                 <label>Jumlah Eksemplar</label>
                 <input class="form-control" type="text" name="jumlah_eksemplar" value="<?php echo $buku['jumlah_eksemplar'] ?>">
               </div>
               <div class="form-group">
                 <label>Kategori</label>
                 <select name="kategori" class="form-control" required>
                   <option selected value="<?php echo $buku['kategori'] ?>"><?php echo $buku['kategori'] ?></option>
                   <option value="cerpen">Cerpen</option>
                   <option value="komik">Komik</option>
                   <option value="ensiklopedia">Ensiklopedia</option>
                   <option value="novel">Novel</option>
                 </select>
               </div>
               <div class="form-group">
                 <label>Nomor Kelas</label>
                 <input class="form-control" type="text" name="nomor_kelas" value="<?php echo $buku['nomor_kelas'] ?>">
               </div>
             </div>
             <div class="col-lg-6 col-xs-6">
               <div class="form-group">
                 <label>Kelas Deposit</label>
                 <input class="form-control" type="text" name="kelas_deposit" value="<?php echo $buku['kelas_deposit'] ?>">
               </div>
               <div class="form-group">
                 <label>Deskripsi</label>
                 <input class="form-control" type="text" name="deskripsi" value="<?php echo $buku['deskripsi'] ?>">
               </div>
               <div class="form-group">
                 <label>No-ISBN</label>
                 <input class="form-control" type="text" name="no_ISBN" value="<?php echo $buku['no_ISBN'] ?>">
               </div>
               <div class="form-group">
                 <label>Bahasa</label>
                 <input class="form-control" type="text" name="bahasa" value="<?php echo $buku['bahasa'] ?>">
               </div>
               <div class="form-group">
                 <label>Subjek</label>
                 <input class="form-control" type="text" name="subjek" value="<?php echo $buku['subjek'] ?>">
               </div>
               <div class="form-group">
                 <label>Abstrak</label>
                 <input class="form-control" type="text" name="abstrak" value="<?php echo $buku['abstrak'] ?>">
               </div>
               <div class="form-group">
                 <label>File Digital</label>
                 <input class="form-control" type="text" name="file_digital" value="<?php echo $buku['file_digital'] ?>">
               </div>
               <div class="form-group">
                 <label>Gambar</label>
                 <input class="form-control" type="file" name="gambar" id="gambar" value="<?php echo $buku['gambar'] ?>">
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