<div class="container-fluid kotak5">
  <?php
           $registrasi =base64_decode( $_GET['id']);
          foreach ($db->tampil_penanda($registrasi) as $row){
        ?>
  <h3 class="text-center">Form Edit Penanda Tangan</h3>
  <br>
    <form method="post"  name="formPenandaTangan" enctype="multipart/form-data" action="../application/controller/controller_admin.php?aksi=update_penanda" >
    <br>
        <div class="form-body">
            <div class="form-group">
                   <input name="id" type="hidden" class="form-control" value="<?php echo $row['id']; ?>">
             </div>
            </div>                
             <div class="form-group col-sm-12">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <input name="nip" type="text" class="form-control" placeholder="NIP" value="<?php echo $row['nip']; ?>">
                   </div>
              </div>      
             <div class="form-group col-sm-12">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <input name="nama" type="text" class="form-control" placeholder="Nama Pejabat" value="<?php echo $row['nama']; ?>">
                   </div>
              </div>           
             <div class="form-group col-sm-12">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <input name="jabatan" type="text" class="form-control" placeholder="Jabatan" value="<?php echo $row['jabatan']; ?>">
                   </div>
              </div>            
             <div class="form-group col-sm-12">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span>Unggah Tanda Tangan</div>
                    <input name="tanda_tangan" type="file" class="form-control">
                   </div>
              </div>
                    <b style="padding-left:20px;">File Sebelum di edit </b> <a href="module/penanda/download.php?filename=<?php echo $row['tanda_tangan'] ?>">(<?php echo $row['tanda_tangan']; ?>)</a>
              
             
              <?php
                }
              ?>
              <br> 
              <br>  
           <div class="form-footer col-sm-12">
                 <button  type="submit" name="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-save"></span>Simpan dan Cetak!
                 </button>
            </div>


            </form>
            </div>
 </div>