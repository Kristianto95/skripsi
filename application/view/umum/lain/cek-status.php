<div  class="container-fluid first">
  <h3><b>Cek Status</b></h3>
  <hr class="line-permision">
  <br>
  <form name="formPencarian" method="post" >
      <div class="form-body ">
      <div class="form-group cari">
            <div class="input-group">
                 <div class="input-group-addon">
                     <input type="text" name="keyword" placeholder="masukan no Registrasi"  class="form-control" ><button type="submit" name="btnSubmit" value="cari"  class="btn btn-info glyphicon glyphicon-search " /><span></span></button>
                 </div>
            </div>
      </div>    
    </div>
  </form>
</div>
<div class="container-fluid kotakcari2" >
      <hr class="line-title">
      <h3 class="coloumn-title">
  <br>
 <div class="table-responsive container">
  <table class="table ">
			<?php     
        $registrasi = $_POST['keyword'];
        foreach ($db->tampil_imb($registrasi) as $row) 
        {
      ?>			
         <tr>
        <td class="garistabel">No Registrasi</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo $row['registrasi'];?></td>
      </tr>
      <tr>
        <td class="garistabel">No KTP / NIK</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo $row['noktp'];?></td>
      </tr>
      <tr>
        <td class="garistabel">Nama Anda</td>
        <td class="garistabel"> : </td>
        <td class="garistabel" > <?php echo $row['nama'];?></td>
      </tr>
      <tr>
        <td class="garistabel">Tanggal Pendaftaran</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo tgl_indo ($row['pendaftaran']); ?></td>
      </tr>
      <tr>
        <td class="garistabel">Status</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo $row['proses'];?></td>
      </tr>
      <tr>
        <td class="garistabel">Keterangan</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo $row['paraf'];?></td>
      </tr>
			<?php
			
						}
			?>

      </table>
      <table class="table ">
      <?php     
        $registrasi = $_POST['keyword'];
        foreach ($db->tampil_ho($registrasi) as $row) 
        {
      ?>      
         <tr>
        <td class="garistabel">No Registrasi</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo $row['registrasi'];?></td>
      </tr>
      <tr>
        <td class="garistabel">No KTP / NIK</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo $row['noktp'];?></td>
      </tr>
      <tr>
        <td class="garistabel">Nama Anda</td>
        <td class="garistabel"> : </td>
        <td class="garistabel" > <?php echo $row['nama'];?></td>
      </tr>
      <tr>
        <td class="garistabel">Tanggal Pendaftaran</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo tgl_indo ($row['pendaftaran']); ?></td>
      </tr>
      <tr>
        <td class="garistabel">Status</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo $row['proses'];?></td>
      </tr>
      <tr>
        <td class="garistabel">Keterangan</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo $row['paraf'];?></td>
      </tr>
      <?php
      
            }
      ?>

      </table>
      <table class="table ">
      <?php     
        $registrasi = $_POST['keyword'];
        foreach ($db->tampil_iumk($registrasi) as $row) 
        {
      ?>      
         <tr>
        <td class="garistabel">No Registrasi</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo $row['registrasi'];?></td>
      </tr>
      <tr>
        <td class="garistabel">No KTP / NIK</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo $row['noktp'];?></td>
      </tr>
      <tr>
        <td class="garistabel">Nama Anda</td>
        <td class="garistabel"> : </td>
        <td class="garistabel" > <?php echo $row['nama'];?></td>
      </tr>
      <tr>
        <td class="garistabel">Tanggal Pendaftaran</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo tgl_indo ($row['pendaftaran']); ?></td>
      </tr>
      <tr>
        <td class="garistabel">Status</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo $row['proses'];?></td>
      </tr>
      <tr>
        <td class="garistabel">Keterangan</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo $row['paraf'];?></td>
      </tr>
      <?php
      
            }
      ?>

      </table>
      <table class="table ">
      <?php     
        $registrasi = $_POST['keyword'];
        foreach ($db->tampil_siup($registrasi) as $row) 
        {
      ?>      
         <tr>
        <td class="garistabel">No Registrasi</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo $row['registrasi'];?></td>
      </tr>
      <tr>
        <td class="garistabel">No KTP / NIK</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo $row['noktp'];?></td>
      </tr>
      <tr>
        <td class="garistabel">Nama Anda</td>
        <td class="garistabel"> : </td>
        <td class="garistabel" > <?php echo $row['nama'];?></td>
      </tr>
      <tr>
        <td class="garistabel">Tanggal Pendaftaran</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo tgl_indo ($row['pendaftaran']); ?></td>
      </tr>
      <tr>
        <td class="garistabel">Status</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo $row['proses'];?></td>
      </tr>
      <tr>
        <td class="garistabel">Keterangan</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo $row['paraf'];?></td>
      </tr>
      <?php
      
            }
      ?>

      </table>
      <table class="table ">
      <?php     
        $registrasi = $_POST['keyword'];
        foreach ($db->tampil_tdi($registrasi) as $row) 
        {
      ?>      
         <tr>
        <td class="garistabel">No Registrasi</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo $row['registrasi'];?></td>
      </tr>
      <tr>
        <td class="garistabel">No KTP / NIK</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo $row['noktp'];?></td>
      </tr>
      <tr>
        <td class="garistabel">Nama Anda</td>
        <td class="garistabel"> : </td>
        <td class="garistabel" > <?php echo $row['nama'];?></td>
      </tr>
      <tr>
        <td class="garistabel">Tanggal Pendaftaran</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo tgl_indo ($row['pendaftaran']); ?></td>
      </tr>
      <tr>
        <td class="garistabel">Status</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo $row['proses'];?></td>
      </tr>
      <tr>
        <td class="garistabel">Keterangan</td>
        <td class="garistabel"> : </td>
        <td class="garistabel"><?php echo $row['paraf'];?></td>
      </tr>
      <?php
      
            }
      ?>

      </table>
      </div>
			</div>
