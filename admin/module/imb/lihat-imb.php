<?php
if(!isset($_SESSION['akses'])){ // Halaman ini tidak dapat diakses jika belum login 
    header('Location: login.php'); 
 }

include "../application/model/config.php";

$start=0;
$jml=3;

if(isset($_GET['id']))
{
$id=$_GET['id'];
$start=($id-1)*$jml;
}

$query=$db->prepare("SELECT ijin_imb.*, pemohon.noktp AS 'ktp', 
  pemohon.nama AS 'nama' FROM ijin_imb, pemohon WHERE ijin_imb.noktp=pemohon.noktp
   ORDER BY id_imb DESC LIMIT :start, :jml");
$query->bindValue(":start", $start, PDO::PARAM_INT);
$query->bindValue(":jml", $jml, PDO::PARAM_INT);
$query->execute();
$stmt = $db->query("select * from ijin_imb");
$rows = $stmt->rowCount();
$total=ceil($rows/$jml);

?>
<h3 class="text-center"><b>IZIN MENDIRIKAN BANGUNAN</b></h3>
      <div class="container"> 
  <div class="col-sm-9" style="padding-top:10px;"> 
      <a class="btn btn-primary" href="media.php?module=tambah-izin-mendirikan-bangunan"><span class="glyphicon glyphicon-plus"></span>Tambah Data </a>
  </div>
  <div class="col-sm-3">
    <form name="formPencarian" method="post" >
            <div>
              <div class="input-group">
                 <div class="input-group-addon">
                     <input type="text" name="keyword" placeholder="Cari Berdasarkan Nama"  class="form-control" ><span><button type="submit" name="cari" value="cari"  class="btn btn-info glyphicon glyphicon-search " /></button></span>
                 </div>
              </div>
            </div>
            </form>
  </div>
</div>
    <br>


<div>
  <?php
if(isset($_POST['cari'])){
        $pencarian=$_POST['keyword'];
        try{
            $cari=$db->prepare("SELECT ijin_imb.*, pemohon.noktp, pemohon.nama, 
              pemohon.alamat, pemohon.nohp FROM ijin_imb 
      INNER JOIN pemohon ON ijin_imb.noktp = pemohon.noktp WHERE nama LIKE :keyword;");
            $cari->BindParam(":keyword",$pencarian);
            $cari->execute();
            if($cari->rowCount()<1){
                echo "<i> Tidak ada hasil untuk pencarian nama <b>\"".$_POST['keyword']."\"</i></b>";
            }else{
                // echo "<i> Hasil pencarian dengan Nomor Registrasi <b>\"".$_POST['keyword']."\"</b></i><br>";
              ?>

   <div class="table-responsive" >
     <table class="table table-striped">
        <tr align="center">
          <th>Nama</th>
          <th>Proses</th>
          <th>Paraf</th>
          <th>Persyaratan</th>
          <th >No imb</th>
          <th>Tanggal_Terbit</th>
          <th colspan="3" style="text-align: center;">Aksi</th>
      </tr>
        
        <?php
        while($row=$cari->fetch()){
                  ?>
      <tr>
        <td><?php echo $row['nama'];?></td>
        <td align="center"><?php echo $row['proses'];?></td>
        <td><?php echo $row['paraf'];?></td>
        <td><a href="module/imb/download.php?filename=<?php echo $row['syarat']?>" target="_blank">Download</a></td>
        <td><?php echo $row['no_imb'];?></td>
        <td><?php echo $row['terbit'];?></td>
        <?php
        $akses = $_SESSION['akses'];
          if ($akses == 'superadmin') {
            ?>
        <td>
          <a class="btn btn-success" href="media.php?module=preview-izin-mendirikan-bangunan&registrasi=<?php echo base64_encode($row['registrasi']);?>')" > <span class="glyphicon glyphicon-list"> </span> Lihat</a>
        </td>
        <?php
          $imb = $row['no_imb'];
          if ($imb > 0) {
            ?>
              <td>
                <a class="btn btn-info" disabled href="#" > <span class="glyphicon glyphicon-list"> </span> Update</a>
              </td>
            <?php
          }else{
            ?>
        <td>
          <a class="btn btn-info"  href="media.php?module=edit-izin-mendirikan-bangunan&registrasi=<?php echo base64_encode($row['registrasi']);?>')" > <span class="glyphicon glyphicon-list"> </span> Update</a>
        </td> 
              
            <?php
          }
        ?>
        <td>
          <a class="btn btn-danger" onclick="return confirm('apa kamu yakin ingin menghapus data dengan no : <?php echo $row['registrasi'] ?> ')" href="../application/controller/controller_admin.php?aksi=hapus_imb&registrasi=<?php echo $row['registrasi']; ?>&syarat=<?php echo $row['syarat']; ?>"><span class="glyphicon glyphicon-file"> </span> Hapus</a>
        </td>
            <?php
          }
        ?>
      </tr>
      <?php
                }
        ?>
   </table>
        <?php 
            }   
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
?>
</div>
<hr>  
      <br>
    <div class="table-responsive" >
       <table class="table table-responsive table-striped">
        <tr >
            <th>Nama</th>
            <th>Proses</th>
            <th>Paraf</th>
            <th>Persyaratan</th>
            <th>No imb</th>
            <th>Tanggal Pendaftaran</th>
            <th colspan="4" style="text-align: center;">Aksi</th>
        </tr>
<?php
$no = $start+1;
while ($row = $query -> fetch(PDO::FETCH_ASSOC)){
?>
      <tr>
        <td><?php echo $row['nama'];?></td>
        <td><?php echo $row['proses'];?></td>
        <td><?php echo $row['paraf'];?></td>
        <td><a href="module/imb/download.php?filename=<?php echo $row['syarat']?>" target="_blank">Download</a></td>
        <td><?php echo $row['no_imb'];?></td>
        <td><?php echo tgl_indo($row['pendaftaran']);?></td>
        <?php
        $akses = $_SESSION['akses'];
          if ($akses == 'superadmin') {
            ?>
        <td>
          <a class="btn btn-success" href="media.php?module=preview-izin-mendirikan-bangunan&registrasi=<?php echo base64_encode($row['registrasi']);?>')" > <span class="glyphicon glyphicon-list"> </span> Lihat</a>
        </td>
        <?php
          $imb = $row['no_imb'];
          if ($imb > 0) {
            ?>
              <td>
                <a class="btn btn-info" disabled href="#" > <span class="glyphicon glyphicon-list"> </span> Update</a>
              </td>
            <?php
          }else{
            ?>
        <td>
          <a class="btn btn-info"  href="media.php?module=edit-izin-mendirikan-bangunan&registrasi=<?php echo base64_encode($row['registrasi']);?>')" > <span class="glyphicon glyphicon-list"> </span> Update</a>
        </td> 
              
            <?php
          }
        ?>
        <td>
          <a class="btn btn-danger" onclick="return confirm('apa kamu yakin ingin menghapus data dengan no : <?php echo $row['registrasi'] ?> ')" href="../application/controller/controller_admin.php?aksi=hapus_imb&registrasi=<?php echo $row['registrasi']; ?>&syarat=<?php echo $row['syarat']; ?>"><span class="glyphicon glyphicon-file"> </span> Hapus</a>
        </td>
            <?php
          }
        ?>
      </tr>
      
<?php
}
?>      
    </table>
  </div>
    <table align="right">
          <tr>
             <th colspan="2" align="right"> <?php echo "Jumlah Data : ".$rows."<br />"; ?></th>
          </tr>
    </table>  
<?php
    if($id>1)
    {
    echo "<a href='?module=izin-mendirikan-bangunan&id=".($id-1)."' class='btn btn-info'>PREVIOUS </a> &nbsp;  &nbsp;";
    }
    if($id!=$total)
    {
    echo "<a href='?module=izin-mendirikan-bangunan&id=".($id+1)."' class='btn btn-info'>NEXT</a>";
    }
 ?> 
