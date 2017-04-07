<?php
   require "../application/model/config.php";
    $stmt = $db->prepare('SELECT * FROM nonijin_dispensasi WHERE registrasi=:registrasi');
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $cek = $db->query("SELECT no_dispensasi FROM nonijin_dispensasi ORDER BY id_dispensasi DESC LIMIT 1");
    $cek = $cek->fetch(PDO::FETCH_ASSOC);
    $ex = explode('/', $cek['no_dispensasi']);
    $c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
    $bulan = $c[date('n')];
        if ($bulan =='I'){
        $a = str_pad(1,3,'0', STR_PAD_LEFT);
        }
        else{
        $a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT); 
        }
    $reg = 'Reg_DISP/PATEN/Bojong/KabPekalongan';
    $tahun = date('Y');
    $no_dispensasi = $a.'/'.$reg.'/'.$bulan.'/'.$tahun;
    //echo $no_reg;
    //Hasil : 1/Reg_NIK/Bayi/X/2016 (bulan sekarang)

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
      if(document.formDISPENSASI.noktp.value == "" || document.formDISPENSASI.noktp.value == null){
        alert("Isi No KTP / NIK  Pemohon Terlebih dahulu");
        document.formDISPENSASI.noktp.focus();
        return false;
      }if(document.formDISPENSASI.namapemohon.value == "" || document.formDISPENSASI.namapemohon.value == null){
        alert("Isi Nama Pemohon Terlebih dahulu");
        document.formDISPENSASI.namapemohon.focus();
        return false;
      }if(document.formDISPENSASI.alamatpemohon.value == "" || document.formDISPENSASI.alamatpemohon.value == null){
        alert("Isi Alamat Pemohon Terlebih dahulu");
        document.formDISPENSASI.alamatpemohon.focus();
        return false;
      }if(document.formDISPENSASI.nohp.value == "" || document.formDISPENSASI.nohp.value == null){
        alert("Isi Nomor HP / Telepon Pemohon Terlebih dahulu");
        document.formDISPENSASI.nohp.focus();
        return false;
      }if(document.formDISPENSASI.namawanita.value == "" || document.formDISPENSASI.namawanita.value == null){
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
      }
      if(document.formDISPENSASI.tanggalpria.value == "" || document.formDISPENSASI.tanggalpria.value == null){
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
      }if(document.formDISPENSASI.no_dispensasi.value == "" || document.formDISPENSASI.no_dispensasi.value == null){
        alert("Isi NO  Dispensasi Terlebih dahulu");
        document.formDISPENSASI.no_dispensasi.focus();
        return false;
      }
        return true;
  }else{
      return false;
    }
}
    </script>

<div class="container-fluid kotak5">
  <h3 class="text-center">Form Permohonan Dispensasi Nikah</h3>
  <br>
    <form method="post" enctype="multipart/form-data" name="formDISPENSASI" action="../application/controller/controller_admin.php?aksi=tambah_dispensasi" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
    <br>
        <div class="form-body">
             <div class="form-group">
                   <input name="id_dispensasi" type="hidden" class="form-control">
             </div>
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                   <input name="noktp" type="text" class="form-control" placeholder="No KTP" id="restrict" placeholder="No KTP" maxlength="16" onkeypress="return isNumberKey(event)" >
                   </div>
              </div>
                 <label>Dispensasi Dari Desa:</label>
              <div class="form-group sub">
                 <select class="form-control" name="kades" >
                     <option value="Bukur">Bukur</option>
                     <option value="Kalipancur">Kalipancur</option>
                     <option value="Sumurjomblangbogo">Sumurjomblangbogo</option>
                     <option value="Pantianom">Pantianom</option>
                     <option value="Randumuktiwaren">Randumuktiwaren</option>
                     <option value="Legokclile">Legokclile</option>
                     <option value="Bojongwetan">Bojongwetan</option>
                     <option value="Duwet">Duwet</option>
                     <option value="Wangandowo">Wangandowo</option>
                     <option value="Ketitangkidul">Ketitangkidul</option>
                     <option value="Menjangan">Menjangan</option>
                     <option value="Ketitanglor">Ketitanglor</option>
                     <option value="Rejosari">Rejosari</option>
                     <option value="Bojonglor">Bojonglor</option>
                     <option value="Bojongminggir">Bojongminggir</option>
                     <option value="Wiroditan">Wiroditan</option>
                     <option value="Kemasan">Kemasan</option>
                     <option value="Jajarwayang">Jajarwayang</option>
                     <option value="Babalanlor">Babalanlor</option>
                     <option value="BabalanKidul">BabalanKidul</option>
                     <option value="Karangsari">Karangsari</option>
                     <option value="Sembungjambu">Sembungjambu</option>
                 </select>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span><b>Tanggal Dispensasi dari Desa</b></div>
                   <input name="tgldes" type="date" class="form-control" >
                   </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                   <input name="nodes" type="text" class="form-control" placeholder="Nomor Dispensasi Dari Desa ">
                   </div>
              </div>
             <label>Calon Pengantin Wanita :</label>           
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="namawanita" type="text" class="form-control" placeholder="Nama Mempelai Wanita">
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
                        <input name="tanggalwanita" type="date" class="form-control lebarinputan" placeholder="Tanggal Lahir">
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
                 <label>Status</label>
                 <select class="form-control" name="statuswanita">
                     <option value="Perawan">Perawan</option>
                     <option value="Janda">Janda</option>
                 </select>
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
                        <input name="tanggalpria" type="date" class="form-control lebarinputan" placeholder="Tanggal Lahir">
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
                 <label>Status</label>
                 <select class="form-control" name="statuspria" >
                     <option value="Perjaka">Perjaka</option>
                     <option value="Duda">Duda</option>
                 </select>
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
                        <input name="tanggalakad" type="date" class="form-control lebarinputan" placeholder="Tanggal Lahir">
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
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="no_dispensasi" type="text" class="form-control" value="<?php echo $no_dispensasi; ?>" readonly>
                   </div>                  
              </div>  
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span>Penerbitan Ijin</div>
                   <input name="terbit" type="date" class="form-control">
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
