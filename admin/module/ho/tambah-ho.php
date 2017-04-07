<?php
    include "../application/model/config.php";
    $stmt = $db->prepare('SELECT * FROM ijin_ho WHERE registrasi=:registrasi');
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $cek = $db->query("SELECT no_ho FROM ijin_ho ORDER BY id_ho DESC LIMIT 1");
    $cek = $cek->fetch(PDO::FETCH_ASSOC);
    $ex = explode('/', $cek['no_ho']);
    $c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
    $bulan = $c[date('n')];
        if ($bulan =='I'){
        $a = str_pad(1,3,'0', STR_PAD_LEFT);
        }
        else{
        $a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT); 
        }
    $reg = 'Reg_HO/PATEN/Bojong/KabPekalongan';
    $tahun = date('Y');
    $no_ho = $a.'/'.$reg.'/'.$bulan.'/'.$tahun;
  
?>
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
              
//   if(confirm("Yakin data akan di simpan")){
//     if(uInput.length >= min && uInput.length <= max){
//               } else {
//                    alert("Pastikan sudah input No KTP sesuai ketentuan (16 digit)");
//                    elem.focus();
//                    return false;
//               }
//       if(document.formHO.noktp.value == "" || document.formHO.noktp.value == null){
//         alert("Isi No KTP / NIK  Terlebih dahulu");
//         document.formHO.noktp.focus();
//         return false;
//       }if(document.formHO.nama.value == "" || document.formHO.nama.value == null){
//         alert("Isi Nama Anda Terlebih dahulu");
//         document.formHO.nama.focus();
//         return false;
//       }if(document.formHO.alamat.value == "" || document.formHO.alamat.value == null){
//         alert("Isi Alamat Anda Terlebih dahulu");
//         document.formHO.alamat.focus();
//         return false;
//       }if(document.formHO.pekerjaan.value == "" || document.formHO.pekerjaan.value == null){
//         alert("Isi Pekerjaan Anda Terlebih dahulu");
//         document.formHO.pekerjaan.focus();
//         return false;
//       }if(document.formHO.nohp.value == "" || document.formHO.nohp.value == null){
//         alert("Isi no Hp / Telepon yang bisa Dihubungi Terlebih dahulu");
//         document.formHO.nohp.focus();
//         return false;
//       }if(document.formHO.namausaha.value == "" || document.formHO.namausaha.value == null){
//         alert("Isi Nama Usaha Anda Terlebih dahulu");
//         document.formHO.namausaha.focus();
//         return false;
//       }
//       if(document.formHO.jenisusaha.value == "" || document.formHO.jenisusaha.value == null){
//         alert("Isi Jenis Usaha Terlebih dahulu");
//         document.formHO.jenisusaha.focus();
//         return false;
//       }if(document.formHO.alamatusaha.value == "" || document.formHO.alamatusaha.value == null){
//         alert("Isi Alamat Usaha Anda Terlebih dahulu");
//         document.formHO.alamatusaha.focus();
//         return false;
//       }if(document.formHO.luas.value == "" || document.formHO.luas.value == null){
//         alert("Isi Luas Tempat Usaha Terlebih dahulu");
//         document.formHO.luas.focus();
//         return false;
//       }if(document.formHO.modal.value == "" || document.formHO.modal.value == null){
//         alert("Isi Besar Modal Usaha Anda Terlebih dahulu");
//         document.formHO.modal.focus();
//         return false;
//       }if(document.formHO.karyawan.value == "" || document.formHO.karyawan.value == null){
//         alert("Isi Jumlah Karyawan Anda Terlebih dahulu");
//         document.formHO.karyawan.focus();
//         return false;
//       }if(document.formHO.no_ho.value == "" || document.formHO.no_ho.value == null){
//         alert("Isi No Ijin Gangguan Terlebih dahulu");
//         document.formHO.no_ho.focus();
//         return false;
//       }
//         return true;
//   }else{
//       return false;
//     }
// }
    </script>
</head>

<div class="container-fluid">
  <h3 class="text-center">Form Permohonan Izin Gangguan</h3>
  <br>
      <form method="post" name="formHO" enctype="multipart/form-data" action="../application/controller/controller_admin.php?aksi=tambah_ho" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)" >
    <br>
        <div class="form-body">
            <div class="form-group">
                   <div class="input-group">
                   <input name="id_ho" type="hidden" class="form-control">
                   </div>
              </div>
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                   <input name="noktp" type="text" class="form-control" id="restrict" placeholder="No KTP"  maxlength="16" onkeypress="return isNumberKey(event)">
                   </div>
              </div>
              <div class="form-group">
                  <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><b>Perihal</b></div>
                   <select class="form-control" name="perihal">
                      <option selected disabled>--Perihal yang diajukan--</option>
                      <option value="Izin Gangguan Mendirikian Usaha">Izin Gangguan Mendirikian Usaha</option>
                      <option value="Pembaharuan Izin Gangguan Usaha">Pembaharuan izin Gangguan Usaha</option>
                   </select>
                  </div> 
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
                   <div class="input-group-addon"><span class="glyphicon glyphicon-home"></span></div>
                   <input name="namausaha" type="text" class="form-control" placeholder="Nama Usaha">
                   </div>                  
              </div>                        
              <div class="form-group">
               <div class="input-group"><div class="input-group-addon"><b>Jenis Usaha</b></div>
                 <select class="form-control" name="jenisusaha">
                     <option selected disabled>--Pilih Jenis Usaha--</option>
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
              </div>
              
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="alamatusaha" type="text" class="form-control" placeholder="Alamat Usaha">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="luas" type="text" class="form-control" placeholder="Luas Tempat Usaha" onkeypress="return isNumberKey(event)" maxlength="5">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="modal" type="text" class="form-control" placeholder="Besar Modal Usaha" onkeypress="return isNumberKey(event)" maxlength="20">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="karyawan" type="text" class="form-control" placeholder="Jumlah Tenaga Kerja" onkeypress="return isNumberKey(event)" maxlength="5">
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
              </div><div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphico"></span>No_Ho</div>
                   <input name="no_ho" type="text" class="form-control" value="<?php echo $no_ho ?>" readonly placeholder="No Ijin Gangguan">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="terbit" type="date" class="form-control" placeholder="Keterangan" value="<?php echo $row['terbit'];?>">
                   </div>                  
              </div>
        <div class="form-footer">
                 <button  type="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-save"></span>Simpan dan Cetak!
                 </button>
            </div>
            <br>
            <br>
            <br>


            </form>
            </div>
 </div>