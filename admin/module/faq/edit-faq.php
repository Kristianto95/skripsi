
<div class="container-fluid">
  <h3>Form Edit FAQ</h3>
  <br>
        <?php
           $id = $_GET['id'];
          foreach ($db->tampil_faq($id) as $row){
        ?>
    <form method="post"  name="formFaq" id="register-form"  onSubmit="return alert('Data Telah Diubah')" action="../application/controller/controller_admin.php?aksi=update_faq" >
    <br>
        <div class="form-body">
            <div class="form-group ">
                   <div class="input-group">
                   <div class="input-group-addon "><span class=" glyphicon glyphicon-paperclip"></span><label>Pertanyaan</label></div>
                    <input name="id" type="hidden" value="<?php echo $row['id'];?>"/>
                   <textarea name="pertanyaan" type="text" class="form-control"/><?php echo $row['pertanyaan'];?></textarea>
                   </div>
            </div>
            <div class="form-group ">
                   <div class="input-group">
                   <div class="input-group-addon "><span class=" glyphicon glyphicon-paperclip"></span><label>Jawaban</label></div>
                   <textarea name="jawaban" type="text" class="form-control" /><?php echo $row['jawaban'];?></textarea>
                   </div>
            </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><label>Kategori</label></div>
                   <select name="kategori" class="form-control">
                       <option value="Umum" <?php echo $row['kategori'] == 'Umum' ? 'selected' : ''; ?>>Umum</option>
                       <option value="Isi Formulir" <?php echo $row['kategori'] == 'Isi Formulir' ? 'selected' : ''; ?>>Isi Formulir</option>
                       <option value="Kehilangan" <?php echo $row['kategori'] == 'Kehilangan' ? 'selected' : ''; ?>>Kehilangan</option>
                    </select>
                   </div>                  
          <?php 
          }
          ?>        
            <br>
            
            <div class="form-footer">
                 <button  type="submit" name="submit" class="btn btn-info" >
                 <span class="glyphicon glyphicon-save" ></span>Simpan dan Cetak!
                 </button>
                 <button  type="submit" name="keluar" class="btn btn-danger">
                 <span class="glyphicon glyphicon-log-out"></span>Kembali
                 </button>
            </div>

            </div>
            </form>
            </div>
