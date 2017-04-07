<?php
    include "../application/model/config.php";
    $stmt = $db->prepare('SELECT * FROM ijin_siup WHERE registrasi=:registrasi');
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $cek = $db->query("SELECT no_siup FROM ijin_siup ORDER BY id_siup DESC LIMIT 1");
    $cek = $cek->fetch(PDO::FETCH_ASSOC);
    $ex = explode('/', $cek['no_siup']);
    $c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
    $bulan = $c[date('n')];
        if ($bulan =='I'){
        $a = str_pad(1,3,'0', STR_PAD_LEFT);
        }
        else{
        $a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT); 
        }
    $reg = 'Reg_SIUP/PATEN/Bojong/KabPekalongan';
    $tahun = date('Y');
    $no_siup = $a.'/'.$reg.'/'.$bulan.'/'.$tahun;

?>

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
      if(document.formSIUP.noktp.value == "" || document.formSIUP.noktp.value == null){
        alert("Isi No KTP / NIK  Terlebih dahulu");
        document.formSIUP.noktp.focus();
        return false;
      }if(document.formSIUP.namapemohon.value == "" || document.formSIUP.namapemohon.value == null){
        alert("Isi Nama Anda Terlebih dahulu");
        document.formSIUP.namapemohon.focus();
        return false;
      }if(document.formSIUP.alamatpemohon.value == "" || document.formSIUP.alamatpemohon.value == null){
        alert("Isi Alamat Lengkap Anda Terlebih dahulu");
        document.formSIUP.alamatpemohon.focus();
        return false;
      }if(document.formSIUP.nohp.value == "" || document.formSIUP.nohp.value == null){
        alert("Isi No handphone / Telpon Anda Terlebih dahulu");
        document.formSIUP.nohp.focus();
        return false;
      }if(document.formSIUP.namaperusahaan.value == "" || document.formSIUP.namaperusahaan.value == null){
        alert("Isi Nama Perusahaan Terlebih dahulu");
        document.formSIUP.namaperusahaan.focus();
        return false;
      }if(document.formSIUP.jenis.value == "" || document.formSIUP.jenis.value == null){
        alert("Isi Jenis Perusahaan Terlebih dahulu");
        document.formSIUP.jenis.focus();
        return false;
      }if(document.formSIUP.alamatperusahaan.value == "" || document.formSIUP.alamatperusahaan.value == null){
        alert("Isi Alamat Perusahaan Terlebih dahulu");
        document.formSIUP.alamatperusahaan.focus();
        return false;
      }
      if(document.formSIUP.jabatan.value == "" || document.formSIUP.jabatan.value == null){
        alert("Isi Jabatan Anda Terlebih dahulu");
        document.formSIUP.jabatan.focus();
        return false;
      }if(document.formSIUP.notelp.value == "" || document.formSIUP.notelp.value == null){
        alert("Isi No Telepon Perusahaan Terlebih dahulu");
        document.formSIUP.notelp.focus();
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
      }if(document.formSIUP.masber.value == "" || document.formSIUP.masber.value == null){
        alert("Isi Barang / Jasa Dagang  Perusahaan Terlebih dahulu");
        document.formSIUP.masber.focus();
        return false;
      }
        return true;
  }else{
      return false;
    }
}
    </script>
</head>

<div class="container-fluid kotak5">
  <h3 class="text-center">Form Permohonan Surat Izin Usaha Perdagangan</h3>
  <br>
    <form method="post" name="formSIUP" enctype="multipart/form-data" action="../application/controller/controller_admin.php?aksi=tambah_siup"  onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
        <div class="form-body">
            <div class="form-group">
                   <input name="id_siup" type="hidden" class="form-control">
             </div>
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                   <input name="noktp" type="text" class="form-control"  id="restrict" placeholder="No KTP" maxlength="16" onkeypress="return isNumberKey(event)">
                   </div>
              </div> 
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <input name="daftar_ke" type="text" class="form-control"  placeholder="Daftar_ke" maxlength="3" >
                   </div>
              </div>         
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
                   <input name="namaperusahaan" type="text" class="form-control" placeholder="Nama Perusahaan">
                   </div>
                   <div class="input-group">
                   <label>Jenis Perusahaan</label>
                    <select name="jenis" class="form-control">
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
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input name="alamatperusahaan" type="text" class="form-control" placeholder="Alamat Perusahaan">
                   </div>                    
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input name="desa" type="text" class="form-control" placeholder="Desa">
                   </div>                    
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input name="kecamatan" type="text" class="form-control" placeholder="Kecamatan">
                   </div>                    
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input name="kota" type="text" class="form-control" placeholder="Kabupaten / Kota">
                   </div>                    
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input name="provinsi" type="text" class="form-control" placeholder="Provinsi">
                   </div>                    
              </div>
              
              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></div>
                        <input name="notelp" type="text" class="form-control" placeholder="Nomer Telpon Perusahaan" maxlength="12" onkeypress="return isNumberKey(event)">
                        </div>                   
                   </div>
                            
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                        <input name="nofax" type="text" class="form-control" placeholder="Nomor faximile Perusahaan">
                        </div>              
                   </div>
              </div><div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
                   <input name="pos" type="text" class="form-control" placeholder="Kodepos">
                   </div><br>

                   <div class="input-group">
                   <label>Status Perusahaan</label>
                    <select name="jenis" class="form-control">
                       <option value="PMA" >PMA</option>
                       <option value="PMDN">PMDN</option>
                    </select>
                   </div> 
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></div>
                   <input name="nopendirian" type="text" class="form-control" placeholder="No Akta Pendirian Perusahaan" onkeypress="return isNumberKey(event)" maxlength="75">
                   </div>                   
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span>Tanggal Akta Pendirian Perusahaan</div>
                   <input name="tgtlpendirian" type="date" class="form-control" placeholder="Tanggal Akta Pendirian Perusahaan">
                   </div>                   
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></div>
                   <input name="noperubahan" type="text" class="form-control" placeholder="No Perubahan Akta Pendirian Perusahaan" onkeypress="return isNumberKey(event)" maxlength="75">
                   </div>                   
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span>Tanggal Perubahan Akta Pendirian Perusahaan</div>
                   <input name="tglperubahan" type="date" class="form-control" placeholder="Tanggal Perubahan Akta Pendirian Perusahaan">
                   </div>                   
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></div>
                   <input name="modal" type="text" class="form-control" placeholder="Total Modal Dan Kekayaan Perusahaan" onkeypress="return isNumberKey(event)" maxlength="60">
                   </div>                   
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></div>
                   <input name="saham" type="text" class="form-control" placeholder="Total Nilai Saham" onkeypress="return isNumberKey(event)" maxlength="60">
                   </div>                   
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></div>
                   <input name="sahamasing" type="text" class="form-control" placeholder="Saham Asing ( % )" onkeypress="return isNumberKey(event)" maxlength="25">
                   </div>                   
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></div>
                   <input name="sahamnasional" type="text" class="form-control" placeholder="Saham Nasional ( % )" onkeypress="return isNumberKey(event)" maxlength="25">
                   </div>                   
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-shopping-cart"></span></div>
                   <input name="kelembagaan" type="text" class="form-control" placeholder="Kelembagaan">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-shopping-cart"></span></div>
                   <input name="kbli" type="text" class="form-control" placeholder="KBLI">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-object-align-bottom"></span></div>
                   <input name="barjas" type="text" class="form-control" placeholder="Barang / Jasa Dagang Perusahaan">
                   </div>                     
              </div>
              <div class="form-group col-sm-12">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span>Unggah Persyaratan</div>
                    <input name="syarat" type="file" class="form-control" >
                   </div>
              </div>
             <div class="form-group">
               <div class="input-group">
                   <label>Proses Perijinan</label>
                    <select name="proses" class="form-control">
                       <option value="1" <?php echo $row['proses'] == 'Dalam Proses' ? 'selected' : ''; ?>>Dalam Proses</option>
                       <option value="2" <?php echo $row['proses'] == 'Gagal' ? 'selected' : ''; ?>>Gagal</option>
                       <option value="3" <?php echo $row['proses'] == 'Selesai' ? 'selected' : ''; ?>>Selesai</option>
                    </select>
                </div>
             </div>
                
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="paraf" type="text" class="form-control" placeholder="Keterangan">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span>Penerbitan Ijin</div>
                   <input name="terbit" type="date" class="form-control" >
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span>Masa Berlaku</div>
                   <input name="masber" type="date" class="form-control" >
                   </div>                  
              </div>                   
         <br>           
            <div class="form-footer">
                 <button  type="submit" name="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-save"></span>Simpan
                 </button>
            </div>


            </form>
            </div>
 </div>