<div class="container-fluid">
  <h3 class="text-center">Form Edit Dasar Hukum</h3>
  <br>
        <?php
           $id = $_GET['id'];
          foreach ($db->tampil_persyaratan($id) as $row){
        ?>
    <form method="post"  name="formPersyaratan" id="register-form" onSubmit="return alert('Data Telah Diubah')" action="../application/controller/controller_admin.php?aksi=update_persyaratan" >
    <br>
        <div class="form-body">
            <div class="form-group ">
                   <div class="input-group">
                   <div class="input-group-addon "><span class=" glyphicon glyphicon-paperclip"></span><label>Dasar Hukum</label></div>
                    <input name="id" type="hidden" value="<?php echo $row['id'];?>"/>
                   <textarea name="isi" type="text" class="form-control" /><?php echo $row['isi'];?></textarea>
                   </div>
              <div class="form-group">
                   <div class="input-group">
                    <span class=" glyphicon"></span><label>Proses Perijinan</label>
                   </div>
                    <select name="kategori" class="form-control">
                       <option value="Izin Gangguan" <?php echo $row['kategori'] == 'Izin Gangguan]' ? 'selected' : ''; ?>>Izin Gangguan</option>
                       <option value="Izin Mendirikan Bangunan" <?php echo $row['kategori'] == 'izin Mendirikan Bangunan' ? 'selected' : ''; ?>>Izin Mendirikan Bangunan</option>
                       <option value="Izin Usaha Mikro dan Kecil" <?php echo $row['kategori'] == 'Izin Usaha Mikro dan Kecil' ? 'selected' : ''; ?>>Izin Usaha Mikro dan Kecil</option>
                       <option value="Surat Izin Usaha Perdagangan" <?php echo $row['kategori'] == 'Surat Izin Usaha Perdagangan' ? 'selected' : ''; ?>>Surat Izin Usaha Perdagangan</option>
                       <option value="Tanda Daftar Industri" <?php echo $row['kategori'] == 'Tanda Daftar Industri' ? 'selected' : ''; ?>>Tanda Daftar Industri</option>
                       <option value="Tanda Daftar Perusahaan" <?php echo $row['kategori'] == 'Tanda Daftar Perusahaan' ? 'selected' : ''; ?>>Tanda Daftar Perusahaan</option>
                       <option value="Dispensasi Nikah" <?php echo $row['kategori'] == 'Dispensasi Nikah' ? 'selected' : ''; ?>>Dispensasi Nikah</option>
                       <option value="Domisili" <?php echo $row['kategori'] == 'Domisili' ? 'selected' : ''; ?>>Domisili</option>
                    </select>
                   </div>                  
          <?php 
          }
          ?>        
         
            
            <div class="form-footer">
                 <button  type="submit" name="submit" class="btn btn-info" >
                 <span class="glyphicon glyphicon-save"  ></span>Simpan
                 </button>
                 <button  type="submit" name="keluar" class="btn btn-danger">
                 <span class="glyphicon glyphicon-log-out"></span>Kembali
                 </button>
            </div>

            </div>
            </form>
            </div>
