<?php
include('model/config.php');
$start=0;
$jml=3;

if(isset($_GET['halaman']))
{
$halaman=$_GET['halaman'];
$start=($halaman-1)*$jml;
}


$query=$db->prepare('SELECT * FROM nonijin_dispensasi ORDER BY id_dispensasi DESC LIMIT :start, :jml');
$query->bindValue(":start", $start, PDO::PARAM_INT);
$query->bindValue(":jml", $jml, PDO::PARAM_INT);
$query->execute();
$stmt = $db->query("select * from nonijin_dispensasi");
$rows = $stmt->rowCount();
$total=ceil($rows/$jml);

?>
<div class="container" style="padding-top:70px;">
  <h3 class="text-center"><b>DISPENSASI NIKAH</b></h3>
  <table>
      <tr>
          <th><a class="btn btn-primary" href="?module=pengajuan-dispensasi-nikah"><span class="glyphicon glyphicon-plus"></span>Ajukan Permohonan</a></th>
      </tr>
  </table>  
  <br>
  <div class="table-responsive" >
     <table class="table table-striped" >
      <tr>
          <th>No</th>
          <th>No Registrasi</th>
          <th>Mempelai Wanita</th>
          <th>Mempelai Pria</th>
          <th>Tanggal Daftar</th>
          <th>Proses</th>
          <th>Paraf</th>
          <th>No Dispensasi</th>
          <th>Tanggal_Terbit</th>
          <th colspan="3" style="text-align: center;">Aksi</th>
      </tr>
<?php
$no = $start+1;
while ($row = $query -> fetch(PDO::FETCH_ASSOC)){
?>
      <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $row['registrasi'];?></td>
        <td><?php echo $row['namawanita'];?></td>
        <td><?php echo $row['namapria'];?></td>
        <td><?php echo $row['pendaftaran'];?></td>     
        <td><?php echo $row['proses'];?></td>
        <td><?php echo $row['paraf'];?></td>        
        <td><?php echo $row['no_dispensasi'];?></td>
        <td><?php echo $row['terbit'];?></td>
         <td>
          <a class="btn btn-success"  href="?module=detail-dispensasi-nikah-saya&registrasi=<?php echo base64_encode($row['registrasi']);?>')" > <span class="glyphicon glyphicon-list"> </span> Lihat</a>
        </td>
      </tr>
<?php
}
?>    
     </table>
     <table align="right">
          <tr>
             <th colspan="2" align="right"> <?php echo "Jumlah Data : ".$rows."<br />"; ?></th>
          </tr>
    </table> 
  </div>   
     <?php
if($halaman>1)
{
  echo "<a href='?module=dispensasi-nikah-saya&halaman=".($halaman-1)."' class='btn btn-info'>PREVIOUS </a> &nbsp;  &nbsp;";
}
if($halaman!=$total)
{
  echo "<a href='?module=dispensasi-nikah-saya&halaman=".($halaman+1)."' class='btn btn-info'>NEXT</a>";
}
 ?>

</div>
    