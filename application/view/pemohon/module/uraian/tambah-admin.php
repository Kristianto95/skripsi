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
      if(document.formAdmin.username.value == "" || document.formAdmin.username.value == null){
        alert("USERNAME TIDAK BOLEH KOSONG");
        document.formAdmin.username.focus();
        return false;
      }if(document.formAdmin.nama.value == "" || document.formAdmin.nama.value == null){
        alert("Isi Nama Anda Terlebih dahulu");
        document.formAdmin.nama.focus();
        return false;
      }if(document.formAdmin.alamat.value == "" || document.formAdmin.alamat.value == null){
        alert("Isi Alamat Terlebih dahulu");
        document.formAdmin.alamat.focus();
        return false;
      }if(document.formAdmin.password.value == "" || document.formAdmin.password.value == null){
        alert("PASSWORD TIDAK BOLEH KOSONG");
        document.formAdmin.password.focus();
        return false;
      }
        return true;
  }else{
      return false;
    }
}
    </script>
<div class="container-fluid kotak5">
  <h3 class="text-center">Form Tambah Admin</h3>
  <br>
    <form method="post"  name="formAdmin"  action="proses/proses.php?aksi=tambah_admin" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
    <br>
        <div class="form-body">
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                   <input name="id" type="hidden" class="form-control">
                    <input name="username" type="text" class="form-control" placeholder="Username">
             </div>
            </div>
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <input name="password" type="password" class="form-control" placeholder="Password">
             </div>
            </div>
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <input name="nik" type="text" class="form-control" id="restrict" placeholder="NIK" maxlength="16" onkeypress="return isNumberKey(event)" >
                   </div>
              </div>          
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap Anda">
                   </div>
              </div>
                  <div class="form-group">
                        <div class="input-group">
                  		 <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                  		 <input name="alamat" type="text" class="form-control" placeholder="Alamat Lengkap">
                   		</div>                    
              </div>
               
           <div class="form-footer">
                 <button  type="submit" name="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-save"></span>Simpan
                 </button>
            </div>


            </form>
            </div>
 </div>