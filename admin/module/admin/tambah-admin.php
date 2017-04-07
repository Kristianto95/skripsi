<div class="container-fluid kotak5">
  <h3 class="text-center">Form Tambah Data Admin</h3>
  <br>
    <form method="post"  name="formPemohon"  action="../application/controller/controller_admin.php?aksi=tambah_admin" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
    <br>
        <div class="form-body">
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="nik" type="text" class="form-control" placeholder="NIK">
                   </div>
              </div>
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <input name="noktp" type="text" class="form-control" id="restrict" placeholder="No KTP" maxlength="16" onkeypress="return isNumberKey(event)" >
                   </div>
              </div>          
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
                   </div>
              </div>
                  <div class="form-group">
                        <div class="input-group">
                  		 <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                  		 <input name="alamat" type="text" class="form-control" placeholder="Alamat Lengkap">
                   		</div>                    
              </div>                      
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></div>
                   <input name="nohp" type="text" class="form-control" maxlength="12" placeholder="No HP/ Telepon" onkeypress="return isNumberKey(event)" >
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="username" type="text" class="form-control" placeholder="Username">
                   </div>                  
              </div>  
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="password" type="password" class="form-control" placeholder="Password" >
                   </div>                  
              </div>  
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="akses" type="hidden" class="form-control" placeholder="Password" value="admin">
                   </div>                  
              </div>  
           <div class="form-footer">
                 <button  type="submit" name="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-save"></span>Simpan dan Cetak!
                 </button>
            </div>


            </form>
            </div>
 </div>