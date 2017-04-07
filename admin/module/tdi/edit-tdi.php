<div class="container-fluid">
  <h3 class="text-center">Form Update Tanda Daftar Industri</h3>
  <br>
  <?php
           $registrasi =base64_decode( $_GET['registrasi']);
          foreach ($db->tampil_tdi($registrasi) as $row){
        ?>
    <form method="post" enctype="multipart/form-data" name="formTDI" action="../application/controller/controller_admin.php?aksi=update_tdi" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
        <div class="form-body">
                            <input name="id_tdi" value="<?php echo $row['id_tdi']; ?>" type="hidden" >
                
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>No KTP</b></div>
                   <input readonly name="noktp" type="text" class="form-control" placeholder="No KTP"  id="restrict" maxlength="16" onkeypress="return isNumberKey(event)" value="<?php echo $row['noktp'];?>">
                   </div>
              </div>  
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>No Registrasi</b></div>
                     <input name="registrasi" type="text" class="form-control" value="<?php echo $registrasi; ?>" readonly>
                   </div>
              </div>        
            <!-- <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Nama Pemilik</b></div>
                   <input readonly name="nama" type="text" class="form-control" placeholder="Nama Lengkap Pemilik" value="<?php echo $row['nama'];?>">
                   </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Alamat Pemilik</b></div>
                   <texatarea readonly name="alamat" type="text" class="form-control" placeholder="Alamat Pemilik" ><?php echo $row['alamat'];?></textarea>
                   </div>                    
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>No Telp / Hp Pemilik</b></div>
                   <input readonly name="nohp" type="text" class="form-control" placeholder="No HP / Telepon Pemilik" onkeypress="return isNumberKey(event)" value="<?php echo $row['nohp'];?>">
                   </div>                    
              </div> -->
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Nama Perusahaan</b></div>
                   <input name="namaperusahaan" type="text" class="form-control" readonly placeholder="Nama Perusahaan" value="<?php echo $row['namaperusahaan'];?>">
                   </div>
              </div>
               <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Alamat Perusahaan</b></div>
                   <input readonly name="alamatperusahaan" type="text" class="form-control" placeholder="Alamat Perusahaan" value="<?php echo $row['alamatperusahaan'];?>">
                   </div>                    
              </div>
              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon"></span><b>No Telp Perusahaan</b></div>
                        <input readonly name="notelp" type="text" class="form-control" placeholder="Nomer Telpon Perusahaan" onkeypress="return isNumberKey(event)" maxlength="12" value="<?php echo $row['notelp'];?>">
                        </div>                   
                   </div>
                            
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon "></span><b>No Faximile Perusahaan</b></div>
                        <input readonly name="nofax" type="text" class="form-control" placeholder="Nomor faximile" onkeypress="return isNumberKey(event)" value="<?php echo $row['nofax'];?>">
                        </div>              
                   </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>NPWP Pemilik</b></div>
                   <input readonly name="npwp" type="text" class="form-control" placeholder="NPWP Pemilik" onkeypress="return isNumberKey(event)" maxlength="20" value="<?php echo $row['npwp'];?>">
                   </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>NIPIK Pemilik</b></div>
                   <input readonly name="nipik" type="text" class="form-control" placeholder="NIPIK Pemilik" onkeypress="return isNumberKey(event)" maxlength="20" value="<?php echo $row['nipik'];?>">
                   </div>
              </div>
              <label>Lokasi Pabrik :</label>
              <div class="form-group">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon"></span><b>Alamat Pabrik</b></div>
                        <input readonly name="lokasi" type="text" class="form-control" placeholder="Alamat Pabrik" value="<?php echo $row['lokasi'];?>">
                        </div>                                       
                   </div>
              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon"></span><b>Desa</b></div>
                        <input  readonly name="desa" type="text" class="form-control" placeholder="Desa" value="<?php echo $row['desa'];?>">
                        </div>                   
                   </div>
                            
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon"></span> <b>Kecamatan</b></div>
                        <input readonly name="kecamatan" type="text" class="form-control" placeholder="Kecamatan" value="<?php echo $row['kecamatan'];?>">
                        </div>              
                   </div>
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon"></span><b>Kabupaten / Kota</b></div>
                        <input name="kabupaten" type="text" class="form-control" value="<?php echo $row['kabupaten'];?>" placeholder="Kabupaten" readonly >
                        </div>              
                   </div>
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon "></span><b>Provinsi</b></div>
                        <input name="provinsi" type="text" class="form-control" value="<?php echo $row['provinsi'];?>" readonly >
                        </div>                                       
                   </div>
              </div>  
               <hr />
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><label>Kepemilikan</label></div>
                 <input name="kepemilikan" type="text" class="form-control" value="<?php echo $row['kepemilikan'];?>" readonly >
              </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Luas Bangunan (M<sup>2</sup>)</b></div>
                   <input name="luasbangunan" readonly type="text" class="form-control" placeholder="Luas Bangunan (dalam meter persegi)" onkeypress="return isNumberKey(event)" maxlength="5" value="<?php echo $row['luasbangunan'];?>">
                   </div>                    
              </div>
              
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Luas Tanah (M<sup>2</sup>)</b></div>
                   <input name="luastanah" type="text" class="form-control" readonly placeholder="Luas Tanah (dalam meter persegi)" onkeypress="return isNumberKey(event)" maxlength="4" value="<?php echo $row['luastanah'];?>">
                   </div>                   
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Mesin / Peralatan Utama </b></div>
                   <input name="mesinutama" readonly type="text" class="form-control" placeholder="Mesin / Peralatan Utama" value="<?php echo $row['mesinutama'];?>">
                   </div>                     
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Mesin / Peralatan Pembantu</b></div>
                   <input name="mesinpembantu" readonly type="text" class="form-control" placeholder="Mesin / Peralatan Pembantu" value="<?php echo $row['mesinpembantu'];?>">
                   </div>                     
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Tenaga Penggerak</b></div>
                   <input name="tenaga" type="text" class="form-control" readonly placeholder="Tenaga Penggerak" value="<?php echo $row['tenaga'];?>">
                   </div>                     
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>KBLI</b></div>
                   <input name="kbli" type="text" class="form-control" placeholder="KBLI" readonly value="<?php echo $row['kbli'];?>">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Komoditi</b></div>
                   <input name="komoditi" type="text" class="form-control" readonly placeholder="Komoditi" value="<?php echo $row['komoditi'];?>">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Kapasitas Produksi Per Tahun</b></div>
                   <input name="kapasitas" type="text" class="form-control" readonly placeholder="Kapasitas Produksi Per Tahun" onkeypress="return isNumberKey(event)" maxlength="5" value="<?php echo $row['kapasitas'];?>">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Kebutuhan Bahan Baku</b></div>
                   <input name="kebutuhan" type="text" class="form-control" readonly placeholder="Kebutuhan Bahan Baku" value="<?php echo $row['kebutuhan'];?>">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Jumlah Tenaga Kerja</b></div>
                   <input name="jumlah" type="text" class="form-control" readonly placeholder="Jumlah Tenaga Kerja" onkeypress="return isNumberKey(event)" maxlength="5" value="<?php echo $row['jumlah'];?>">
                   </div>                  
              </div>
                 <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon"></span><b>Jumlah Tenaga Kerja Pria</b></div>
                        <input name="laki" type="text" class="form-control" readonly placeholder="Jumlah Tenaga Kerja Pria" onkeypress="return isNumberKey(event)" maxlength="5" value="<?php echo $row['laki'];?>">
                        </div>                   
                   </div>
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon "></span><b>Jumlah Tenaga Kerja Wanita</b></div>
                        <input name="wanita" type="text" class="form-control" readonly placeholder="Jumlah Tenaga Kerja wanita" onkeypress="return isNumberKey(event)" maxlength="3" value="<?php echo $row['wanita'];?>">
                        </div>                   
                   </div>         
                 </div>
                 <br>  
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Nilai Investasi</b></div>
                   <input name="nilai" type="text" class="form-control" readonly placeholder="Nilai Investasi" onkeypress="return isNumberKey(event)" maxlength="25" value="<?php echo $row['nilai'];?>">
                   </div>                  
              </div>  
              <div class="form-group">
                 <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Merk</b></div>
                   <input name="merk" type="text" class="form-control" readonly  value="<?php echo $row['merk'];?>">
                   </div>  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Nomor Merk / Lisensi</b></div>
                   <input name="nomerk" type="text" class="form-control" readonly placeholder="Nomer Merk / Lisensi" value="<?php echo $row['nomerk'];?>">
                   </div>                  
              </div>     
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
                   <div class="input-group-addon"><span class="glyphicon"></span><label>No TDI</label></div>
                   <input readonly name="no_tdi" type="text" class="form-control" value="<?php echo $row['no_tdi'];?>" readonly/>
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span><b>Tanggal Penerbitan Izin</b></div>
                   <input name="terbit" type="date" class="form-control" value="<?php echo $row['terbit'];?>" />
                   </div>                  
              </div>
              <br>
         <?php
       }
         ?>
            
            <div class="form-footer">
                 <button  type="submit" name="submit" class="btn btn-info" >
                 <span class="glyphicon glyphicon-save" ></span>Simpan
                 </button>
                 <a  href="media.php?module=tanda-daftar-industri&id=1" class="btn btn-warning">
                 <span class="glyphicon glyphicon-log-out"></span>Kembali
                 </a>
            </div>
            <br>
            <br>
            </form>
            </div>