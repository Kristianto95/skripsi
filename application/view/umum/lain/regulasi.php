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
      if(document.formIMB.noktp.value == "" || document.formIMB.noktp.value == null){
        alert("Isi No KTP / NIK  Terlebih dahulu");
        document.formIMB.noktp.focus();
        return false;
      }if(document.formIMB.nama.value == "" || document.formIMB.nama.value == null){
        alert("Isi Nama Anda Terlebih dahulu");
        document.formIMB.nama.focus();
        return false;
      }if(document.formIMB.alamat.value == "" || document.formIMB.alamat.value == null){
        alert("Isi Alamat Terlebih dahulu");
        document.formIMB.alamat.focus();
        return false;
      }if(document.formIMB.maksud.value == "" || document.formIMB.maksud.value == null){
        alert("Isi Kategori Terlebih dahulu");
        document.formIMB.maksud.focus();
        return false;
      }if(document.formIMB.penggunaan.value == "" || document.formIMB.penggunaan.value == null){
        alert("Isi Kegunaan Bangunan Terlebih dahulu");
        document.formIMB.penggunaan.focus();
        return false;
      }if(document.formIMB.lokasi.value == "" || document.formIMB.lokasi.value == null){
        alert("Isi Alamat Lokasi Bangunan Terlebih dahulu");
        document.formIMB.lokasi.focus();
        return false;
      }
      if(document.formIMB.nohp.value == "" || document.formIMB.nohp.value == null){
        alert("Isi no telpon / handphone yang bisa dihubungi Terlebih dahulu");
        document.formIMB.nohp.focus();
        return false;
      }if(document.formIMB.luastanah.value == "" || document.formIMB.luastanah.value == null){
        alert("Isi Luas Tanah Terlebih dahulu");
        document.formIMB.luastanah.focus();
        return false;
      }if(document.formIMB.luasbangunan.value == "" || document.formIMB.luasbangunan.value == null){
        alert("Isi Kegunaan Bangunan Terlebih dahulu");
        document.formIMB.luasbangunan.focus();
        return false;
      }if(document.formIMB.status.value == "" || document.formIMB.status.value == null){
        alert("Isi Kegunaan Bangunan Terlebih dahulu");
        document.formIMB.status.focus();
        return false;
      }
        return true;
  }else{
      return false;
    }
}
    </script>
<div  class="container-fluid first">
  <h3><b>Regulasi</b></h3>
  <hr class="line-permision">
  <br>
</div>
<div class="container-fluid second " >
  <h3>SOP & SPM</h3>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#sop">STANDAR OPERASIONAL PROSEDUR (SOP)</a>
        </h4>
      </div>
      <div id="sop" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="row">
              <div class="col-sm-10 textengah">Standar operasional prosedur yang sampai saat ini digunakan oleh PATEN BOJONG kabupaten Pekalongan
              </div>
              <div class="col-sm-2" align="right">
                  <a  type="submit" name="cek" class="btn btn-info" id="cek" href="library/download.php?filename=sop.pdf">
                      <span class="glyphicon glyphicon-save">DOWNLOAD</span>
                  </a>
              </div> 
          </div> 
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#spm">STANDAR PELAYANAN MINIMAL (SPM)</a>
        </h4>
      </div>
      <div id="spm" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="row">
              <div class="col-sm-10 textengah">Standar Pelayanan Minimal yang sampai saat ini digunakan oleh PATEN BOJONG kabupaten Pekalongan
              </div>
              <div class="col-sm-2" align="right">
                  <a  type="submit" name="cek" class="btn btn-info" id="cek" href="library/download.php?filename=spm.pdf">
                      <span class="glyphicon glyphicon-save">DOWNLOAD</span>
                  </a>
              </div> 
          </div> 
        </div>
      </div>
    </div>
    <br>
  <h3>Form Tambahan</h3>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#persetujuan">Formulir Persetujuan Tetangga</a>
        </h4>
      </div>
      <div id="persetujuan" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="row">
              <div class="col-sm-10 textengah">Formulir ini digunakan sebagai salah satu persyaratan mengajukan ijin gangguan (HO). Formulir ini diisi sesuai dengan persetujuan warga sekitar tempat dimana anda akan memulai usaha, dengan mengetahui kepala desa.
              </div>
              <div class="col-sm-2" align="right">
                  <a  type="submit" class="btn btn-info" href="library/download.php?filename=surat persetujuan tetangga.pdf">
                      <span class="glyphicon glyphicon-save">DOWNLOAD</span>
                  </a>
              </div> 
          </div> 
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#sengketa">Surat Pernyataan Tidak Dalam Sengketa</a>
        </h4>
      </div>
      <div id="sengketa" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="row">
              <div class="col-sm-10 textengah">Surat ini digunakan sebagai salah persyaratan dalam pengajuan permohonan ijin mendirikan bangunan(IMB), sebagaimana adalah sebagai bukti bahwa tanah atau bangunan tidak dalam sengketa pihak manapun. surat ini juga wajib diketahui oleh kepala desa.
              </div>
              <div class="col-sm-2" align="right">
                  <a  type="submit" name="cek" class="btn btn-info" id="cek" href="library/download.php?filename=Surat-peryataan-tidak-dalam-sengketa.pdf">
                      <span class="glyphicon glyphicon-save">DOWNLOAD</span>
                  </a>
              </div> 
          </div> 
        </div>
      </div>
    </div>  
  </div> 
</div>