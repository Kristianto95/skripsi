<?php
include "../application/model/config.php";

$start=0;
$batas_page=3;
if(isset($_GET['id']))
{
$id=$_GET['id'];
$start=($id-1)*$batas_page;
}


$query=$db->prepare('SELECT * FROM pemohon ORDER BY noktp ASC LIMIT :start, :batas_page');
$query->bindValue(":start", $start, PDO::PARAM_INT);
$query->bindValue(":batas_page", $batas_page, PDO::PARAM_INT);
$query->execute();

$stmt = $db->query("select * from pemohon");
$rows = $stmt->rowCount();
$total=ceil($rows/$batas_page);

?>
<h3 class="text-center"><b>Data Pemohon</b></h3>
<div class="container"> 
  <div class="col-sm-9" style="padding-top:10px;"> 
      <a class="btn btn-primary" href="media.php?module=tambah-pemohon"><span class="glyphicon glyphicon-plus"></span>Tambah Data </a>
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
        $pencarian="%".$_POST['keyword']."%";
        try{
            $cari=$db->prepare("SELECT * FROM `pemohon` WHERE `nama` LIKE :keyword;");
            $cari->BindParam(":keyword",$pencarian);
            $cari->execute();
            if($cari->rowCount()<1){
                echo "<i> Tidak ada hasil untuk pencarian nama <b>\"".$_POST['keyword']."\"</i></b>";
            }else{
                // echo "<i> Hasil pencarian dengan Nomor Registrasi <b>\"".$_POST['keyword']."\"</b></i><br>";
                while($row=$cari->fetch()){
                  ?>

   <div class="table-responsive" >
     <table class="table table-striped">
        <tr>
          <th>No KTP</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No HP</th>
          <th colspan="3" style="text-align: center;">Aksi</th>
      </tr>
      <tr>
        <td><?php echo $row['noktp'];?></td>
        <td><?php echo $row['nama'];?></td>
        <td><?php echo $row['alamat'];?></td>
        <td><?php echo $row['nohp'];?></td>
        <td>
          <a class="btn btn-success"  href="media.php?module=detail-data-pemohon&noktp=<?php echo base64_encode($row['noktp']);?>')" > <span class="glyphicon glyphicon-list"> </span> Lihat</a>
        </td>
        <td>
          <a class="btn btn-info"  href="media.php?module=edit-pemohon&noktp=<?php echo base64_encode($row['noktp']);?>')" > <span class="glyphicon glyphicon-list"> </span> Edit</a>
        </td>
        <td>
          <a class="btn btn-danger" onclick="return confirm('yakin ingin menghapus data dengan noktp : <?php echo $row['noktp'] ?> ')" href="../application/controller/controller_admin.php?aksi=hapus_pemohon&registrasi=<?php echo $row['registrasi']; ?>"><span class="glyphicon glyphicon-file"> </span> Hapus</a>
        </td>
      </tr>
   </table>
                  <?php
                }
            }   
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
?>
</div>
<hr>


  <div class="table-responsive" >
     <table class="table table-striped">
      <tr>
          <th>No</th>
          <th>No KTP</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No HP</th>
          <th colspan="3" style="text-align: center;">Aksi</th>
      </tr>
<?php
$no = $start+1;
while ($row = $query -> fetch(PDO::FETCH_ASSOC)){
?>
      <tr>
        <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $row['noktp'];?></td>
        <td><?php echo $row['nama'];?></td>
        <td><?php echo $row['alamat'];?></td>
        <td><?php echo $row['nohp'];?></td>
        <td>
          <a class="btn btn-success"  href="media.php?module=detail-data-pemohon&noktp=<?php echo base64_encode($row['noktp']);?>')" > <span class="glyphicon glyphicon-list"> </span> Lihat</a>
        </td>
        <td>
          <a class="btn btn-info"  href="media.php?module=edit-pemohon&noktp=<?php echo base64_encode($row['noktp']);?>')" > <span class="glyphicon glyphicon-list"> </span> edit</a>
        </td>
        <td>
          <a class="btn btn-danger" onclick="return confirm('yakin ingin menghapus data dengan noktp : <?php echo $row['noktp'] ?> ')" href="../application/controller/controller_admin.php?aksi=hapus_pemohon&noktp=<?php echo $row['noktp']; ?>"><span class="glyphicon glyphicon-file"> </span> Hapus</a>
        </td>
      </tr>
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
  echo "<a href='?module=data-pemohon&id=".($id-1)."' class='btn btn-info'>PREVIOUS </a> &nbsp;  &nbsp;";
}
if($id!=$total)
{
  echo "<a href='?module=data-pemohon&id=".($id+1)."' class='btn btn-info'>NEXT</a>";
}
 ?>
 <br> 

</div>
