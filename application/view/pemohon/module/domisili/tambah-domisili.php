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
       if(document.formDomisili.nama.value == "" || document.formDomisili.nama.value == null){
        alert("Isi Nama Anda Terlebih dahulu");
        document.formDomisili.nama.focus();
        return false;
      }if(document.formDomisili.tempat.value == "" || document.formDomisili.tempat.value == null){
        alert("Isi Tempat Lahir Anda Anda Terlebih dahulu");
        document.formDomisili.tempat.focus();
        return false;
      }if(document.formDomisili.tanggal.value == "" || document.formDomisili.tanggal.value == null){
        alert("Isi Tanggal Lahir Anda Terlebih dahulu");
        document.formDomisili.tanggal.focus();
        return false;
      }if(document.formDomisili.jekel.value == "" || document.formDomisili.jekel.value == null){
        alert("Isi Jenis Kelamin Anda Terlebih dahulu");
        document.formDomisili.jekel.focus();
        return false;
      }if(document.formDomisili.alamat.value == "" || document.formDomisili.alamat.value == null){
        alert("Isi Alamat Anda Terlebih dahulu");
        document.formDomisili.alamat.focus();
        return false;
      }if(document.formDomisili.rt.value == "" || document.formDomisili.rt.value == null){
        alert("Isi Di RT Berapa Anda Tinggal Terlebih dahulu");
        document.formDomisili.rt.focus();
        return false;
      }if(document.formDomisili.rw.value == "" || document.formDomisili.rw.value == null){
        alert("Isi Di RW Berapa Anda Tinggal Terlebih dahulu");
        document.formDomisili.rw.focus();
        return false;
      }if(document.formDomisili.desa.value == "" || document.formDomisili.desa.value == null){
        alert("Isi Di Desa Mana Anda Tinggal Terlebih dahulu");
        document.formDomisili.desa.focus();
        return false;
      }if(document.formDomisili.kecamatan.value == "" || document.formDomisili.kecamatan.value == null){
        alert("Isi Di Kecamatan Mana Anda Tinggal Terlebih dahulu");
        document.formDomisili.kecamatan.focus();
        return false;
      }if(document.formDomisili.agama.value == "" || document.formDomisili.agama.value == null){
        alert("Isi Apa Agama Anda Terlebih dahulu");
        document.formDomisili.agama.focus();
        return false;
      }if(document.formDomisili.pekerjaan.value == "" || document.formDomisili.pekerjaan.value == null){
        alert("Isi Pekerjaan Anda Terlebih dahulu");
        document.formDomisili.pekerjaan.focus();
        return false;
      }if(document.formDomisili.status.value == "" || document.formDomisili.status.value == null){
        alert("Isi Status Pernikahan Anda Terlebih dahulu");
        document.formDomisili.status.focus();
        return false;
      }if(document.formDomisili.kewarganegaraan.value == "" || document.formDomisili.kewarganegaraan.value == null){
        alert("Isi Pekerjaan Anda Terlebih dahulu");
        document.formDomisili.kewarganegaraan.focus();
        return false;
      }if(document.formDomisili.nohp.value == "" || document.formDomisili.nohp.value == null){
        alert("Isi No Telpon /No HP anda Anda Terlebih dahulu");
        document.formDomisili.nohp.focus();
        return false;
      }if(document.formDomisili.no_domisili.value == "" || document.formDomisili.no_domisili.value == null){
        alert("Isi No Domisili Anda Terlebih dahulu");
        document.formDomisili.no_domisili.focus();
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
  <h3 class="text-center">Form Permohonan Domisili</h3>
  <br>
       <form method="post" name="formDomisili"  action="controller/controller_pemohon.php?aksi=tambah_domisili" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
    <br>
              <div class="form-body">
                   <input name="id_domisili" type="hidden">
              </div>
              <div class="form-group ">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                        <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap "   id="restrict"  >
                        </div>                   
              </div>   
              <div class="form-group ">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-duplicate"></span></div>
                        <input name="tempat" type="text" class="form-control" placeholder="Tempat Lahir">
                        </div>                   
              </div>
              <div class="form-group">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-date"></span><label>Tangal Lahir</label></div>
                        <input name="tanggal" type="date" class="form-control lebarinputan" placeholder="Tanggal Lahir">
                        </div>              
                   </div>
              <div class="form-group">
                 <label>Jenis Kelamin</label>
                 <select class="form-control" name="jekel">
                     <option value="Laki - Laki">Laki-Laki</option>
                     <option value="Perempuan">Perempuan</option>
                 </select>
               </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-object-align-home"></span></div>
                   <input name="alamat" type="text" class="form-control" placeholder="Alamat Anda">
                   </div>                     
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-object-align-duplicated"></span></div>
                   <input name="rt" type="text" class="form-control" placeholder="RT (contoh : 01) " onkeypress="return isNumberKey(event)">
                   <input name="rw" type="text" class="form-control" placeholder="RW (contoh : 01)" onkeypress="return isNumberKey(event)">
                   </div>                                        
              </div>

              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-object-align-duplicate"></span></div>
                   <input name="desa" type="text" class="form-control" placeholder="Desa">
                   </div>                                        
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-object-align-duplicate"></span></div>
                   <input name="kecamatan" type="text" class="form-control" placeholder="Kecamatan">
                   </div>                                        
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon">Kabupaten</span></div>
                   <input name="kabupaten" type="text" class="form-control" value="Pekalongan" readonly>
                   </div>                                        
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon">Provinsi</span></div>
                   <input name="provinsi" type="text" class="form-control" value="Jawa Tengah" readonly>
                   </div>                                        
              </div>
              <div class="form-group">
                 <label>Agama</label>
                 <select class="form-control" name="agama">
                     <option value="Islam">Islam</option>
                     <option value="Kristen">Kristen</option>
                     <option value="Katolik">Katolik</option>
                     <option value="Hindu">Hindu</option>
                     <option value="Budha">Budha</option>
                     <option value="Konghucu">Konghucu</option>
                 </select>
               </div>
               <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input name="pekerjaan" type="text" class="form-control" placeholder="Pekerjaan Anda">
                   </div>                    
              </div>
              <div class="form-group">
                 <label>Status Perkawinan :</label>
                 <select class="form-control" name="status">
                     <option value="Belum Nikah">Belum Nikah</option>
                     <option value="Nikah">Menikah</option>
                 </select>
               </div>
               <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input name="kewarganegaraan" type="text" class="form-control" placeholder="Kewarganegaraan Anda">
                   </div>                    
              </div>
            <div class="form-footer">
                 <button  type="submit" name="cek" class="btn btn-info" id="cek">
                 <span class="glyphicon glyphicon-save"></span>Simpan dan Download!
                 </button>
            </div>
            </form>
            </div>
 </div>
</body>


</html>
