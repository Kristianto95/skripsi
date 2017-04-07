<?php
    include "../application/model/config.php";  
    $stmt = $db->prepare('SELECT * FROM nonijin_domisili WHERE registrasi=:registrasi');
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $cek = $db->query("SELECT no_domisili FROM nonijin_domisili ORDER BY id_domisili DESC LIMIT 1");
    $cek = $cek->fetch(PDO::FETCH_ASSOC);
    $ex = explode('/', $cek['no_domisili']);
    $c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
    $bulan = $c[date('n')];
        if ($bulan =='I'){
        $a = str_pad(1,3,'0', STR_PAD_LEFT);
        }
        else{
        $a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT); 
        }
    $reg = 'Reg_DOM/PATEN/Bojong/KabPekalongan';
    $tahun = date('Y');
    $no_domisili = $a.'/'.$reg.'/'.$bulan.'/'.$tahun;
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
      if(document.formDomisili.noktp.value == "" || document.formDomisili.noktp.value == null){
        alert("Isi No KTP / NIK  Terlebih dahulu");
        document.formDomisili.noktp.focus();
        return false;
      }if(document.formDomisili.nama.value == "" || document.formDomisili.nama.value == null){
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

<div class="container-fluid kotak5">
  <h3 class="text-center">Form Permohonan Domisili</h3>
  <br>
       <form method="post" enctype="multipart/form-data" name="formDomisili"  action="../application/controller/controller_admin.php?aksi=tambah_domisili" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
    <br>
              <div class="form-body">
                   <input name="id_domisili" type="hidden">
              </div>
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                   <input name="noktp" type="text" class="form-control"  id="restrict"  placeholder="No KTP" maxlength="16" onkeypress="return isNumberKey(event)">
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
                   <label>Proses Perizinan</label>
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
                   <input name="no_domisili" type="text" class="form-control" value="<?php echo $no_domisili; ?>" readonly>
                   </div>                  
              </div> 
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="terbit" type="date" class="form-control">
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
