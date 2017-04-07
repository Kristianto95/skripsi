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
      if(document.formDISPENSASI.namawanita.value == "" || document.formDISPENSASI.namawanita.value == null){
        alert("Isi Nama Mempelai Wanita  Terlebih dahulu");
        document.formDISPENSASI.namawanita.focus();
        return false;
      }if(document.formDISPENSASI.tempatwanita.value == "" || document.formDISPENSASI.tempatwanita.value == null){
        alert("Isi Tempat Lahir Mempelai Wanita Terlebih dahulu");
        document.formDISPENSASI.tempatwanita.focus();
        return false;
        }
      if(document.formDISPENSASI.tanggalwanita.value == "" || document.formDISPENSASI.tanggalwanita.value == null){
        alert("Isi Tanggal Lahir Wanita Terlebih dahulu");
        document.formDISPENSASI.tanggalwanita.focus();
        return false;
      }if(document.formDISPENSASI.usiawanita.value == "" || document.formDISPENSASI.usiawanita.value == null){
        alert("Isi Usia Wanita Terlebih dahulu");
        document.formDISPENSASI.usiawanita.focus();
        return false;
      }if(document.formDISPENSASI.pekerjaanwanita.value == "" || document.formDISPENSASI.pekerjaanwanita.value == null){
        alert("Isi Pekerjaan Mempelai Wanita Terlebih dahulu");
        document.formDISPENSASI.pekerjaanwanita.focus();
        return false;
      }if(document.formDISPENSASI.statuswanita.value == "" || document.formDISPENSASI.statuswanita.value == null){
        alert("Isi Status Wanita Terlebih dahulu");
        document.formDISPENSASI.statuswanita.focus();
        return false;
      }if(document.formDISPENSASI.alamatwanita.value == "" || document.formDISPENSASI.alamatwanita.value == null){
        alert("Isi Alamat Mempelai Wanita Terlebih dahulu");
        document.formDISPENSASI.alamatwanita.focus();
        return false;
      }if(document.formDISPENSASI.namapria.value == "" || document.formDISPENSASI.namapria.value == null){
        alert("Isi Nama Mempelai Pria  Terlebih dahulu");
        document.formDISPENSASI.namapria.focus();
        return false;
      }if(document.formDISPENSASI.tempatpria.value == "" || document.formDISPENSASI.tempatpria.value == null){
        alert("Isi Tempat Lahir Mempelai Pria Terlebih dahulu");
        document.formDISPENSASI.tempatpria.focus();
        return false;
      }if(document.formDISPENSASI.tanggalpria.value == "" || document.formDISPENSASI.tanggalpria.value == null){
        alert("Isi Tanggal Lahir Pria Terlebih dahulu");
        document.formDISPENSASI.tanggalpria.focus();
        return false;
      }if(document.formDISPENSASI.usiapria.value == "" || document.formDISPENSASI.usiapria.value == null){
        alert("Isi Usia Pria Terlebih dahulu");
        document.formDISPENSASI.usiapria.focus();
        return false;
      }if(document.formDISPENSASI.pekerjaanpria.value == "" || document.formDISPENSASI.pekerjaanpria.value == null){
        alert("Isi Pekerjaan Mempelai Pria Terlebih dahulu");
        document.formDISPENSASI.pekerjaanpria.focus();
        return false;
      }if(document.formDISPENSASI.statuspria.value == "" || document.formDISPENSASI.statuspria.value == null){
        alert("Isi Status Pria Terlebih dahulu");
        document.formDISPENSASI.statuspria.focus();
        return false;
      }if(document.formDISPENSASI.alamatpria.value == "" || document.formDISPENSASI.alamatpria.value == null){
        alert("Isi Alamat Mempelai Pria Terlebih dahulu");
        document.formDISPENSASI.alamatpria.focus();
        return false;
      }if(document.formDISPENSASI.tanggalakad.value == "" || document.formDISPENSASI.tanggalakad.value == null){
        alert("Isi Alamat Mempelai Pria Terlebih dahulu");
        document.formDISPENSASI.tanggalakad.focus();
        return false;
      }if(document.formDISPENSASI.tempatakad.value == "" || document.formDISPENSASI.tempatakad.value == null){
        alert("Isi Alamat Mempelai Pria Terlebih dahulu");
        document.formDISPENSASI.tempatakad.focus();
        return false;
      }if(document.formDISPENSASI.alasan.value == "" || document.formDISPENSASI.alasan.value == null){
        alert("Isi Alasan Dispensasi Terlebih dahulu");
        document.formDISPENSASI.alasan.focus();
        return false;
      }
        return true;
    }else{
      return false;
    }
}
    </script>

<div class="container" style="padding-top:70px;">
  <h3 class="text-center">Form Permohonan Dispensasi Nikah</h3>
  <br>
    <form method="post" name="formDISPENSASI" action="controller/controller_pemohon.php?aksi=tambah_dispensasi" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
    <br>
        <div class="form-body">
             <div class="form-group">
                   <input name="id_dispensasi" type="hidden" class="form-control">
             </div>
             <label>Calon Pengantin Wanita :</label>           
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="namawanita" type="text" class="form-control" placeholder="Nama Mempelai Wanita" id="restrict">
                   </div>                   
              </div>
                                    
                   <div class="form-group sub">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-duplicate"></span></div>
                        <input name="tempatwanita" type="text" class="form-control" placeholder="Tempat Lahir">
                        </div>                   
                   </div>
                            
                   <div class="form-group sub">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-duplicate"></span><label>Tangal Lahir</label></div>
                        <input name="tanggalwanita" type="date" class="form-control lebarinputan" placeholder="Bulan-Hari-Tahun (03-12-1991)">
                        </div>              
                   </div>
              
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-object-align-bottom"></span></div>
                   <input name="usiawanita" type="text" class="form-control" placeholder="Usia Mempelai Wanita">
                   </div>                     
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input name="pekerjaanwanita" type="text" class="form-control" placeholder="Pekerjaan">
                   </div>                    
              </div>
              <div class="form-group sub">                
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span><label>Status</label></div>
                    <select class="form-control" name="statuswanita">
                     <option value="Perawan">Perawan</option>
                     <option value="Janda">Janda</option>
                    </select>
                   </div>
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-home"></span></div>
                   <input name="alamatwanita" type="text" class="form-control" placeholder="Alamat">
                   </div>                  
              </div>
              <label>Calon Pengantin Pria :</label>           
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="namapria" type="text" class="form-control" placeholder="Nama Mempelai Pria">
                   </div>                   
              </div>
                                    
                   <div class="form-group sub">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-duplicate"></span></div>
                        <input name="tempatpria" type="text" class="form-control" placeholder="Tempat Lahir">
                        </div>                   
                   </div>
                            
                   <div class="form-group sub">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-duplicate"></span><label>Tangal Lahir</label></div>
                        <input name="tanggalpria" type="date" class="form-control lebarinputan" placeholder="Bulan-Hari-Tahun (03-12-1991)">
                        </div>              
                   </div>
              
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-object-align-bottom"></span></div>
                   <input name="usiapria" type="text" class="form-control" placeholder="Usia Mempelai Pria">
                   </div>                     
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input name="pekerjaanpria" type="text" class="form-control" placeholder="Pekerjaan">
                   </div>                    
              </div>
              <div class="form-group sub">
                 <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span><label>Status</label></div>
                 <select class="form-control" name="statuspria" >
                     <option value="Perjaka">Perjaka</option>
                     <option value="Duda">Duda</option>
                 </select>
               </div>
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-home"></span></div>
                   <input name="alamatpria" type="text" class="form-control" placeholder="Alamat">
                   </div>                  
              </div>
              <label>Akad Nikah Pada : </label>
              <div class="form-group sub">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-duplicate"></span><label>Tangal Akad</label></div>
                        <input name="tanggalakad" type="date" class="form-control lebarinputan" placeholder="Bulan-Hari-Tahun (03-12-2016)">
                        </div>              
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-home"></span></div>
                   <input name="tempatakad" type="text" class="form-control" placeholder="Tempat Akad Nikah">
                   </div>                  
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-home"></span></div>
                   <input name="alasan" type="text" class="form-control" placeholder="Alasan ">
                   </div>                  
              </div>
            
            <div class="form-footer">
                 <button  type="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-save"></span>Simpan dan Download!
                 </button>
            </div>


            </form>
            </div>
 </div>
</body>


</html>
