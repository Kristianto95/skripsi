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
              
  if(confirm("Yakin data akan di simpan? Data yang sudah diajukan apabila terjadi kesalahan penulisan tidak dapat diganti, pastikan data tidak ada kesalahan. ")){
      if(document.formHO.perihal.value == "perihal" || document.formHO.perihal.value == null){
        alert("Isi Pendaftaran Ke Berapa Terlebih dahulu");
        document.formHO.perihal.focus();
        return false;
      }if(document.formHO.daftar_ke.value == "" || document.formHO.daftar_ke.value == null){
        alert("Isi Pendaftaran Ke Berapa Terlebih dahulu");
        document.formHO.daftar_ke.focus();
        return false;
      }if(document.formHO.namausaha.value == "" || document.formHO.namausaha.value == null){
        alert("Isi Nama Usaha Anda Terlebih dahulu");
        document.formHO.namausaha.focus();
        return false;
      }
      if(document.formHO.jenisusaha.value == "Jenis Usaha" || document.formHO.jenisusaha.value == null){
        alert("Isi Jenis Usaha Terlebih dahulu");
        document.formHO.jenisusaha.focus();
        return false;
      }if(document.formHO.alamatusaha.value == "" || document.formHO.alamatusaha.value == null){
        alert("Isi Alamat Usaha Anda Terlebih dahulu");
        document.formHO.alamatusaha.focus();
        return false;
      }if(document.formHO.luas.value == "" || document.formHO.luas.value == null){
        alert("Isi Luas Tempat Usaha Terlebih dahulu");
        document.formHO.luas.focus();
        return false;
      }if(document.formHO.modal.value == "" || document.formHO.modal.value == null){
        alert("Isi Besar Modal Usaha Anda Terlebih dahulu");
        document.formHO.modal.focus();
        return false;
      }if(document.formHO.karyawan.value == "" || document.formHO.karyawan.value == null){
        alert("Isi Jumlah Karyawan Anda Terlebih dahulu");
        document.formHO.karyawan.focus();
        return false;
      }if(document.formHO.no_ho.value == "" || document.formHO.no_ho.value == null){
        alert("Isi No Ijin Gangguan Terlebih dahulu");
        document.formHO.no_ho.focus();
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
  <h3 class="text-center">Form Permohonan Izin Gangguan</h3>
  <br>
      <form method="post" name="formHO" action="controller/controller_pemohon.php?aksi=tambah_ho" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)" >
    <br>
        <div class="form-body">
            <div class="form-group">
                   <div class="input-group">
                   <input name="id_ho" type="hidden" class="form-control">
                   </div>
              </div>
              <div class="form-group">
                  <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Perihal</b></div>
                   <select class="form-control" name="perihal" id="restrict">
                      <option  value="perihal"selected disabled>--Perihal yang diajukan--</option>
                      <option value="Izin Gangguan Mendirikian Usaha">Izin Gangguan Mendirikian Usaha</option>
                      <option value="Pembaharuan Izin Gangguan Usaha">Pembaharuan izin Gangguan Usaha</option>
                   </select>
                  </div> 
              </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-home"></span></div>
                   <input name="daftar_ke" type="text" class="form-control" placeholder="Pendaftaran Ke" onkeypress="return isNumberKey(event)" maxlength="3">
                   </div>                  
              </div>
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-home"></span></div>
                   <input name="namausaha" type="text" class="form-control" placeholder="Nama Usaha">
                   </div>                  
              </div>                        
              <div class="form-group">
               <div class="input-group"><div class="input-group-addon"><b>Jenis Usaha</b></div>
                 <select class="form-control" name="jenisusaha">
                     <option value="Jenis Usaha" selected disabled>--Pilih Jenis Usaha--</option>
                     <option value="Apotek">Apotek</option>
                     <option value="Bengkel Kendaraan / Las / Lainnya">Bengkel Kendaraan / Las / Lainnya</option>
                     <option value="Bimbingan Belajar / Kursus">Bimbingan Belajar / Kursus</option>
                     <option value="Bidang Keagamaan">Bidang Keagamaan</option>
                     <option value="Foto Copy">Foto Copy</option>
                     <option value="Konter HP">Konter HP</option>
                     <option value="Konveksi">Konveksi</option>
                     <option value="Pengelolaan Limbah">Pengelolaan Limbah</option>
                     <option value="Percetakan">Percetakan</option>
                     <option value="Persewaan Barang / Jasa / Kendaraan">Persewaan Barang / Jasa / Kendaraan</option>
                     <option value="Rumah Makan">Rumah Makan</option>
                     <option value="Studio Musik">Studio Musik</option>
                     <option value="Studio Photo">Studio Photo</option>
                     <option value="Tempat Hiburan">Tempat Hiburan</option>
                     <option value="Tempat Olahraga">Tempat Olahraga</option>
                     <option value="Toko Aksesoris">Toko Aksesoris</option>
                     <option value="Toko Bangunan">Toko Bangunan</option>
                     <option value="Toko Buku">Toko Buku</option>
                     <option value="Toko Elektronik">Toko Elektronik</option>
                     <option value="Toko Kelontong">Toko Kelontong</option>
                     <option value="Toko Pakaian">Toko Pakaian</option>
                     <option value="Toko Sembako">Toko Sembako</option>
                  </select>                 
                </div>
              </div>
              
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="alamatusaha" type="text" class="form-control" placeholder="Alamat Usaha">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="luas" type="text" class="form-control" placeholder="Luas Tempat Usaha" onkeypress="return isNumberKey(event)" maxlength="4">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="modal" type="text" class="form-control" placeholder="Besar Modal Usaha" onkeypress="return isNumberKey(event)" maxlength="20">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="karyawan" type="text" class="form-control" placeholder="Jumlah Tenaga Kerja" onkeypress="return isNumberKey(event)" maxlength="5">
                   </div>                  
              </div>
            <div class="form-footer">
                 <button  type="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-save"></span>Simpan dan Cetak!
                 </button>
            </div>
            <br>
            <br>
            <br>


            </form>
            </div>
 </div>