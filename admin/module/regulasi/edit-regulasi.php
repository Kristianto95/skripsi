 <?php
           $registrasi =base64_decode( $_GET['id_regulasi']);
          foreach ($db->tampil_regulasi($registrasi) as $row){
        ?>
<div class="container-fluid kotak5">
  <h3 class="text-center">Form Tambah Regulasi</h3>
  <br>
    <form method="post"  name="formRegulasi" enctype="multipart/form-data" action="../application/controller/controller_admin.php?aksi=update_regulasi" >
    <br>
        <div class="form-body">
            <div class="form-group">
                   <input name="id_regulasi" type="hidden" class="form-control" value="<?php echo $row['id_regulasi']; ?>">
             </div>
            </div>                
             <div class="form-group col-sm-12">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <input name="judul" type="text" class="form-control" placeholder="Judul" value="<?php echo $row['judul']; ?>">
                   </div>
              </div>      
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span>Kategori</div>
                 <select class="form-control" name="kategori">
                     <option selected disabled>--Pilih Kategori--</option>
                     <option value="1" <?php echo $row['kategori'] == 'SOP & SPM' ? 'selected' : ''; ?>>SOP & SPM</option>
                     <option value="2"<?php echo $row['kategori'] == 'Formulir Tambahan' ? 'selected' : ''; ?>>Formulir Tambahan</option>
                     <option value="3" <?php echo $row['kategori'] == 'Lain - Lain' ? 'selected' : ''; ?>>Lain - Lain</option>
                 </select>
              </div>     
                   </div>      
             <div class="form-group col-sm-12">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <textarea name="deskripsi" type="text" class="form-control" placeholder="deskripsi" value="<?php echo $row['deskripsi'];?>"></textarea>
                   </div>
              </div>            
             <div class="form-group col-sm-12">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span>Unggah File Regulasi</div>
                    <input name="file" type="file" class="form-control" >
                   </div>
              </div>
              <br>   
<?php 
  }
?>
           <div class="form-footer col-sm-12">
                 <button  type="submit" name="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-save"></span>Simpan
                 </button>
            </div>


            </form>
            </div>
 </div>