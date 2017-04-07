<div class="container-fluid kotak5">
  <h3 class="text-center">Form Tambah Data Pemohon</h3>
  <br>
    <form method="post"  name="formPemohon"  action="../application/controller/controller_admin.php?aksi=tambah_pemohon" onSubmit="return validasi(document.getElementById('restrict'), 16, 16)">
    <br>
        <div class="form-body">
             <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <input name="noktp" type="text" class="form-control" id="restrict" placeholder="No KTP" maxlength="16" onkeypress="return isNumberKey(event)" >
                   </div>
              </div>          
            
              <div class="form-group ">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                        <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap " >
                        </div>                   
              </div>   
              <div class="form-group ">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-duplicate"></span></div>
                        <input name="tempat" type="text" class="form-control" placeholder="Tempat Lahir">
                        </div>                   
              </div>
              <div class="form-group">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-date"></span><label>Tangal Lahir</label></div>
                        <input name="tanggal" type="date" class="form-control lebarinputan" placeholder="Tanggal Lahir">
                        </div>              
                   </div>
              <div class="form-group">
                 <label>Jenis Kelamin</label>
                 <select class="form-control" name="jekel">
                     <option value="Laki - Laki">Laki-Laki</option>
                     <option value="Perempuan">Perempuan</option>
                 </select>
               </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-object-align-home"></span></div>
                   <input name="alamat" type="text" class="form-control" placeholder="Alamat Anda">
                   </div>                     
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-object-align-duplicated"></span></div>
                   <input name="rt" type="text" class="form-control" placeholder="RT (contoh : 01) " onkeypress="return isNumberKey(event)">
                   <input name="rw" type="text" class="form-control" placeholder="RW (contoh : 01)" onkeypress="return isNumberKey(event)">
                   </div>                                        
              </div>

              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-object-align-duplicate"></span></div>
                   <input name="desa" type="text" class="form-control" placeholder="Desa">
                   </div>                                        
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-object-align-duplicate"></span></div>
                   <input name="kecamatan" type="text" class="form-control" placeholder="Kecamatan">
                   </div>                                        
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon">Kabupaten</span></div>
                   <input name="kabupaten" type="text" class="form-control" value="Pekalongan" readonly>
                   </div>                                        
              </div>
              <div class="form-group sub">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon">Provinsi</span></div>
                   <input name="provinsi" type="text" class="form-control" value="Jawa Tengah" readonly>
                   </div>                                        
              </div>
              <div class="form-group">
                 <label>Agama</label>
                 <select class="form-control" name="agama">
                     <option value="Islam">Islam</option>
                     <option value="Kristen">Kristen</option>
                     <option value="Katolik">Katolik</option>
                     <option value="Hindu">Hindu</option>
                     <option value="Budha">Budha</option>
                     <option value="Konghucu">Konghucu</option>
                 </select>
               </div>
               <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input name="pekerjaan" type="text" class="form-control" placeholder="Pekerjaan Anda">
                   </div>                    
              </div>
              <div class="form-group">
                 <label>Status Perkawinan :</label>
                 <select class="form-control" name="status">
                     <option value="Belum Nikah">Belum Nikah</option>
                     <option value="Nikah">Menikah</option>
                 </select>
               </div>
               <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <input name="kewarganegaraan" type="text" class="form-control" placeholder="Kewarganegaraan Anda">
                   </div>                    
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></div>
                   <input name="nohp" type="text" class="form-control" placeholder="Masukkan No Telepon / Hp" maxlength="12" onkeypress="return isNumberKey(event)">
                   </div>                    
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="username" type="text" class="form-control" placeholder="Username">
                   </div>                  
              </div>  
                   <input name="password" type="password" class="form-control" placeholder="Password" >
           <div class="form-footer">
                 <button  type="submit" name="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-save"></span>Simpan dan Cetak!
                 </button>
            </div>


            </form>
            </div>
 </div>