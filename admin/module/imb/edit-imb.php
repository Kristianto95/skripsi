
<div class="container-fluid">
  <h3 class="text-center">Form Update Izin Mendirikan Bangunan</h3>
  <br>
        <?php
           $registrasi =base64_decode( $_GET['registrasi']);
          foreach ($db->tampil_imb($registrasi) as $row){
        ?>
    <form method="post" enctype="multipart/form-data"  name="formIMB" id="register-form" action="../application/controller/controller_admin.php?aksi=update_imb" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
    <br>
        <div class="form-body">
            <input name="id_imb" type="hidden" value="<?php echo $row['id_imb'];?>"/>
            
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><label>No KTP</label></div>
                    <input readonly name="noktp" type="text" class="form-control" value="<?php echo $row['noktp'];?>" />
                   </div>
              </div>      
              <div class="form-group ">
                   <div class="input-group">
                   <div class="input-group-addon "><span class=" glyphicon"></span><label>No Registrasi</label></div>
                    <input readonly name="registrasi" type="text" class="form-control" value="<?php echo $row['registrasi'];?>" readonly />
                   </div>
            </div>    <!-- 
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><label>Nama Lengkap</label></div>
                   <input readonly name="syarat" type="text" class="form-control" value="<?php echo $row['nama'];?>" />
                   </div>
              </div>
             <div class="row">
                  <div class="form-group col-lg-6">
                        <div class="input-group">
                       <div class="input-group-addon"><span class="glyphicon"></span><label>Alamat Lengkap</label></div>
                       <textarea readonly name="alamat" type="text" class="form-control"  ><?php echo $row['alamat'];?></textarea>
                      </div>                    
              </div> -->
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><label>Maksud Permohonan IMB</label></div>
                   <input readonly name="maksud" type="text" class="form-control" value="<?php echo $row['maksud'];?>" />
                   </div>  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><label>Penggunaan</label></div>
                   <input readonly name="penggunaan" type="text" class="form-control" value="<?php echo $row['penggunaan'];?>" />
                   </div>        
              </div>
             
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span>
                   <label>Alamat Lokasi Bangunan</label></div>
                   <input readonly name="lokasi" type="text" class="form-control" value="<?php echo $row['lokasi'];?>" />
                   </div>                  
              </div>
              <!-- <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><label>No Hp / Telepon</label></div>
                   <input readonly name="nohp" type="text" class="form-control" value="<?php echo $row['nohp'];?>" />
                   </div>                  
              </div> -->
              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon"></span><label>Luas Tanah</label></div>
                        <input readonly name="luastanah" type="text" class="form-control" value="<?php echo $row['luastanah'];?>"  />
                        </div>                   
                   </div>
                            
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon"></span><label>Luas Bangunan</label></div>
                        <input readonly name="luasbangunan" type="text" class="form-control" value="<?php echo $row['luasbangunan'];?>" />
                        </div>              
                   </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><label>Status Tanah</label></div>
                   <input readonly name="status" type="text" class="form-control" value="<?php echo $row['status'];?>" />
                   </div>                  
              </div>
              <br><br>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><label>Proses Perizinan</label></div>
                    <select name="proses" class="form-control">
                       <option value="1" <?php echo $row['proses'] == 'Dalam Proses' ? 'selected' : ''; ?>>Dalam Proses</option>
                       <option value="2" <?php echo $row['proses'] == 'Gagal' ? 'selected' : ''; ?>>Gagal</option>
                       <option value="3" <?php echo $row['proses'] == 'Selesai' ? 'selected' : ''; ?>>Selesai</option>
                    </select>
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><label>Paraf</label></div>
                   <input name="paraf" type="text" class="form-control"  value="<?php echo $row['paraf'];?>" />
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><label>Tanggal Terbit Perijinan</label></div>
                   <input  name="terbit" type="date" class="form-control" value="<?php echo $row['terbit'];?>"/>
                   </div>                  
              </div>

                       <?php 
          }
          ?>        
         
            <br>
            <div class="form-footer">
                 <button  type="submit" name="submit" class="btn btn-info" >
                 <span class="glyphicon glyphicon-save" ></span>Simpan
                 </button>
                 <a  href="media.php?module=izin-mendirikan-bangunan&id=1" class="btn btn-warning">
                 <span class="glyphicon glyphicon-log-out"></span>Kembali
                 </a>
            </div>
            <br>
            <br>
            <br>
            </div>
            </form>
            </div>
