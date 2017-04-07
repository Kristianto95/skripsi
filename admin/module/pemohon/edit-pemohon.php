<div class="container-fluid kotak5">
  <h3 class="text-center">Form Edit Data Pemohon</h3>
  <br>
    <form method="post"  name="formPemohon"  action="../application/controller/controller_admin.php?aksi=update_pemohon" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
    <br>

    <?php
           $noktp =base64_decode( $_GET['noktp']);
          foreach ($db->tampil_pemohon($noktp) as $row){
        ?>
        <div class="form-body">
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <input name="noktp" type="text" class="form-control" id="restrict" placeholder="No KTP" value="<?php echo $row['noktp']; ?>"maxlength="16" onkeypress="return isNumberKey(event)" >
                   </div>
              </div>          
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" value="<?php echo $row['nama']; ?>">
                   </div>
              </div>
                  <div class="form-group">
                        <div class="input-group">
                  		 <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                  		 <input name="alamat" type="text" class="form-control" placeholder="Alamat Lengkap" value="<?php echo $row['alamat']; ?>">
                   		</div>                    
              </div>
              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-duplicate"></span></div>
                        <input name="tmp_lahir" type="text" class="form-control" placeholder="Tempat Lahir" value="<?php echo $row['tmp_lahir']; ?>">
                        </div>                   
                   </div>
                            
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-duplicate"></span>Tanggal Lahir</div>
                        <input name="tgl_lahir" type="date" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $row['tgl_lahir']; ?>">
                        </div>              
                   </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="npwp" type="text" class="form-control" placeholder="NPWP" value="<?php echo $row['npwp']; ?>">
                   </div>                  
              </div>                        
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></div>
                   <input name="nohp" type="text" class="form-control" maxlength="12" placeholder="No HP/ Telepon" onkeypress="return isNumberKey(event)" value="<?php echo $row['nohp']; ?>">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="username" type="text" class="form-control" placeholder="Username" value="<?php echo $row['username']; ?>">
                   </div>                  
              </div>  
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="password" type="password" class="form-control" placeholder="Password" value="<?php echo $row['password']; ?>">
                   </div>                  
              </div>  
<?php
  }
?>
           <div class="form-footer">
                 <button  type="submit" name="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-save"></span>Simpan dan Cetak!
                 </button>
            </div>


            </form>
            </div>
 </div>