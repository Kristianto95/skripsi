<?php
    include "../application/model/config.php";
    $stmt = $db->prepare('SELECT * FROM ijin_imb WHERE no_imb=:no_imb');
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<head>
    <script type="text/javascript">
        function isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
            return true;
         }
        
        // function validasi(elem, min, max){
        //   var uInput = elem.value;
              
        //   if(confirm("Yakin data akan di simpan")){
        //     if(uInput.length >= min && uInput.length <= max){
        //               } else {
        //                    alert("Pastikan sudah input No KTP sesuai ketentuan (16 digit)");
        //                    elem.focus();
        //                    return false;
        //               }
        //     if(document.formIMB.noktp.value == "" || document.formIMB.noktp.value == null){
        //       alert("Isi No KTP / NIK  Terlebih dahulu");
        //       document.formIMB.noktp.focus();
        //       return false;
        //     }if(document.formIMB.nama.value == "" || document.formIMB.nama.value == null){
        //       alert("Isi Nama Anda Terlebih dahulu");
        //       document.formIMB.nama.focus();
        //       return false;
        //     }if(document.formIMB.alamat.value == "" || document.formIMB.alamat.value == null){
        //       alert("Isi Alamat Terlebih dahulu");
        //       document.formIMB.alamat.focus();
        //       return false;
        //     }if(document.formIMB.maksud.value == "" || document.formIMB.maksud.value == null){
        //       alert("Isi Kategori Terlebih dahulu");
        //       document.formIMB.maksud.focus();
        //       return false;
        //     }if(document.formIMB.penggunaan.value == "" || document.formIMB.penggunaan.value == null){
        //       alert("Isi Kegunaan Bangunan Terlebih dahulu");
        //       document.formIMB.penggunaan.focus();
        //       return false;
        //     }if(document.formIMB.lokasi.value == "" || document.formIMB.lokasi.value == null){
        //       alert("Isi Alamat Lokasi Bangunan Terlebih dahulu");
        //       document.formIMB.lokasi.focus();
        //       return false;
        //     }
        //     if(document.formIMB.nohp.value == "" || document.formIMB.nohp.value == null){
        //       alert("Isi no telpon / handphone yang bisa dihubungi Terlebih dahulu");
        //       document.formIMB.nohp.focus();
        //       return false;
        //     }if(document.formIMB.luastanah.value == "" || document.formIMB.luastanah.value == null){
        //       alert("Isi Luas Tanah Terlebih dahulu");
        //       document.formIMB.luastanah.focus();
        //       return false;
        //     }if(document.formIMB.luasbangunan.value == "" || document.formIMB.luasbangunan.value == null){
        //       alert("Isi Kegunaan Bangunan Terlebih dahulu");
        //       document.formIMB.luasbangunan.focus();
        //       return false;
        //     }if(document.formIMB.status.value == "" || document.formIMB.status.value == null){
        //       alert("Isi Kegunaan Bangunan Terlebih dahulu");
        //       document.formIMB.status.focus();
        //       return false;
        //     }if(document.formIMB.no_imb.value == "" || document.formIMB.no_imb.value == null){
        //       alert("Isi No IMB Terlebih dahulu");
        //       document.formIMB.no_imb.focus();
        //       return false;
        //     }
        //       return true;
        //     }else{
        //         return false;
        //     }
        // }
    </script>
</head>

<div class="container-fluid kotak5">
  <h3 class="text-center">Form Permohonan Ijin Mendirikan Bangunan</h3>
  <br>
    <form method="post"  name="formIMB" enctype="multipart/form-data" action="../application/controller/controller_admin.php?aksi=tambah_imb" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
    <br>
        <div class="form-body">
            <div class="form-group">
                   <input name="id_imb" type="hidden" class="form-control">
             </div>
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <input name="noktp" type="text" class="form-control" id="restrict" placeholder="No KTP" maxlength="16" onkeypress="return isNumberKey(event)" >
                   </div>
              </div>  <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <input name="daftar_ke" type="text" class="form-control"  placeholder="Daftar_ke" maxlength="3" >
                   </div>
              </div> 
            </div>
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
                   <select class="form-control" name="maksud">
                        <option value="Mendirikan Bangunan Baru">Mendirikan Bangunan Baru</option>
                        <option value="Membaharui Izin Bangunan">Membaharui Izin Bangunan</option>
                        </select>
                   </div>                   
              </div>
                    
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-object-align-bottom"></span></div>
                   <select class="form-control" name="penggunaan">
                        <option value="Rumah Tinggal">Rumah Tinggal</option>
                        <option value="Tempat Usaha">Tempat Usaha</option>
                        </select>
                   </div>                     
              </div>
             
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-home"></span></div>
                   <input name="lokasi" type="text" class="form-control" placeholder="Alamat Lokasi Bangunan">
                   </div>                  
              </div>
              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-duplicate"></span></div>
                        <input name="luastanah" type="text" class="form-control" placeholder="Luas Tanah per meter persegi" onkeypress="return isNumberKey(event)"
                        maxlength="4" >
                        </div>                   
                   </div>
                            
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-duplicate"></span></div>
                        <input name="luasbangunan" type="text" class="form-control" placeholder="Luas Bangunan per meter persegi" onkeypress="return isNumberKey(event)"
                        maxlength="4">
                        </div>              
                   </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="status" type="text" class="form-control" placeholder="Status Tanah">
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
                   <div class="input-group-addon"><span class="glyphicon"></span>Penerbitan Ijin</div>
                   <input name="terbit" type="date" class="form-control" placeholder="Tanggal Terbit">
                   </div>                  
              </div>    
           <div class="form-footer">
                 <button  type="submit" name="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-save"></span>Simpan dan Cetak!
                 </button>
            </div>


            </form>
            </div>
 </div>