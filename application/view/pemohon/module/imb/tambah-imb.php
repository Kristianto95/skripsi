
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
           if(confirm("Yakin data akan di simpan? Data yang sudah diajukan apabila terjadi kesalahan penulisan tidak dapat diganti, pastikan data tidak ada kesalahan.")){
              if(document.formIMB.daftar_ke.value == "" || document.formIMB.daftar_ke.value == null){
              alert("Isi Pendaftaran Ke Berapa Terlebih dahulu");
              document.formIMB.daftar_ke.focus();
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
            }if(document.formIMB.luastanah.value == "" || document.formIMB.luastanah.value == null){
              alert("Isi Luas Tanah Terlebih dahulu");
              document.formIMB.luastanah.focus();
              return false;
            }if(document.formIMB.luasbangunan.value == "" || document.formIMB.luasbangunan.value == null){
              alert("Isi Kegunaan Bangunan Terlebih dahulu");
              document.formIMB.luasbangunan.focus();
              return false;
            }if(document.formIMB.status.value == "" || document.formIMB.status.value == null){
              alert("Isi Status Tanah Terlebih dahulu");
              document.formIMB.status.focus();
              return false;
            }
              return true;
            }else{
                return false;
            }
        }
    </script>
</head>

<div class="container" style="padding-top:70px;">
  <h3 class="text-center">Form Permohonan Izin Mendirikan Bangunan</h3>
  <br>
    <form method="post"  name="formIMB"  action="controller/controller_pemohon.php?aksi=tambah_imb" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
    <br>
        <div class="form-body">
            <div class="form-group">
                   <input name="id_imb" type="hidden" class="form-control">
             </div>             
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></div>
                   <input name="daftar_ke" type="text" class="form-control" onkeypress="return isNumberKey(event)" maxlength="3" placeholder="Pendaftaran Ke"  >
                   </div>                  
              </div>
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
                   <select class="form-control" name="maksud" id="restrict" >
                        <option value="Mendirikan Bangunan Baru">Mendirikan Bangunan Baru</option>
                        <option value="Membaharui Izin Bangunan">Membaharui Izin Bangunan</option>
                        </select>
                   </div>                   
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-object-align-bottom"></span></div>
                   <select class="form-control" name="penggunaan">
                        <option value="Rumah Tinggal">Rumah Tinggal</option>
                        <option value="Tempat Usaha">Tempat Usaha</option>
                        </select>
                   </div>                     
              </div>
             
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-home"></span></div>
                   <input name="lokasi" type="text" class="form-control" placeholder="Alamat Lokasi Bangunan">
                   </div>                  
              </div>
              <div class="row">                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-duplicate"></span></div>
                        <input name="luastanah" type="text" class="form-control" placeholder="Luas Tanah per meter persegi" onkeypress="return isNumberKey(event)"
                        maxlength="4" >
                        </div>                   
                   </div>                            
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-duplicate"></span></div>
                        <input name="luasbangunan" type="text" class="form-control" placeholder="Luas Bangunan per meter persegi" onkeypress="return isNumberKey(event)"
                        maxlength="4">
                        </div>              
                   </div>
                   <div class="form-group col-lg-12">
                       <div class="input-group">
                       <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                       <input name="status" type="text" class="form-control" placeholder="Status Tanah">
                       </div>                  
                  </div>
                    <div class="form-footer">
                 <button  type="submit" name="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-save"></span>Simpan dan Cetak!
                 </button>
            </div>
              </div>

              
         


            </form>
            </div>
 </div>