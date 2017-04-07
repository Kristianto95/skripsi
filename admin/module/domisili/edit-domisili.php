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
</head>

<div class="container-fluid kotak5">
  <h3 class="text-center">Form Update Domisili</h3>
  <br>
      <?php
           $registrasi =base64_decode( $_GET['registrasi']);
          foreach ($db->tampil_domisili($registrasi) as $row){
        ?>
       <form method="post" enctype="multipart/form-data" name="formDomisili"  action="../application/controller/controller_admin.php?aksi=update_domisili" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
    <br>
        <div class="form-body">
              <input name="id_domisili" type="hidden" value="<?php echo $row['id_domisili'];?>">
               <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><b>No KTP / NIK Pemohon &nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                   <input  readonly name="noktp" type="text" class="form-control"  id="restrict"  placeholder="No KTP Anda" maxlength="16" onkeypress="return isNumberKey(event)" value="<?php echo $row['noktp'];?>">
                   </div>
              </div>
               <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>No Registrasi</b></div>
                      <input name="registrasi" type="text" class="form-control" value="<?php echo $row['registrasi'];?>" readonly>
                   </div>
              </div><!-- 
             
              <div class="form-group ">
                        <div class="input-group">
                        <div class="input-group-addon"><b>Nama Pemohon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                        <input name="nama" readonly type="text" class="form-control" placeholder="Nama Lengkap Anda" value="<?php echo $row['nama'];?>">
                        </div>                   
              </div>   
              <div class="form-group ">
                        <div class="input-group">
                        <div class="input-group-addon"><b>Tempat Lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                        <input name="tempat" readonly type="text" class="form-control" placeholder="Tempat Lahir" value="<?php echo $row['tempat'];?>">
                        </div>                   
              </div>
              <div class="form-group">
                        <div class="input-group">
                        <div class="input-group-addon"><b>Tanggal Lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                        <input name="tanggal" readonly type="date" class="form-control lebarinputan" placeholder="Tanggal Lahir" value="<?php echo $row['tanggal']?>" >
                        </div>              
                   </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Jenis Kelamin</b></div>
                   <input readonly name="jekel" type="text" class="form-control" placeholder="Jenis Kelamin" value="<?php echo $row['jekel'];?>">
                   </div>                    
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                   <input  readonly name="alamat" type="text" class="form-control" placeholder="Alamat Anda" value="<?php echo $row['alamat'];?>">
                   </div>                     
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><b>RT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                   <input readonly name="rt" type="text" class="form-control" placeholder="RT (contoh : 01) " onkeypress="return isNumberKey(event)" value="<?php echo $row['rt'];?>">
                   </div>                                        
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><b>RW &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                   <input readonly name="rw" type="text" class="form-control" placeholder="RW (contoh : 01)" onkeypress="return isNumberKey(event)" value="<?php echo $row['rw'];?>">
                   </div>                                        
              </div>

              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Desa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                   <input readonly name="desa" type="text" class="form-control" placeholder="Desa" value="<?php echo $row['desa'];?>">
                   </div>                                        
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Kecamatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                   <input readonly name="kecamatan" type="text" class="form-control" placeholder="Kecamatan" value="<?php echo $row['kecamatan'];?>">
                   </div>                                        
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon">Kabupaten</span></div>
                   <input  readonly name="kabupaten" type="text" class="form-control" value="<?php echo $row['kabupaten'];?>" readonly>
                   </div>                                        
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon">Provinsi</span></div>
                   <input  readonly name="provinsi" type="text" class="form-control" value="<?php echo $row['provinsi'];?>" readonly>
                   </div>                                        
              </div>
               <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Agama</b></div>
                   <input readonly name="agama" type="text" class="form-control" placeholder="Agama" value="<?php echo $row['agama'];?>">
                   </div>                    
              </div>
               <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Pekerjaan</b></div>
                   <input readonly name="pekerjaan" type="text" class="form-control" placeholder="Pekerjaan Anda" value="<?php echo $row['pekerjaan'];?>">
                   </div>                    
              </div>
              <div class="form-group">
                 <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Status Perkawinan</b></div>
                   <input readonly name="status" type="text" class="form-control" placeholder="Status Perkawinan" value="<?php echo $row['status'];?>">
                   </div>  
               </div>
               <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Kewarganegaraan</b></div>
                   <input readonly name="kewarganegaraan" type="text" class="form-control" placeholder="Kewarganegaraan Anda" value="<?php echo $row['kewarganegaraan'];?>">
                   </div>                    
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span>No Telp / Hp</div>
                   <input readonly name="nohp" type="text" class="form-control" placeholder="Masukkan No Hp / Telepon Anda" maxlength="12" onkeypress="return isNumberKey(event)"  value="<?php echo $row['nohp'];?>">
                   </div>                    
              </div> -->
     <br>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><label>Proses Perizinan</label></div>
                   <select name="proses" class="form-control">
                       <option value="1" <?php echo $row['proses'] == 'Dalam Proses' ? 'selected' : ''; ?>>Dalam Proses</option>
                       <option value="2" <?php echo $row['proses'] == 'Gagal' ? 'selected' : ''; ?>>Gagal</option>
                       <option value="3" <?php echo $row['proses'] == 'Selesai' ? 'selected' : ''; ?>>Selesai</option>
                    </select>
                   </div>     
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Keterangan</b></div>
                   <input name="paraf" type="text" class="form-control" placeholder="Keterangan" value="<?php echo $row['paraf'];?>">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>No Domisili</b></div>
                   <input name="no_domisili" type="text" readonly class="form-control" placeholder="No Domisili" value="<?php echo $row['no_domisili'];?>">
                   </div>                    
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Tanggal Penerbitan Izin</b></div>
                   <input name="terbit" type="date" class="form-control" value="<?php echo $row['terbit'];?>">
                   </div>                    
              </div>
              <?php
            }
              ?>
              <br>
            <div class="form-footer">
                 <button  type="submit" name="cek" class="btn btn-info" id="cek">
                 <span class="glyphicon glyphicon-save"></span>Simpan
                 </button>
                 <a  href="media.php?module=domisili&id=1" class="btn btn-warning">
                 <span class="glyphicon glyphicon-log-out"></span>Kembali
                 </a>
            </div>
            <br>
            <br>
            </form>
            </div>
