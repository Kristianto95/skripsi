
</head>

<div class="container-fluid kotak5">
  <h3 class="text-center">Form Tambah Dasar Hukum</h3>
  <br>
    <form method="post"  name="formDasarHukum"  action="../application/controller/controller_admin.php?aksi=tambah_hukum" >
    <br>
        <div class="form-body">
            <div class="form-group">
                   <input name="id" type="hidden" class="form-control">
             </div>
            </div>
            
             <div class="form-group col-sm-12">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <textarea name="isi" type="text" class="form-control" placeholder="Isikan Dasar Hukum" ></textarea>
                   </div>
              </div>  
             <div class="form-group col-sm-3">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
                   <select class="form-control" name="kategori">
                        <option value="kosong" selected disabled>--Pilih Kategori--</option>
                        <option value="Izin Gangguan">Izin Gangguan</option>
                        <option value="izin Mendirikan Bangunan">Izin Mendirikan Bangunan</option>
                        <option value="Izin Usaha Mikro dan Kecil">Izin Usaha Mikro dan Kecil</option>
                        <option value="Surat Izin Usaha Perdagangan">Surat Izin Usaha Perdagangan</option>
                        <option value="Tanda Daftar Industri">Tanda Daftar Industri</option>
                        <option value="Tanda Daftar Perusahaan">Tanda Daftar Perusahaan</option>
                        <option value="Dispensasi Nikah">Dispensasi Nikah</option>
                        <option value="Domisili">Domisili</option>
                        </select>
                   </div>              
              </div>  
              <br>   
           <div class="form-footer col-sm-12">
                 <button  type="submit" name="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-save"></span>Simpan dan Cetak!
                 </button>
            </div>


            </form>
            </div>
 </div>