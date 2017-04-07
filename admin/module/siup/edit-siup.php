<div class="container-fluid">
<?php
           $registrasi =base64_decode( $_GET['registrasi']);
          foreach ($db->tampil_siup($registrasi) as $row){
        ?>
  <h3  class="text-center">Form Update Data Surat Izin Usaha Perdagangan</h3>
  <br>
    <form method="post" name="formSIUP" enctype="multipart/form-data" action="../application/controller/controller_admin.php?aksi=update_siup"  onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
        <div class="form-body">
            <div class="form-group">
                   <input name="id_siup" type="hidden" class="form-control" value="<?php echo $row['registrasi'];?>">
             </div>
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                   <input readonly value="<?php echo $row['noktp'];?>" name="noktp" type="text" class="form-control"  id="restrict" placeholder="No KTP" maxlength="16" onkeypress="return isNumberKey(event)">
                   </div>
              </div> 
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <input readonly value="<?php echo $row['daftar_ke'];?>" name="daftar_ke" type="text" class="form-control"  placeholder="Daftar_ke" maxlength="3" >
                   </div>
              </div>         
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
                   <input readonly value="<?php echo $row['namaperusahaan'];?>" name="namaperusahaan" type="text" class="form-control" placeholder="Nama Perusahaan">
                   </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
                   <input readonly value="<?php echo $row['jenis'];?>" name="jenis" type="text" class="form-control" placeholder="Nama Perusahaan">
                   </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input readonly value="<?php echo $row['jabatan'];?>" name="jabatan" type="text" class="form-control" placeholder="Jabatan Pemilik">
                   </div>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input readonly value="<?php echo $row['alamatperusahaan'];?>" name="alamatperusahaan" type="text" class="form-control" placeholder="Alamat Perusahaan">
                   </div>                    
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input readonly value="<?php echo $row['desa'];?>" name="desa" type="text" class="form-control" placeholder="Desa">
                   </div>                    
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input readonly value="<?php echo $row['kecamatan'];?>" name="kecamatan" type="text" class="form-control" placeholder="Kecamatan">
                   </div>                    
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input readonly value="<?php echo $row['kota'];?>" name="kota" type="text" class="form-control" placeholder="Kabupaten / Kota">
                   </div>                    
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input readonly value="<?php echo $row['provinsi'];?>" name="provinsi" type="text" class="form-control" placeholder="Provinsi">
                   </div>                    
              </div>
              
              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></div>
                        <input readonly value="<?php echo $row['notelp'];?>" name="notelp" type="text" class="form-control" placeholder="Nomer Telpon Perusahaan" maxlength="12" onkeypress="return isNumberKey(event)">
                        </div>                   
                   </div>
                            
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                        <input readonly value="<?php echo $row['nofax'];?>" name="nofax" type="text" class="form-control" placeholder="Nomor faximile Perusahaan">
                        </div>              
                   </div>
              </div><div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
                   <input readonly value="<?php echo $row['pos'];?>" name="pos" type="text" class="form-control" placeholder="Kodepos">
                   </div><br>

                   <div class="input-group">
                   <label>Status Perusahaan</label>
                    <select name="jenis" class="form-control">
                       <option value="PMA" >PMA</option>
                       <option value="PMDN">PMDN</option>
                    </select>
                   </div> 
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></div>
                   <input readonly value="<?php echo $row['nopendirian'];?>" name="nopendirian" type="text" class="form-control" placeholder="No Akta Pendirian Perusahaan" onkeypress="return isNumberKey(event)" maxlength="75">
                   </div>                   
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span>Tanggal Akta Pendirian Perusahaan</div>
                   <input readonly value="<?php echo $row['tgtlpendirian'];?>" name="tgtlpendirian" type="date" class="form-control" placeholder="Tanggal Akta Pendirian Perusahaan">
                   </div>                   
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></div>
                   <input readonly value="<?php echo $row['noperubahan'];?>"name="noperubahan" type="text" class="form-control" placeholder="No Perubahan Akta Pendirian Perusahaan" onkeypress="return isNumberKey(event)" maxlength="75">
                   </div>                   
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span>Tanggal Perubahan Akta Pendirian Perusahaan</div>
                   <input readonly value="<?php echo $row['tglperubahan'];?>" name="tglperubahan" type="date" class="form-control" placeholder="Tanggal Perubahan Akta Pendirian Perusahaan">
                   </div>                   
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></div>
                   <input readonly value="<?php echo $row['modal'];?>" name="modal" type="text" class="form-control" placeholder="Total Modal Dan Kekayaan Perusahaan" onkeypress="return isNumberKey(event)" maxlength="60">
                   </div>                   
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></div>
                   <input readonly value="<?php echo $row['saham'];?>" name="saham" type="text" class="form-control" placeholder="Total Nilai Saham" onkeypress="return isNumberKey(event)" maxlength="60">
                   </div>                   
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></div>
                   <input readonly value="<?php echo $row['sahamasing'];?>" name="sahamasing" type="text" class="form-control" placeholder="Saham Asing ( % )" onkeypress="return isNumberKey(event)" maxlength="25">
                   </div>                   
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></div>
                   <input readonly value="<?php echo $row['sahamnasional'];?>" name="sahamnasional" type="text" class="form-control" placeholder="Saham Nasional ( % )" onkeypress="return isNumberKey(event)" maxlength="25">
                   </div>                   
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-shopping-cart"></span></div>
                   <input readonly value="<?php echo $row['kelembagaan'];?>" name="kelembagaan" type="text" class="form-control" placeholder="Kelembagaan">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-shopping-cart"></span></div>
                   <input readonly value="<?php echo $row['kbli'];?>" name="kbli" type="text" class="form-control" placeholder="KBLI">
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-object-align-bottom"></span></div>
                   <input readonly value="<?php echo $row['barjas'];?>" name="barjas" type="text" class="form-control" placeholder="Barang / Jasa Dagang Perusahaan">
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
                   <label>Proses Perijinan</label>
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
                   <input name="no_siup" type="text" class="form-control" placeholder="Keterangan" value="<?php echo $no_siup ?>" readonly>
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span>Penerbitan Ijin</div>
                   <input name="terbit" type="date" class="form-control" >
                   </div>                  
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span>Masa Berlaku</div>
                   <input name="masber" type="date" class="form-control" >
                   </div>                  
              </div>             
              <br><br>                       
<?php
}
?>         
            
            <div class="form-footer">
                 <button  type="submit" name="submit" class="btn btn-info" >
                 <span class="glyphicon glyphicon-save" ></span>Simpan
                 </button>
                 <a  href="media.php?module=surat-izin-usaha-perdagangan&id=1" class="btn btn-warning">
                 <span class="glyphicon glyphicon-log-out"></span>Kembali
                 </a>
            </div>
            <br>
            <br>
            </form>
            </div>
