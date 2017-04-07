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
              
  if(confirm("Yakin data akan di simpan")){
    if(uInput.length >= min && uInput.length <= max){
              } else {
                   alert("Pastikan sudah input No KTP sesuai ketentuan (16 digit)");
                   elem.focus();
                   return false;
              }
      if(document.formHO.noktp.value == "" || document.formHO.noktp.value == null){
        alert("Isi No KTP / NIK  Terlebih dahulu");
        document.formHO.noktp.focus();
        return false;
      }if(document.formHO.nama.value == "" || document.formHO.nama.value == null){
        alert("Isi Nama Terlebih dahulu");
        document.formHO.nama.focus();
        return false;
      }if(document.formHO.alamat.value == "" || document.formHO.alamat.value == null){
        alert("Isi Alamat Terlebih dahulu");
        document.formHO.alamat.focus();
        return false;
      }if(document.formHO.pekerjaan.value == "" || document.formHO.pekerjaan.value == null){
        alert("Isi Pekerjaan Terlebih dahulu");
        document.formHO.pekerjaan.focus();
        return false;
      }if(document.formHO.nohp.value == "" || document.formHO.nohp.value == null){
        alert("Isi no Hp / Telepon yang bisa Dihubungi Terlebih dahulu");
        document.formHO.nohp.focus();
        return false;
      }if(document.formHO.namausaha.value == "" || document.formHO.namausaha.value == null){
        alert("Isi Nama Usaha Terlebih dahulu");
        document.formHO.namausaha.focus();
        return false;
      }
      if(document.formHO.jenisusaha.value == "" || document.formHO.jenisusaha.value == null){
        alert("Isi Jenis Usaha Terlebih dahulu");
        document.formHO.jenisusaha.focus();
        return false;
      }if(document.formHO.alamatusaha.value == "" || document.formHO.alamatusaha.value == null){
        alert("Isi Alamat Usaha Terlebih dahulu");
        document.formHO.alamatusaha.focus();
        return false;
      }if(document.formHO.luas.value == "" || document.formHO.luas.value == null){
        alert("Isi Luas Tempat Usaha Terlebih dahulu");
        document.formHO.luas.focus();
        return false;
      }if(document.formHO.modal.value == "" || document.formHO.modal.value == null){
        alert("Isi Besar Modal Usaha Terlebih dahulu");
        document.formHO.modal.focus();
        return false;
      }if(document.formHO.karyawan.value == "" || document.formHO.karyawan.value == null){
        alert("Isi Jumlah Karyawan Terlebih dahulu");
        document.formHO.karyawan.focus();
        return false;
      }
        return true;
  }else{
      return false;
    }
}
    </script>
</head>

<body>
<div class="container-fluid kotak5">
  <h3 class="text-center">Form Update Izin Gangguan</h3>
  <br>
    <?php
           $registrasi =base64_decode( $_GET['registrasi']);
          foreach ($db->tampil_ho($registrasi) as $row){
        ?>
      <form method="post" enctype="multipart/form-data" name="formHO" action="../application/controller/controller_admin.php?aksi=update_ho" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)" >
    <br>
        <div class="form-body">
           <input name="id_ho" type="hidden" class="form-control" value="<?php echo $row['id_ho'];?> ">
           
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span></span><b>Perihal</b></div>
                   <input readonly name="perihal" type="text" class="form-control" placeholder="Perihal" value="<?php echo $row['perihal'];?>">
                   </div> 
              </div>       
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>No.Registrasi</b></div>
                  <input name="registrasi" type="text" class="form-control" value="<?php echo $row['registrasi']; ?>" readonly>
                   </div>
              </div>
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span></span><b>Pendaftaran Ke</b></div>
                   <input readonly name="daftar_ke" type="text" class="form-control" placeholder="Nama Lengkap" value="<?php echo $row['daftar_ke'];?>">
                   </div>
              </div>  <!-- 
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Alamat Lengkap</b></div>
                   <input  readonly name="alamat" type="text" class="form-control" placeholder="Alamat Lengkap" value="<?php echo $row['alamat'];?>">
                   </div>                    
              </div>                     
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span> <b>Pekerjaan</b></div>
                   <input readonly name="pekerjaan" type="text" class="form-control" placeholder="Pekerjaaan" value="<?php echo $row['pekerjaan'];?>">
                   </div>                   
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>No Telp/ Hp</b></div>
                   <input readonly name="nohp" type="text" class="form-control" placeholder="No Telpon / Hp" onkeypress="return isNumberKey(event)" value="<?php echo $row['nohp'];?>">
                   </div>                   
              </div> -->
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b> Nama Usaha</b></div>
                   <input readonly name="namausaha" type="text" class="form-control" placeholder="Nama Usaha" value="<?php echo $row['namausaha'];?>">
                   </div>                  
              </div>                        
                   <div class="form-group">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon"></span><b>Jenis Usaha</b></div>
                        <input readonly name="jenisusaha" type="text" class="form-control" placeholder="Jenis Usaha" value="<?php echo $row['jenisusaha'];?>">
                        </div>                   
                   </div>
              
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Alamat Usaha</b></div>
                   <input readonly name="alamatusaha" type="text" class="form-control" placeholder="Alamat Usaha" value="<?php echo $row['alamatusaha'];?>">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span> <b>Luas Tempat Usaha (
                   M<sup>2</sup>  )</b></div>
                   <input readonly name="luas" type="text" class="form-control" placeholder="Luas Tempat Usaha (dalam meter persegi" onkeypress="return isNumberKey(event)" maxlength="5" value="<?php echo $row['luas'];?>">
                   </div>                
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Besar Modal Usaha</b></div>
                   <input readonly name="modal" type="text" class="form-control" placeholder="Besar Modal Usaha" onkeypress="return isNumberKey(event)" maxlength="20" value="<?php echo $row['modal'];?>">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Jumlah Tenaga Kerja</b></div>
                   <input readonly name="karyawan" type="text" class="form-control" placeholder="Jumlah Tenaga Kerja" onkeypress="return isNumberKey(event)" maxlength="5" value="<?php echo $row['karyawan'];?>">
                   </div>                  
              </div>
              <div class="input-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon "></span><b>Proses Perijinan</b></div>    
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
                   <div class="input-group-addon"><span class="glyphicon "></span><b>Keterangan</b></div>
                   <input name="paraf" type="text" class="form-control" placeholder="Keterangan" value="<?php echo $row['paraf'];?>">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Tanggal Terbit</b></div>
                   <input name="terbit" type="date" class="form-control"  value="<?php echo $row['terbit'];?>">
                   </div>                  
              </div>
                      
         <?php 
          }
          ?>
            
            <div class="form-footer">
                 <button  type="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-save"></span>Simpan dan Cetak!
                 </button>

                 <a  href="media.php?module=izin-gangguan&id=1" class="btn btn-warning">
                 <span class="glyphicon glyphicon-log-out"></span>Kembali
                 </a>
            </div>
            <br>
            <br>
            <br>


            </form>
            </div>
 </div>
</body>
