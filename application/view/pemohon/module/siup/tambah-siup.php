
<script type="text/javascript">
        function isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
            return true;
         }

        
        function validasi(elem, min, max){
          var uInput = elem.value;
              
  if(confirm("akin data akan di simpan? Data yang sudah diajukan apabila terjadi kesalahan penulisan tidak dapat diganti, pastikan data tidak ada kesalahan.")){
      if(document.formSIUP.pengajuan.value == "kosong" || document.formSIUP.pengajuan.value == null){
        alert("Isi Jenis Pengajuan Terlebih dahulu");
        document.formSIUP.pengajuan.focus();
        return false;
      }if(document.formSIUP.daftar_ke.value == "" || document.formSIUP.daftar_ke.value == null){
        alert("Isi Pendaftaran Ke Berapa Terlebih dahulu");
        document.formSIUP.daftar_ke.focus();
        return false;
      }if(document.formSIUP.namaperusahaan.value == "" || document.formSIUP.namaperusahaan.value == null){
        alert("Isi Nama Perusahaan Terlebih dahulu");
        document.formSIUP.namaperusahaan.focus();
        return false;
      }if(document.formSIUP.jenis.value == "kosong" || document.formSIUP.jenis.value == null){
        alert("Isi Jenis Perusahaan Terlebih dahulu");
        document.formSIUP.jenis.focus();
        return false;
      }if(document.formSIUP.jabatan.value == "" || document.formSIUP.jabatan.value == null){
        alert("Isi Jabatan Pemilik Terlebih dahulu");
        document.formSIUP.jabatan.focus();
        return false;
      }if(document.formSIUP.npwp.value == "" || document.formSIUP.npwp.value == null){
        alert("Isi NPWP Perusahaan Terlebih dahulu");
        document.formSIUP.npwp.focus();
        return false;  
      }if(document.formSIUP.alamatperusahaan.value == "" || document.formSIUP.alamatperusahaan.value == null){
        alert("Isi Alamat Perusahaan Terlebih dahulu");
        document.formSIUP.alamatperusahaan.focus();
        return false;
      }if(document.formSIUP.provinsi.value == "" || document.formSIUP.provinsi.value == null){
        alert("Isi Provinsi Dimana Perusahaan Berada Terlebih dahulu");
        document.formSIUP.provinsi.focus();
        return false;
      }if(document.formSIUP.kota.value == "" || document.formSIUP.kota.value == null){
        alert("Isi Kota / Kabupaten Dimana Perusahaan Berada Terlebih dahulu");
        document.formSIUP.kota.focus();
        return false;
      }if(document.formSIUP.kecamatan.value == "" || document.formSIUP.kecamatan.value == null){
        alert("Isi Kecamatan Dimana Perusahaan Berada Terlebih dahulu");
        document.formSIUP.kecamatan.focus();
        return false;
      }if(document.formSIUP.desa.value == "" || document.formSIUP.desa.value == null){
        alert("Isi Kelurahan / Desa Dimana Perusahaan Berada Terlebih dahulu");
        document.formSIUP.desa.focus();
        return false;
      }if(document.formSIUP.notelp.value == "" || document.formSIUP.notelp.value == null){
        alert("Isi No Telepon Perusahaan Terlebih dahulu");
        document.formSIUP.notelp.focus();
        return false;
      }if(document.formSIUP.nofax.value == "" || document.formSIUP.nofax.value == null){
        alert("Isi No faximile Terlebih dahulu");
        document.formSIUP.nofax.focus();
        return false;
      }if(document.formSIUP.pos.value == "" || document.formSIUP.pos.value == null){
        alert("Isi Kode Pos Terlebih dahulu");
        document.formSIUP.pos.focus();
        return false;
      // }if(document.formSIUP.penanamanmodal.value == "" || document.formSIUP.penanamanmodal.value == null){
      //   alert("Isi Status Penanaman Modal Terlebih dahulu");
      //   document.formSIUP.penanamanmodal.focus();
      //   return false;
      }if(document.formSIUP.nopendirian.value == "" || document.formSIUP.nopendirian.value == null){
        alert("Isi Nomor Akta Pendirian Terlebih dahulu");
        document.formSIUP.nopendirian.focus();
        return false;
      }if(document.formSIUP.tglpendirian.value == "" || document.formSIUP.tglpendirian.value == null){
        alert("Isi Tanggal Pendirian Terlebih dahulu");
        document.formSIUP.tglpendirian.focus();
        return false;
      }if(document.formSIUP.noperubahan.value == "" || document.formSIUP.noperubahan.value == null){
        alert("Isi Nomor Akta Perubahan Terlebih dahulu");
        document.formSIUP.nopendirian.focus();
        return false;
      }if(document.formSIUP.tglperubahan.value == "" || document.formSIUP.tglperubahan.value == null){
        alert("Isi Tanggal Perubahan Terlebih dahulu");
        document.formSIUP.tglperubahan.focus();
        return false;
      }if(document.formSIUP.modal.value == "" || document.formSIUP.modal.value == null){
        alert("Isi Modal Dan Kekayaan Perusahaan Terlebih dahulu");
        document.formSIUP.modal.focus();
        return false;
      }if(document.formSIUP.carapemasaran.value == "" || document.formSIUP.carapemasaran.value == null){
        alert("Isi  Kelmbagaan Terlebih dahulu");
        document.formSIUP.carapemasaran.focus();
        return false;
      }if(document.formSIUP.kbli.value == "" || document.formSIUP.kbli.value == null){
        alert("Isi  KLBI Terlebih dahulu");
        document.formSIUP.kbli.focus();
        return false;
      }if(document.formSIUP.barjas.value == "" || document.formSIUP.barjas.value == null){
        alert("Isi Barang / Jasa Dagang  Perusahaan Terlebih dahulu");
        document.formSIUP.barjas.focus();
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
  <h3 class="text-center">Form Permohonan Surat Izin Usaha Perdagangan</h3>
  <br>
    <form method="post" name="formSIUP" action="controller/controller_pemohon.php?aksi=tambah_siup"  onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
        <div class="form-body">
            <div class="form-group">
                   <input name="id_siup" type="hidden" class="form-control">
             </div>
             <div class="form-group"> 
              <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span>
                   <label>Pengajuan Untuk</label></div>
                    <select name="pengajuan" class="form-control">
                       <option value="kosong" disabled selected >-- Pilih Jenis Pengajuan --</option>
                       <option value="Surat Izin Usaha Perdagangan Kantor Pusat" >Surat Izin Usaha Perdagangan Kantor Pusat</option>
                       <option value="Surat Izin Usaha Perdagangan Kantor Cabang">Surat Izin Usaha Perdagangan Kantor Cabang</option>
                       <option value="Surat Izin Usaha Perdagangan Kantor Perwakilan">Surat Izin Usaha Perdagangan Kantor Perwakilan</option>
                       <option value="Surat Izin Usaha Perdagangan Perseorangan">Surat Izin Usaha Perdagangan Perseorangan</option>
                    </select>
                   </div> 
              </div>
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                   <input name="daftar_ke" type="text" class="form-control"  id="restrict" placeholder="Pendaftaran Ke" onkeypress="return isNumberKey(event)" maxlength="3">
                   </div>
              </div>                        
            <label>Identitas Perusahaan :</label>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
                   <input name="namaperusahaan" type="text" class="form-control" placeholder="Nama Perusahaan">
                   </div>
              </div>
              <div class="form-group"> 
              <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span>
                   <label>Jenis Perusahaan</label></div>
                    <select name="jenis" class="form-control">
                       <option value="kosong" disabled selected >-- Pilih Jenis Perusahaan --</option>
                       <option value="PT" >Perseroan Terbatas (PT)</option>
                       <option value="PK">Perseroan Komanditer(CV)</option>
                       <option value="PO">Perorangan(PO)</option>
                       <option value="Koperasi">Koperasi</option>
                       <option value="Fa">Firma(Fa)</option>
                       <option value="BUL">Bentuk Usaha Lainnya(BUL)</option>
                    </select>
                   </div> 
              </div>              
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="jabatan" type="text" class="form-control" placeholder="Jabatan Pemilik">
                   </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
                   <input name="npwp" type="text" class="form-control" placeholder="NPWP Perusahaan">
                   </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input name="alamatperusahaan" type="text" class="form-control" placeholder="Alamat Perusahaan">
                   </div>                    
              </div>
             <div class="form-group ">
                  <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                  <input name="provinsi" type="text" class="form-control" placeholder="Provinsi">
                  </div>              
             </div>
             <div class="form-group ">
                  <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                  <input name="kota" type="text" class="form-control" placeholder="Kota / Kabupaten">
                  </div>              
             </div>
             <div class="form-group ">
                  <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                  <input name="kecamatan" type="text" class="form-control" placeholder="Kecamatan">
                  </div>              
             </div>
             <div class="form-group ">
                  <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                  <input name="desa" type="text" class="form-control" placeholder="Kelurahan / Desa">
                  </div>              
             </div>
              <div class="form-group">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></div>
                        <input name="notelp" type="text" class="form-control" placeholder="Nomer Telpon Perusahaan" maxlength="12" onkeypress="return isNumberKey(event)">
                        </div>                   
              </div>                            
             <div class="form-group ">
                  <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                  <input name="nofax" type="text" class="form-control" placeholder="Nomor faximile Perusahaan">
                  </div>              
             </div>                          
             <div class="form-group ">
                  <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                  <input name="pos" type="text" class="form-control" placeholder="Kode Pos" maxlength="5">
                  </div>              
             </div>
            <label>Status Penanaman Modal :</label>
             <div class="row">
                <div class="col-lg-6">
                  <div class="input-group">
                    <span class="input-group-addon glyphicon">
                      <input type="checkbox" name="penanamanmodal" value="Penanaman Modal Dalam Negeri">
                    </span>
                    <input type="text" class="form-control" value="Penanaman Modal Dalam Negeri" readonly>
                  </div><!-- /input-group -->
                </div>

                <div class="col-lg-6">
                  <div class="input-group">
                    <span class="input-group-addon glyphicon">
                      <input type="checkbox" name="penanamanmodal" value="Penanaman Modal Asing">
                    </span>
                    <input type="text" class="form-control" value="Penanaman Modal Asing" readonly>
                  </div><!-- /input-group -->
                </div>
              </div>                
             <label >Akta Pendrian :</label>
              <div class="row">
                <div class="col-lg-6">
                  <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon"></span>a.</div>
                    <input name="nopendirian" type="text" class="form-control" placeholder="Akta Nomor Pendirian">
                  </div><!-- /input-group -->
                </div>
                <div class="col-lg-6">            
                  <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon"></span>b.</div>
                    <input name="tglpendirian" type="date" class="form-control" placeholder="Tanggal Akta Pendirian">
                  </div><!-- /input-group -->
                </div>
              </div>
              <label >Akta Perubahan :</label>
              <div class="row">
                <div class="col-lg-6">
                  <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon"></span>a.</div>
                    <input name="noperubahan" type="text" class="form-control" placeholder="Akta Nomor Perubahan">
                  </div><!-- /input-group -->
                </div>
                <div class="col-lg-6">            
                  <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon"></span>b.</div>
                    <input name="tglperubahan" type="date" class="form-control" placeholder="Tanggal Akta Perubahan">
                  </div><!-- /input-group -->
                </div>
              </div>
                   <div class="form-group col-lg-12">
                         <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></div>
                         <input name="modal" type="text" class="form-control" placeholder="Modal Dan Kekayaan Perusahaan" onkeypress="return isNumberKey(event)" maxlength="35">
                         </div>                   
                    </div>
                    <div class="form-group col-lg-12">
                         <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></div>
                         <input name="saham" type="text" class="form-control" placeholder="Total Nilai Saham" onkeypress="return isNumberKey(event)" maxlength="35">
                         </div>                   
                    </div>
                    <div class="form-group col-lg-12">
                    <label >Komposisi Kepemilikan Saham :</label>
                         <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></div>
                         <input name="sahamnasional" type="text" class="form-control" placeholder="Nasional" onkeypress="return isNumberKey(event)" maxlength="35">
                         <input name="sahamasing" type="text" class="form-control" placeholder="Asing" onkeypress="return isNumberKey(event)" maxlength="35">
                      </div>                   
                    </div>
                         
                    <div class="form-group col-lg-12">
                         <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-shopping-cart"></span></div>
                         <input name="carapemasaran" type="text" class="form-control" placeholder="Kelembagaan">
                         </div>                  
                    </div>
                    <div class="form-group col-lg-12">
                         <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-shopping-cart"></span></div>
                         <input name="kbli" type="text" class="form-control" placeholder="Jenis Industri / KBLI">
                         </div>                  
                    </div>
                    <div class="form-group col-lg-12">
                         <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-object-align-bottom"></span></div>
                         <input name="barjas" type="text" class="form-control" placeholder="Barang / Jasa Dagang Perusahaan">
                         </div>                     
                    </div> 
                  <div class="form-footer col-lg-12">
                       <button  type="submit" name="submit" class="btn btn-info">
                       <span class="glyphicon glyphicon-save"></span>Simpan dan Download!
                       </button>
                  </div>
              </div>
            </form>
            </div>
 </div>