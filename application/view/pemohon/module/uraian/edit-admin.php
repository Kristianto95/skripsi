   <script type="text/javascript">
        function isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
            return true;
         }
        
        function validasi(elem, min, max){
          var uInput = elem.value;
              
  if(confirm("Yakin data akan di simpan")){
    if(uInput.length >= min && uInput.length <= max){
              } else {
                   alert("Pastikan sudah input No KTP sesuai ketentuan (16 digit)");
                   elem.focus();
                   return false;
              }
      if(document.formIMB.noktp.value == "" || document.formIMB.noktp.value == null){
        alert("Isi No KTP / NIK  Terlebih dahulu");
        document.formIMB.noktp.focus();
        return false;
      }if(document.formIMB.nama.value == "" || document.formIMB.nama.value == null){
        alert("Isi Nama Anda Terlebih dahulu");
        document.formIMB.nama.focus();
        return false;
      }if(document.formIMB.alamat.value == "" || document.formIMB.alamat.value == null){
        alert("Isi Alamat Terlebih dahulu");
        document.formIMB.alamat.focus();
        return false;
      }if(document.formIMB.maksud.value == "" || document.formIMB.maksud.value == null){
        alert("Isi Kategori Terlebih dahulu");
        document.formIMB.maksud.focus();
        return false;
      }if(document.formIMB.penggunaan.value == "" || document.formIMB.penggunaan.value == null){
        alert("Isi Kegunaan Bangunan Terlebih dahulu");
        document.formIMB.penggunaan.focus();
        return false;
      }if(document.formIMB.lokasi.value == "" || document.formIMB.lokasi.value == null){
        alert("Isi Alamat Lokasi Bangunan Terlebih dahulu");
        document.formIMB.lokasi.focus();
        return false;
      }
      if(document.formIMB.nohp.value == "" || document.formIMB.nohp.value == null){
        alert("Isi no telpon / handphone yang bisa dihubungi Terlebih dahulu");
        document.formIMB.nohp.focus();
        return false;
      }if(document.formIMB.luastanah.value == "" || document.formIMB.luastanah.value == null){
        alert("Isi Luas Tanah Terlebih dahulu");
        document.formIMB.luastanah.focus();
        return false;
      }if(document.formIMB.luasbangunan.value == "" || document.formIMB.luasbangunan.value == null){
        alert("Isi Kegunaan Bangunan Terlebih dahulu");
        document.formIMB.luasbangunan.focus();
        return false;
      }if(document.formIMB.status.value == "" || document.formIMB.status.value == null){
        alert("Isi Kegunaan Bangunan Terlebih dahulu");
        document.formIMB.status.focus();
        return false;
      }if(document.formIMB.no_imb.value == "" || document.formIMB.no_imb.value == null){
        alert("Isi No IMB Terlebih dahulu");
        document.formIMB.no_imb.focus();
        return false;
      }
        return true;
  }else{
      return false;
    }
}
    </script>
<div class="container-fluid kotak5">
  <h3 class="text-center">Form Edit Admin</h3>
  <br>
      <?php
           $username =base64_decode( $_GET['username']);
          foreach ($db->tampil_admin($username) as $row){
        ?>
    <form method="post"  name="formIMB"  action="proses/proses.php?aksi=update_admin" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
    <br>
        <div class="form-body">
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                   <input name="id" type="hidden" class="form-control" value="<?php echo $row['id'];?>">
                    <input name="username" type="text" class="form-control" placeholder="Username" value="<?php echo $row['username'];?>">
             </div>
            </div>
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <input name="password" type="password" class="form-control" placeholder="Password" value="<?php echo $row['password'];?>">
             </div>
            </div>
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <input name="nik" type="text" class="form-control" id="restrict" placeholder="NIK" maxlength="16" onkeypress="return isNumberKey(event)" value="<?php echo $row['nik'];?>" >
                   </div>
              </div>          
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap Anda" value="<?php echo $row['nama'];?>">
                   </div>
              </div>
                  <div class="form-group">
                        <div class="input-group">
                  		 <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                  		 <input name="alamat" type="text" class="form-control" placeholder="Alamat Lengkap" value="<?php echo $row['alamat'];?>">
                   		</div>                    
              </div>
              <!--  <div class="input-group">
                   <label>Hak Akses</label>
                    <select name="akses" class="form-control">
                       <option value="1" <?php echo $row['akses'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                       <option value="2" <?php echo $row['akses'] == 'user' ? 'selected' : '' ?>>User</option>
                    </select>
                   </div> -->

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
</body>


</html>
