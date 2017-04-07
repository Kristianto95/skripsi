
<head>
    <script type="text/javascript">
        function isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
            return true;
         }
        function validasi(elem, min, max){
          var uInput = elem.value;              
           if(confirm("Yakin data akan di simpan? Cek Kembali data anda, apabila data tidak sesuai maka admin akan menghapus akun anda ")){
                if(uInput.length >= min && uInput.length <= max){
                         } else {
                   alert("Pastikan sudah input No KTP sesuai ketentuan (16 digit)");
                   elem.focus();
                   return false;
              }
              if(document.formDaftar.nama.value == "" || document.formDaftar.nama.value == null){
              alert("Isi Nama Lengkap Anda Terlebih dahulu");
              document.formDaftar.nama.focus();
              return false;
            }if(document.formDaftar.alamat.value == "" || document.formDaftar.alamat.value == null){
              alert("Isi Alamat Lengkap Anda Terlebih dahulu");
              document.formDaftar.alamat.focus();
              return false;
            }if(document.formDaftar.tmp_lahir.value == "" || document.formDaftar.tmp_lahir.value == null){
              alert("Isi Tempat Lahir Anda Terlebih dahulu");
              document.formDaftar.tmp_lahir.focus();
              return false;
            }if(document.formDaftar.tgl_lahir.value == "0000-00-00" || document.formDaftar.tgl_lahir.value == null){
              alert("Isi Tanggal Lahir Anda Terlebih dahulu");
              document.formDaftar.tgl_lahir.focus();
              return false;
            }if(document.formDaftar.npwp.value == "" || document.formDaftar.npwp.value == null){
              alert("Isi NPWP Terlebih dahulu");
              document.formDaftar.npwp.focus();
              return false;
            }if(document.formDaftar.nohp.value == "" || document.formDaftar.nohp.value == null){
              alert("Isi No Telepon / Hp Anda Terlebih dahulu");
              document.formDaftar.nohp.focus();
              return false;
            }
              return true;
            }else{
                return false;
            }   
        }     
    </script>
</head>

<div class="container" style="padding-top:70px; width:350px;">
  <h3 class="text-center">Form Pendaftaran Akun Perizinan Kecamatan Bojong</h3>
  <br>
    <form method="post"  name="formDaftar"  action="controller/controller_pemohon.php?aksi=tambah_pemohon" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
    <br>
        <div class="form-body">
            <div class="form-group">
                   <input name="id_imb" type="hidden" class="form-control">
             </div>   
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span></div>
                    <input name="noktp" type="text" class="form-control" id="restrict" placeholder="No KTP" maxlength="16" onkeypress="return isNumberKey(event)" >
                   </div>
              </div>  
             <div class="form-group">
                       <div class="input-group">
                       <div class="input-group-addon"><span class="glyphicon "></span></div>
                       <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
                       </div>
              </div>
              <div class="form-group">
                       <div class="input-group">
                       <div class="input-group-addon"><span class="glyphicon "></span></div>
                       <input name="alamat" type="text" class="form-control" placeholder="Alamat Lengkap">
                       </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon "></span></div>
                   <input name="tmp_lahir" type="text" class="form-control" placeholder="Tempat Lahir">
                   </div>                  
              </div>                        
                   <div class="form-group">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon"></span></div>
                        <input name="tgl_lahir" type="date" class="form-control" placeholder="Bulan-Hari-Tahun (31-12-1991)" onkeypress="return isNumberKey(event)"
                        maxlength="4" >
                        </div>                   
                   </div>                            
                   <div class="form-group">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon "></span></div>
                        <input name="npwp" type="text" class="form-control" placeholder="NPWP" onkeypress="return isNumberKey(event)"
                        maxlength="4">
                        </div>              
                   </div>
                   <div class="form-group ">
                       <div class="input-group">
                       <div class="input-group-addon"><span class="glyphicon "></span></div>
                       <input name="nohp" type="text" class="form-control" placeholder="no Telepon / Hp">
                       </div>                  
                  </div>
                  <div class="form-group ">
                       <div class="input-group">
                       <div class="input-group-addon"><span class="glyphicon "></span></div>
                       <input name="username" type="text" class="form-control" placeholder="Username">
                       </div>                  
                  </div>
                  <div class="form-group ">
                       <div class="input-group">
                       <div class="input-group-addon"><span class="glyphicon "></span></div>
                       <input name="password" type="password" class="form-control" placeholder="Password">
                       </div>                  
                  </div>
                    <div class="form-footer">
                 <button  type="submit" name="submit" class="btn btn-info">
                 <span class="glyphicon "></span>Daftar Sekarang!
                 </button>
                  </div>
            </form>
            </div>
 </div>