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
      if(document.formIUMK.daftar_ke.value == "" || document.formIUMK.daftar_ke.value == null){
        alert("Isi Pendaftaran Ke Berapa Terlebih dahulu");
        document.formIUMK.daftar_ke.focus();
        return false;
      }if(document.formIUMK.namausaha.value == "" || document.formIUMK.namausaha.value == null){
        alert("Isi Nama Usaha Anda Terlebih dahulu");
        document.formIUMK.namausaha.focus();
        return false;
      }if(document.formIUMK.jenisusaha.value == "kosong" || document.formIUMK.jenisusaha.value == null){
        alert("Isi Jenis Usaha Terlebih dahulu");
        document.formIUMK.jenisusaha.focus();
        return false;
      }if(document.formIUMK.bentukusaha.value == "kosong" || document.formIUMK.bentukusaha.value == null){
        alert("Isi Bentuk Usaha Terlebih dahulu");
        document.formIUMK.bentukusaha.focus();
        return false;
      }if(document.formIUMK.saranausaha.value == "kosong" || document.formIUMK.saranausaha.value == null){
        alert("Isi Sarana Usaha Terlebih dahulu");
        document.formIUMK.saranausaha.focus();
        return false;
      }if(document.formIUMK.alamatusaha.value == "" || document.formIUMK.alamatusaha.value == null){
        alert("Isi Alamat Usaha Anda Terlebih dahulu");
        document.formIUMK.alamatusaha.focus();
        return false;
      }if(document.formIUMK.notelp.value == "" || document.formIUMK.notelp.value == null){
        alert("Isi no telpon / handphone yang bisa dihubungi Terlebih dahulu");
        document.formIUMK.notelp.focus();
        return false;
      }if(document.formIUMK.modal.value == "" || document.formIUMK.modal.value == null){
        alert("Isi Modal Usaha anda Terlebih dahulu");
        document.formIUMK.modal.focus();
        return false;
      }if(document.formIUMK.npwp.value == "" || document.formIUMK.npwp.value == null){
        alert("Isi NPWP anda Terlebih dahulu");
        document.formIUMK.npwp.focus();
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
  <h3 class="text-center">Form Permohonan Izin Usaha Mikro dan Kecil</h3>
  <br>
       <form method="post"  name="formIUMK" action="controller/controller_pemohon.php?aksi=tambah_iumk" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)" >
            <div class="form-body">
               <input name="id_iumk" type="hidden" class="form-control">
            </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
                   <input name="daftar_ke" type="text" class="form-control" placeholder="Pendaftaran Ke" onkeypress="return isNumberKey(event)" maxlength="3">
                   </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
                   <input name="namausaha" type="text" class="form-control" placeholder="Nama Usaha" id="restrict">
                   </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span>
                     <label>Jenis Usaha</label></div>
                 <select class="form-control" name="jenisusaha">
                     <option value="kosong">--Pilih Jenis Usaha--</option>
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
                   <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span><label>Bentuk Usaha</label></div>
                       <select name="bentukusaha" class="form-control">                           
                           <option value="kosong">--Pilih Bentuk Usaha--</option>
                           <option value="Perorangan">Perorangan</option>
                           <option value="Kelompok">Kelompok</option>
                       </select>
               </div>
              </div>
              <div class="form-group">
                 <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span><label>Sarana Usaha</label></div>
                       <select name="saranausaha" class="form-control">                           
                           <option value="kosong">--Pilih Sarana Usaha--</option>
                           <option value="Sewa">Sewa</option>
                           <option value="Milik Sendiri">Milik Sendiri</option>
                       </select>
                  </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input name="alamatusaha" type="text" class="form-control" placeholder="Alamat Usaha">
                   </div>                    
              </div>
              <div class="row">
                        
                   <div class="form-group col-lg-12">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></div>
                        <input name="notelp" type="text" class="form-control" onkeypress="return isNumberKey(event)" placeholder="Nomer Telepon Usaha" maxlength="12" >
                        </div>                   
                   </div>
                   <div class="form-group col-lg-12">
                       <div class="input-group">
                       <div class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></div>
                       <input  onkeypress="return isNumberKey(event)" name="modal" type="text" class="form-control" placeholder="Modal Usaha" maxlength="15">
                       </div>                   
                  </div>
                  <div class="form-group col-lg-12">
                       <div class="input-group">
                       <div class="input-group-addon"><span class="glyphicon glyphicon-object-align-bottom"></span></div>
                       <input name="npwp" type="text" class="form-control" onkeypress="return isNumberKey(event)" placeholder="NPWP" maxlength="20">
                       </div>                     
                  </div>
                  <div class="form-footer">
                       <button  type="submit" name="cek" class="btn btn-info" id="cek">
                       <span class="glyphicon glyphicon-save"></span>Simpan dan Download!
                       </button>
                  </div>
             </div>   
      </form>
   </div>
 </div>