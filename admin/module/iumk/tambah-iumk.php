<?php
    include "../application/model/config.php"; 
    $stmt = $db->prepare('SELECT * FROM ijin_iumk WHERE registrasi=:registrasi');
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $cek = $db->query("SELECT no_iumk FROM ijin_iumk ORDER BY id_iumk DESC LIMIT 1");
    $cek = $cek->fetch(PDO::FETCH_ASSOC);
    $ex = explode('/', $cek['no_iumk']);
    $c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
    $bulan = $c[date('n')];
        if ($bulan =='I'){
        $a = str_pad(1,3,'0', STR_PAD_LEFT);
        }
        else{
        $a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT); 
        }
    $reg = 'Reg_IUMK/PATEN/Bojong/KabPekalongan';
    $tahun = date('Y');
    $no_iumk = $a.'/'.$reg.'/'.$bulan.'/'.$tahun;
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
</head>

<div class="container-fluid kotak5">
  <h3 class="text-center">Form Permohonan Izin Usaha Mikro dan Kecil</h3>
  <br>
       <form method="post"  name="formIUMK" enctype="multipart/form-data" action="../application/controller/controller_admin.php?aksi=tambah_iumk" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)" >
            <div class="form-body">
               <input name="id_iumk" type="hidden" class="form-control">
            </div>
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                   <input name="noktp" type="text" class="form-control" id="restrict" maxlength="16" placeholder="No KTP" onkeypress="return isNumberKey(event)">
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
                   <input name="namausaha" type="text" class="form-control" placeholder="Nama Usaha">
                   </div>
              </div>
              <div class="form-group">
                 <label>Jenis Usaha</label>
                 <select class="form-control" name="jenisusaha">
                     <option></option>
                     <option value="Apotek">Apotek</option>
                     <option value="Bengkel Kendaraan / Las / Lainnya">Bengkel Kendaraan / Las / Lainnya</option>
                     <option value="Bimbingan Belajar / Kursus">Bimbingan Belajar / Kursus</option>
                     <option value="Bidang Keagamaan">Bidang Keagamaan</option>
                     <option value="Foto Copy">Foto Copy</option>
                     <option value="Konter HP">Konter HP</option>
                     <option value="Konveksi">Konveksi</option>
                     <option value="Pengelolaan Limbah">Pengelolaan Limbah</option>
                     <option value="Percetakan">Percetakan</option>
                     <option value="Persewaan Barang / Jasa / Kendaraan">Persewaan Barang / Jasa / Kendaraan</option>
                     <option value="Rumah Makan">Rumah Makan</option>
                     <option value="Studio Musik">Studio Musik</option>
                     <option value="Studio Photo">Studio Photo</option>
                     <option value="Tempat Hiburan">Tempat Hiburan</option>
                     <option value="Tempat Olahraga">Tempat Olahraga</option>
                     <option value="Toko Aksesoris">Toko Aksesoris</option>
                     <option value="Toko Bangunan">Toko Bangunan</option>
                     <option value="Toko Buku">Toko Buku</option>
                     <option value="Toko Elektronik">Toko Elektronik</option>
                     <option value="Toko Kelontong">Toko Kelontong</option>
                     <option value="Toko Pakaian">Toko Pakaian</option>
                     <option value="Toko Sembako">Toko Sembako</option>

                 </select>
              </div>
              <div class="form-group">
                 <label>Bentuk Usaha</label>
                 <select name="bentukusaha" class="form-control">
                     <option></option>
                     <option value="Perorangan">Perorangan</option>
                     <option value="Kelompok">Kelompok</option>
                 </select>
              </div>
              <div class="form-group">
                 <label>Sarana Usaha</label>
                 <select name="saranausaha" class="form-control">
                     <option></option>
                     <option value="Sewa">Sewa</option>
                     <option value="Milik Sendiri">Milik Sendiri</option>
                 </select>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input name="alamatusaha" type="text" class="form-control" placeholder="Alamat Usaha">
                   </div>                    
              </div>
              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></div>
                        <input name="notelp" type="text" class="form-control" onkeypress="return isNumberKey(event)" placeholder="Nomer Telepon" maxlength="12">
                        </div>                   
                   </div>
             </div>
             
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></div>
                   <input  onkeypress="return isNumberKey(event)" name="modal" type="text" class="form-control" placeholder="Modal Usaha" maxlength="15">
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
                   <input name="no_iumk" type="text" class="form-control" value="<?php echo $no_iumk ?>" readonly>
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span>Penerbitan Ijin</div>
                   <input name="terbit" type="date" class="form-control" placeholder="Penerbitan Izin">
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