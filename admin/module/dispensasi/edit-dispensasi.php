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
      }if(document.formDISPENSASI.terbit.value == "" || document.formDISPENSASI.terbit.value == null){
        alert("Isi Alamat Mempelai Pria Terlebih dahulu");
        document.formDISPENSASI.terbit.focus();
        return false;
      }
        return true;
  }else{
      return false;
    }
}
    </script>
<div class="container-fluid kotak5">
  <h3 class="text-center">Form Update Dispensasi Nikah</h3>
  <br>
        <?php
           $registrasi =base64_decode( $_GET['registrasi']);
          foreach ($db->tampil_dispensasi($registrasi) as $row){
        ?>
    <form method="post" enctype="multipart/form-data" name="formDISPENSASI" action="../application/controller/controller_admin.php?aksi=update_dispensasi" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
    <br>
        <div class="form-body">
          <input name="id_dispensasi" type="hidden" class="form-control" value="<?php echo $row['id_dispensasi'];?>">
             
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><b>No KTP / NIK Pemohon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                   <input readonly name="noktp" type="text" class="form-control" placeholder="No KTP Anda" id="restrict" placeholder="No KTP" maxlength="16" onkeypress="return isNumberKey(event)" value="<?php echo $row['noktp'];?>">
                   </div>
              </div>       
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>No Registrasi</b></div>
                   <input name="registrasi" type="text" class="form-control" value="<?php echo $registrasi; ?>" readonly>
                   </div>
              </div><!-- 
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Nama Lengkap Pemohon &nbsp;&nbsp;</b></div>
                   <input readonly name="namapemohon" type="text" class="form-control"  placeholder="Nama Lengkap Pemohon" value="<?php echo $row['namapemohon'];?>">
                   </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Alamat Lengkap Pemohon&nbsp; </b></div>
                   <input readonly name="alamatpemohon" type="text" class="form-control"  placeholder="Alamat Lengkap Pemohon" value="<?php echo $row['alamatpemohon'];?>">
                   </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Nohp Lengkap Pemohon &nbsp;&nbsp;</b></div>
                   <input name="nohp" readonly type="text" class="form-control"  placeholder="No HP / Telepon Pemohon" maxlength="12" onkeypress="return isNumberKey(event)" value="<?php echo $row['nohp'];?>" >
                   </div>
              </div> -->
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Dispensasi Dari Desa</b></div>
                   <input name="kades" readonly type="text" class="form-control" value="<?php echo $row['kades'];?>">
                   </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Tanggal Dispensasi dari Desa</b></div>
                   <input name="tgldes" readonly type="date" class="form-control" readonly value="<?php echo $row['tgldes'];?>" >
                   </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><b>No Dispensasi Dari Desa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></div>
                   <input name="nodes" readonly type="text" class="form-control" placeholder="Nomor Dispensasi Dari Desa " value="<?php echo $row['nodes'];?>">
                   </div>
              </div>
              <br>
             <label>Calon Pengantin Wanita :</label>           
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                   <input readonly name="namawanita" type="text" class="form-control" placeholder="Nama Mempelai Wanita" value="<?php echo $row['namawanita'];?>" >
                   </div>                   
              </div>
                                    
                   <div class="form-group sub">
                        <div class="input-group">
                        <div class="input-group-addon"><b>Tempat Lahir  &nbsp;</b></div>
                        <input readonly name="tempatwanita" type="text" class="form-control" placeholder="Tempat Lahir" value="<?php echo $row['tempatwanita'];?>" >
                        </div>                   
                   </div>
                            
                   <div class="form-group sub">
                        <div class="input-group">
                        <div class="input-group-addon"><label>Tanggal Lahir</label></div>
                        <input readonly name="tanggalwanita" type="date" class="form-control lebarinputan" placeholder="Tanggal Lahir" value="<?php echo $row['tanggalwanita'];?>">
                        </div>              
                   </div>
              
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Usia  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></div>
                   <input readonly name="usiawanita" type="text" class="form-control" placeholder="Usia Mempelai Wanita" value="<?php echo $row['usiawanita'];?>">
                   </div>                     
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Pekerjaan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></div>
                   <input readonly name="pekerjaanwanita" type="text" class="form-control" placeholder="Pekerjaan" value="<?php echo $row['pekerjaanwanita'];?>">
                   </div>                    
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></div>
                   <input readonly name="statuswanita" type="text" class="form-control" value="<?php echo $row['statuswanita'];?>">
                   </div>                    
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Alamat  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></div>
                   <input readonly name="alamatwanita" type="text" class="form-control" placeholder="Alamat"  value="<?php echo $row['alamatwanita'];?>">
                   </div>                  
              </div>
              <br>
              <label>Calon Pengantin Pria :</label>           
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                   <input readonly name="namapria" type="text" class="form-control" placeholder="Nama Mempelai Pria" value="<?php echo $row['namapria'];?>">
                   </div>                   
              </div>
                                    
                   <div class="form-group sub">
                        <div class="input-group">
                        <div class="input-group-addon"><b>Tempat Lahir &nbsp;</b></div>
                        <input readonly name="tempatpria" type="text" class="form-control" placeholder="Tempat Lahir" value="<?php echo $row['tempatpria'];?>">
                        </div>                   
                   </div>
                            
                   <div class="form-group sub">
                        <div class="input-group">
                        <div class="input-group-addon"><label>Tanggal Lahir </label></div>
                        <input readonly name="tanggalpria" type="date" class="form-control lebarinputan" placeholder="Tanggal Lahir" value="<?php echo $row['tanggalpria'];?>">
                        </div>              
                   </div>
              
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><b> Usia &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                   <input readonly name="usiapria" type="text" class="form-control" placeholder="Usia Mempelai Pria" value="<?php echo $row['usiapria'];?>">
                   </div>                     
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Pekerjaan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></div>
                   <input readonly name="pekerjaanpria" type="text" class="form-control" placeholder="Pekerjaan" value="<?php echo $row['pekerjaanpria'];?>">
                   </div>                    
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></div>
                   <input readonly name="statuspria" type="text" class="form-control" value="<?php echo $row['statuspria'];?>">
                   </div>                    
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                   <input readonly name="alamatpria" type="text" class="form-control" placeholder="Alamat" value="<?php echo $row['alamatpria'];?>">
                   </div>                  
              </div>
              <br>
              <label>Akad Nikah Pada : </label>
              <div class="form-group sub">
                        <div class="input-group">
                        <div class="input-group-addon"><label>Tanggal Akad &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></div>
                        <input readonly name="tanggalakad" type="date" class="form-control lebarinputan" placeholder="Tanggal Lahir" value="<?php echo $row['tanggalakad'];?>">
                        </div>              
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Tempat Akad &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                   <input readonly name="tempatakad" type="text" class="form-control" placeholder="Tempat Akad Nikah" value="<?php echo $row['tempatakad'];?>">
                   </div>                  
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Alasan Dispensasi &nbsp;</b></div>
                   <input readonly name="alasan" type="text" class="form-control" placeholder="Alasan " value="<?php echo $row['alasan'];?>">
                   </div>                  
              </div>
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
                   <div class="input-group-addon"><b>Keterangan Proses &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></div>
                   <input name="paraf" type="text" class="form-control" placeholder="Keterangan" value="<?php echo $row['paraf'];?>">
                   </div>                  
              </div>   
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><b>No Dispensasi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></div>
                   <input readonly name="no_dispensasi" type="text" class="form-control" placeholder="Keterangan" value="<?php echo $row['no_dispensasi'];?>">
                   </div>                  
              </div>                
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Tanggal Penerbitan Izin &nbsp;&nbsp; </b></div>
                   <input name="terbit" type="date" class="form-control"  value="<?php echo $row['terbit'];?>">
                   </div>                  
              </div>   
         <?php
       }
       ?>
            <br>
            <div class="form-footer">
                 <button  type="submit"  name="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-save"></span>Simpan
                 </button>
                 <a  href="media.php?module=dispensasi&id=1" class="btn btn-warning">
                 <span class="glyphicon glyphicon-log-out"></span>Kembali
                 </a>
            </div>
              <br>
              <br>
            </form>
            </div>
 </div>
