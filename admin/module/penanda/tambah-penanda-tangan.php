<div class="container-fluid kotak5">
  <h3 class="text-center">Form Tambah Penanda Tangan</h3>
  <br>
    <form method="post"  name="formPenandaTangan" enctype="multipart/form-data" action="../application/controller/controller_admin.php?aksi=tambah_penanda" >
    <br>
        <div class="form-body">
            <div class="form-group">
                   <input name="id" type="hidden" class="form-control">
             </div>
            </div>                
             <div class="form-group col-sm-12">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <input name="nip" type="text" class="form-control" placeholder="NIP" >
                   </div>
              </div>      
             <div class="form-group col-sm-12">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <input name="nama" type="text" class="form-control" placeholder="Nama Pejabat" >
                   </div>
              </div>           
             <div class="form-group col-sm-12">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <input name="jabatan" type="text" class="form-control" placeholder="Jabatan" >
                   </div>
              </div>            
             <div class="form-group col-sm-12">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon"></span>Unggah Tanda Tangan</div>
                    <input name="tanda_tangan" type="file" class="form-control" >
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