<div class="container-fluid kotak5">
  <h3 class="text-center">Form Edit Data Admin</h3>
  <br>
    <form method="post"  name="formPemohon"  action="../application/controller/controller_admin.php?aksi=update_admin" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
    <br>

    <?php
           $nik =base64_decode( $_GET['nik']);
          foreach ($db->tampil_admin($nik) as $row){
        ?>

        <div class="form-body">
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="nik" type="text" class="form-control" placeholder="NIK" value="<?php echo $row['nik'];?>">
                   </div>
              </div>
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <input name="noktp" type="text" class="form-control" value="<?php echo $row['noktp'];?>" id="restrict" placeholder="No KTP" maxlength="16" onkeypress="return isNumberKey(event)" >
                   </div>
              </div>          
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" value="<?php echo $row['nama'];?>">
                   </div>
              </div>
                  <div class="form-group">
                        <div class="input-group">
                  		 <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                  		 <input name="alamat" type="text" class="form-control" placeholder="Alamat Lengkap"  value="<?php echo $row['alamat'];?>">
                   		</div>                    
              </div>                      
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></div>
                   <input name="nohp" type="text" class="form-control" maxlength="12" value="<?php echo $row['nohp'];?>" placeholder="No HP/ Telepon" onkeypress="return isNumberKey(event)" >
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="username" type="text" class="form-control" placeholder="Username" value="<?php echo $row['username'];?>">
                   </div>                  
              </div>  
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="password" type="password" class="form-control" placeholder="Password" value="<?php echo $row['password'];?>">
                   </div>                  
              </div>  
                   <input name="akses" type="hidden" class="form-control" placeholder="Password" value="<?php echo $row['akses'];?>">
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