
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
      if(document.formIUMK.noktp.value == "" || document.formIUMK.noktp.value == null){
        alert("Isi No KTP / NIK  Terlebih dahulu");
        document.formIUMK.noktp.focus();
        return false;
      }if(document.formIUMK.namapemohon.value == "" || document.formIUMK.namapemohon.value == null){
        alert("Isi Nama Anda Terlebih dahulu");
        document.formIUMK.namapemohon.focus();
        return false;
      }if(document.formIUMK.alamatpemohon.value == "" || document.formIUMK.alamatpemohon.value == null){
        alert("Isi Alamat Terlebih dahulu");
        document.formIUMK.alamatpemohon.focus();
        return false;
      }if(document.formIUMK.nohp.value == "" || document.formIUMK.nohp.value == null){
        alert("Isi No HP /Telepon Anda Terlebih dahulu");
        document.formIUMK.nohp.focus();
        return false;
      }if(document.formIUMK.namausaha.value == "" || document.formIUMK.namausaha.value == null){
        alert("Isi Nama Usaha Anda Terlebih dahulu");
        document.formIUMK.namausaha.focus();
        return false;
      }if(document.formIUMK.jenisusaha.value == "" || document.formIUMK.jenisusaha.value == null){
        alert("Isi Jenis Usaha Terlebih dahulu");
        document.formIUMK.jenisusaha.focus();
        return false;
      }if(document.formIUMK.bentukusaha.value == "" || document.formIUMK.bentukusaha.value == null){
        alert("Isi Bentuk Usaha Terlebih dahulu");
        document.formIUMK.bentukusaha.focus();
        return false;
      }if(document.formIUMK.saranausaha.value == "" || document.formIUMK.saranausaha.value == null){
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
      }if(document.formIUMK.status.value == "" || document.formIUMK.status.value == null){
        alert("Isi Kegunaan Bangunan Terlebih dahulu");
        document.formIUMK.status.focus();
        return false;
      }
        return true;
  }else{
      return false;
    }
}
</script>
<div class="container-fluid kotak5">
  <?php
           $registrasi =base64_decode( $_GET['registrasi']);
          foreach ($db->tampil_iumk($registrasi) as $row){
        ?>
  <h3 class="text-center">Form Update Izin Usaha Mikro dan Kecil</h3>
  <br>
       <form method="post"  enctype="multipart/form-data" name="formIUMK" action="../application/controller/controller_admin.php?aksi=update_iumk" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)" >
        <div class="form-body">
             <input name="id_iumk" type="hidden" class="form-control" value="<?php echo $row['id_iumk'];?>">
              
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>No KTP</b></div>
                   <input readonly name="noktp" type="text" class="form-control" id="restrict" maxlength="16" placeholder="No KTP" onkeypress="return isNumberKey(event)" value="<?php echo $row['noktp'];?>">
                   </div>
              </div>         
              <div class="form-group">
                   <div class="input-group">
                    <div class="input-group-addon "><span class=" glyphicon"></span><b>No Registrasi</b></div>
                   <input name="registrasi" type="text" class="form-control" value="<?php echo $registrasi; ?>" readonly>
                    </div>
              </div>  <!-- 
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Nama Lengkap</b></div>
                   <input readonly name="namapemohon" type="text" class="form-control" placeholder="Nama Lengkap Anda" value="<?php echo $row['namapemohon'];?>">
                   </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Alamat Lengkap</b></div>
                   <input readonly name="alamatpemohon" type="text" class="form-control" placeholder="Alamat Lengkap Anda" value="<?php echo $row['alamatpemohon'];?>">
                   </div>                    
              </div>
              <div class="form-group">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon"></span><b>No Telp / Hp</b></div>
                        <input readonly name="nohp" type="text" class="form-control" placeholder="Nomer Telpon Anda" onkeypress="return isNumberKey(event)" maxlength="12" value="<?php echo $row['nohp'];?>">
                        </div>                   
                   </div> -->
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Nama Usaha</b></div>
                   <input readonly name="namausaha" type="text" class="form-control" placeholder="Nama Usaha Anda" value="<?php echo $row['namausaha'];?>">
                   </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon"></span><b>Jenis Usaha</b></div>
                        <input readonly name="jenisusaha" type="text" class="form-control" placeholder="Jenis Usaha"value="<?php echo $row['jenisusaha'];?>">
                        </div>
              </div>
              <div class="form-group">
                 <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon"></span><b>Bentuk Usaha</b></div>
                        <input readonly name="bentukusaha" type="text" class="form-control" value="<?php echo $row['bentukusaha'];?>">
                        </div>
              </div>
              <div class="form-group">
                 <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon"></span><b>Sarana Usaha</b></div>
                        <input readonly name="saranausaha" type="text" class="form-control"value="<?php echo $row['saranausaha'];?>">
                        </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Alamat Usaha</b></div>
                   <input  readonly name="alamatusaha" type="text" class="form-control" placeholder="Alamat Usaha" value="<?php echo $row['alamatusaha'];?>">
                   </div>                    
              </div>
              <div class="row">
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon "></span><b>No Telp / Hp Usaha</b></div>
                        <input readonly name="notelp" type="text" class="form-control" onkeypress="return isNumberKey(event)" placeholder="Nomer Telpon" maxlength="12" value="<?php echo $row['notelp'];?>">
                        </div>                   
                   </div>
             </div>
             
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Besar Modal</b></div>
                   <input readonly onkeypress="return isNumberKey(event)" name="modal" type="text" class="form-control" placeholder="Modal Usaha" maxlength="15" value="<?php echo $row['modal'];?>">
                   </div>                   
              </div>
              <!-- <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>NPWP</b></div>
                   <input  readonly name="npwp" type="text" class="form-control" onkeypress="return isNumberKey(event)" placeholder="NPWP" maxlength="20" value="<?php echo $row['npwp'];?>">
                   </div>                     
              </div> -->
              <div class="input-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><label>Proses Perizinan</label></div>
                    <select name="proses" class="form-control">
                       <option value="1" <?php echo $row['proses'] == 'Dalam Proses' ? 'selected' : ''; ?>>Dalam Proses</option>
                       <option value="2" <?php echo $row['proses'] == 'Gagal' ? 'selected' : ''; ?>>Gagal</option>
                       <option value="3" <?php echo $row['proses'] == 'Selesai' ? 'selected' : ''; ?>>Selesai</option>
                    </select>
                   </div> 
              </div>
              <br>

              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Keterangan</b></div>
                   <input name="paraf" type="text" class="form-control" placeholder="Keterangan" value="<?php echo $row['paraf'];?>">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Tanggal Penerbitan izin</b></div>
                   <input name="terbit" type="date" class="form-control" placeholder="Tangal Terbit" value="<?php echo $row['terbit'];?>">
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
                 <a  href="media.php?module=izin-usaha-mikro-dan-kecil&id=1" class="btn btn-warning">
                 <span class="glyphicon glyphicon-log-out"></span>Kembali
                 </a>
            </div>
            <br>
            <br>
            <br>
            </form>
            </div>
 </div>