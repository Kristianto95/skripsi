
</head>

<div class="container-fluid kotak5">
  <h3 class="text-center">Form Tambah FAQ</h3>
  <br>
    <form method="post"  name="formDasarHukum"  action="../application/controller/controller_admin.php?aksi=tambah_faq" >
    <br>
        <div class="form-body">
            <div class="form-group">
                   <input name="id" type="hidden" class="form-control">
             </div>
            </div>
            
             <div class="form-group col-sm-12">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <textarea name="pertanyaan" type="text" class="form-control" placeholder="Isikan Pertanyaan" ></textarea>
                   </div>
              </div> 
              <div class="form-group col-sm-12">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></div>
                    <textarea name="jawaban" type="text" class="form-control" placeholder="Isikan Jawaban" ></textarea>
                   </div>
              </div>  
             <div class="form-group col-sm-3">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
                   <select class="form-control" name="kategori">
                        <option value="kosong" selected disabled>--Pilih Kategori--</option>
                        <option value="Umum">Umum</option>
                        <option value="Isi Formulir">Isi Formulir</option>
                        <option value="Kehilangan">Kehilangan</option>
                        </select>
                   </div>     
              <br>              
              </div>
           <div class="form-footer col-sm-12">
                 <button  type="submit" name="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-save"></span>Simpan dan Cetak!
                 </button>
            </div>


            </form>
            </div>
 </div>