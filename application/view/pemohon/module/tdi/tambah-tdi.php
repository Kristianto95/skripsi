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
      if(document.formTDI.daftar_ke.value == "" || document.formTDI.daftar_ke.value == null){
        alert("Isi Pendaftaran Ke Berapa  Terlebih dahulu");
        document.formTDI.daftar_ke.focus();
        return false;
      }if(document.formTDI.namaperusahaan.value == "" || document.formTDI.namaperusahaan.value == null){
        alert("Isi Nama Perusahaan Terlebih dahulu");
        document.formTDI.namaperusahaan.focus();
        return false;
      }if(document.formTDI.alamatperusahaan.value == "" || document.formTDI.alamatperusahaan.value == null){
        alert("Isi Alamat Perusahaan Terlebih dahulu");
        document.formTDI.alamatperusahaan.focus();
        return false;
      }
      if(document.formTDI.notelp.value == "" || document.formTDI.notelp.value == null){
        alert("Isi no Telepon Perusahaan Terlebih dahulu");
        document.formTDI.notelp.focus();
        return false;
      }if(document.formTDI.npwp.value == "" || document.formTDI.npwp.value == null){
        alert("Isi NPWP Terlebih dahulu");
        document.formTDI.npwp.focus();
        return false;
      }if(document.formTDI.lokasi.value == "" || document.formTDI.lokasi.value == null){
        alert("Isi Alamat Pabrik Terlebih dahulu");
        document.formTDI.lokasi.focus();
        return false;
      }if(document.formTDI.desa.value == "" || document.formTDI.desa.value == null){
        alert("Isi Di Desa Mana Pabrik Ada, Terlebih dahulu");
        document.formTDI.desa.focus();
        return false;
      }if(document.formTDI.kecamatan.value == "" || document.formTDI.kecamatan.value == null){
        alert("Isi Di Kecamatan Mana Pabrik berada, Terlebih dahulu");
        document.formTDI.kecamatan.focus();
        return false;
      }if(document.formTDI.kepemilikan.value == "" || document.formTDI.kepemilikan.value == null){
        alert("Isi Kepemilikan Pabrik Terlebih dahulu");
        document.formTDI.kepemilikan.focus();
        return false;
      }if(document.formTDI.luasbangunan.value == "" || document.formTDI.luasbangunan.value == null){
        alert("Isi Luas Bangunan Pabrik Terlebih dahulu");
        document.formTDI.luasbangunan.focus();
        return false;
      }if(document.formTDI.luastanah.value == "" || document.formTDI.luastanah.value == null){
        alert("Isi Luas Tanah Perusahaan Terlebih dahulu");
        document.formTDI.luastanah.focus();
        return false;
      }if(document.formTDI.mesinutama.value == "" || document.formTDI.mesinutama.value == null){
        alert("Isi Mesin / Peralatan Utama Pabrik Terlebih dahulu");
        document.formTDI.mesinutama.focus();
        return false;
      }if(document.formTDI.mesinpembantu.value == "" || document.formTDI.mesinpembantu.value == null){
        alert("Isi Mesin / Peralatan Pembantu Pabrik Terlebih dahulu");
        document.formTDI.mesinpembantu.focus();
        return false;
      }if(document.formTDI.tenaga.value == "" || document.formTDI.tenaga.value == null){
        alert("Isi Tenaga Penggerak Pabrik Terlebih dahulu");
        document.formTDI.tenaga.focus();
        return false;
      }if(document.formTDI.kapasitas.value == "" || document.formTDI.kapasitas.value == null){
        alert("Isi Kapasitas Produksi Per Tahun Terlebih dahulu");
        document.formTDI.kapasitas.focus();
        return false;
      }if(document.formTDI.komoditi.value == "" || document.formTDI.komoditi.value == null){
        alert("Isi Komoditi Pabrik Terlebih dahulu");
        document.formTDI.komoditi.focus();
        return false;
      }if(document.formTDI.kebutuhan.value == "" || document.formTDI.kebutuhan.value == null){
        alert("Isi Kebutuhan Bahan Baku  Pabrik Terlebih dahulu");
        document.formTDI.kebutuhan.focus();
        return false;
      }if(document.formTDI.jumlah.value == "" || document.formTDI.jumlah.value == null){
        alert("Isi Tenaga Kerja Perusahaan Terlebih dahulu");
        document.formTDI.jumlah.focus();
        return false;
      }if(document.formTDI.laki.value == "" || document.formTDI.laki.value == null){
        alert("Isi Tenaga Kerja Pria Perusahaan Terlebih dahulu");
        document.formTDI.laki.focus();
        return false;
      }if(document.formTDI.wanita.value == "" || document.formTDI.wanita.value == null){
        alert("Isi Tenaga Kerja Wanita Perusahaan Terlebih dahulu");
        document.formTDI.wanita.focus();
        return false;
      }if(document.formTDI.nilai.value == "" || document.formTDI.nilai.value == null){
        alert("Isi Kegunaan Bangunan Terlebih dahulu");
        document.formTDI.nilai.focus();
        return false;
      }if(document.formTDI.merk.value == "" || document.formTDI.merk.value == null){
        alert("Isi Merk Produk Terlebih dahulu");
        document.formTDI.merk.focus();
        return false;
      }if(document.formTDI.nomerk.value == "" || document.formTDI.nomerk.value == null){
        alert("Isi No merk / No Lisesnsi Terlebih dahulu");
        document.formTDI.nomerk.focus();
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
  <h3 class="text-center">Form Permohonan Tanda Daftar Industri</h3>
  <br>
    <form method="post" name="formTDI" action="controller/controller_pemohon.php?aksi=tambah_tdi" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
        <div class="form-body">
             <div class="form-group">
                   <input name="id_tdi" type="hidden" >
              </div>   
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                   <input name="daftar_ke" type="text" class="form-control" placeholder="Pendaftaran Ke"  id="restrict" onkeypress="return isNumberKey(event)" maxlength="3">
                   </div>
              </div>          
            
              </div>
              <div class="form-group">
                 <label>Data Umum Perusahaan :</label>
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
                   <input name="namaperusahaan" type="text" class="form-control" placeholder="Nama Perusahaan">
                   </div>
              </div>
               <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input name="alamatperusahaan" type="text" class="form-control" placeholder="Alamat Perusahaan">
                   </div>                    
              </div>
              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></div>
                        <input name="notelp" type="text" class="form-control" placeholder="Nomer Telpon Perusahaan" onkeypress="return isNumberKey(event)" maxlength="12">
                        </div>                   
                   </div>
                            
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                        <input name="nofax" type="text" class="form-control" placeholder="Nomor faximile" onkeypress="return isNumberKey(event)">
                        </div>              
                   </div>
                  <div class="form-group col-lg-6">
                       <div class="input-group">
                       <div class="input-group-addon"><span class="glyphicon glyphicon-list"></span></div>
                       <input name="npwp" type="text" class="form-control" placeholder="NPWP Pemilik" onkeypress="return isNumberKey(event)" maxlength="20">
                       </div>
                  </div>
                  <div class="form-group col-lg-6">
                       <div class="input-group">
                       <div class="input-group-addon"><span class="glyphicon glyphicon-list"></span></div>
                       <input name="nipik" type="text" class="form-control" placeholder="NIPIK Pemilik" onkeypress="return isNumberKey(event)" maxlength="20">
                       </div>
                  </div>
              </div>
              <label>Lokasi Pabrik :</label>
              <div class="form-group">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                        <input name="lokasi" type="text" class="form-control" placeholder="Alamat Pabrik">
                        </div>                                       
                   </div>
              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></div>
                        <input name="desa" type="text" class="form-control" placeholder="Desa">
                        </div>                   
                   </div>
                            
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                        <input name="kecamatan" type="text" class="form-control" placeholder="Kecamatan">
                        </div>              
                   </div>
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                        <input name="kabupaten" type="text" class="form-control" value="Pekalongan" placeholder="Kabupaten" readonly>
                        </div>              
                   </div>
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                        <input name="provinsi" type="text" class="form-control" value="Jawa Tengah" readonly>
                        </div>                                       
                   </div>
              </div>  
              <div class="form-group">
                <div class="input-group">
                 <div class="input-group-addon"><span class="glyphicon"></span><label>Kepemilikan :</label></div>
                 <select class="form-control" name="kepemilikan">
                     <option value="Milik Sendiri">Milik Sendiri</option>
                     <option value="Sewa">Sewa</option>
                 </select>
                </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input name="luasbangunan" type="text" class="form-control" placeholder="Luas Bangunan (dalam meter persegi)" onkeypress="return isNumberKey(event)" maxlength="5">
                   </div>                    
              </div>
              
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-fullscreen"></span></div>
                   <input name="luastanah" type="text" class="form-control" placeholder="Luas Tanah (dalam meter persegi)" onkeypress="return isNumberKey(event)" maxlength="5">
                   </div>                   
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-object-align-bottom"></span></div>
                   <input name="mesinutama" type="text" class="form-control" placeholder="Mesin / Peralatan Utama">
                   </div>                     
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-object-align-bottom"></span></div>
                   <input name="mesinpembantu" type="text" class="form-control" placeholder="Mesin / Peralatan Pembantu">
                   </div>                     
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-flash"></span></div>
                   <input name="tenaga" type="text" class="form-control" placeholder="Tenaga Penggerak">
                   </div>                     
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-link"></span></div>
                   <input name="kbli" type="text" class="form-control" placeholder="Jenis Industri">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-link"></span></div>
                   <input name="komoditi" type="text" class="form-control" placeholder="Komoditi">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-retweet"></span></div>
                   <input name="kapasitas" type="text" class="form-control" placeholder="Kapasitas Produksi Per Tahun" onkeypress="return isNumberKey(event)" maxlength="5">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-list"></span></div>
                   <input name="kebutuhan" type="text" class="form-control" placeholder="Kebutuhan Bahan Baku">
                   </div>                  
              </div>
              <label>Tenaga Kerja :</label>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-bishop"></span></div>
                   <input name="jumlah" type="text" class="form-control" placeholder="Jumlah Tenaga Kerja" onkeypress="return isNumberKey(event)" maxlength="5">
                   </div>                  
              </div>
                 <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></div>
                        <input name="laki" type="text" class="form-control" placeholder="Jumlah Tenaga Kerja Pria" onkeypress="return isNumberKey(event)" maxlength="5">
                        </div>                   
                   </div>
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></div>
                        <input name="wanita" type="text" class="form-control" placeholder="Jumlah Tenaga Kerja wanita" onkeypress="return isNumberKey(event)" maxlength="">
                        </div>                   
                   </div>         
                 </div>
                 <br>  
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></div>
                   <input name="nilai" type="text" class="form-control" placeholder="Nilai Investasi" onkeypress="return isNumberKey(event)" maxlength="25">
                   </div>                  
              </div>  
              <div class="form-group">
                 <label>Merek :</label>
                 <select class="form-control" name="merk">
                     <option value="Milik Sendiri">Milik Sendiri</option>
                     <option value="Lisensi">Lisesnsi</option>
                 </select>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></div>
                   <input name="nomerk" type="text" class="form-control" placeholder="Nomer Merk / Lisensi" onkeypress="return isNumberKey(event)" maxlength="25">
                   </div>                  
              </div>     
                         
         <br>
        
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