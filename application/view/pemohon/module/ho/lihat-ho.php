<?php
include('model/config.php');
$start=0;
$jml=3;

if(isset($_GET['halaman']))
{
$halaman=$_GET['halaman'];
$start=($halaman-1)*$jml;
}


$query=$db->prepare("SELECT * FROM ijin_ho ORDER BY id_ho DESC LIMIT :start, :jml");
$query->bindValue(":start", $start, PDO::PARAM_INT);
$query->bindValue(":jml", $jml, PDO::PARAM_INT);
$query->execute();
$rows = $query->rowCount();
$total=ceil($rows/$jml);

?>
<div class="container" style="padding-top:70px;">
    <h3 class="text-center"><b>IZIN GANGGUAN</b></h3>
    <table>
      <tr>
          <th><a class="btn btn-primary" href="?module=pengajuan-izin-gangguan"><span class="glyphicon glyphicon-plus"></span>Ajukan Permohonan</a></th>
      </tr>
    </table>
    <br>
    <div class="table-responsive" >
     <table class="table table-hover table-striped" >
      <tr>
          <th>No</th>
          <th>No Registrasi</th>
          <th>Perihal</th>
          <th>Daftar Ke</th>
          <th>Nama</th>
          <th>Nama_Usaha</th>
          <th>Tanggal_Daftar</th>
          <th>Proses</th>
          <th>Keterangan</th>
          <th>No_HO</th>
          <th>Tanggal_Terbit</th>
          <th style="text-align: center;">Aksi</th>
      </tr>
<?php
$no = $start+1;
while ($row = $query -> fetch(PDO::FETCH_ASSOC)){
?>
      <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $row['registrasi'];?></td>
        <td><?php echo $row['perihal'];?></td>
        <td><?php echo $row['daftar_ke'];?></td>
        <td><?php echo $row['nama'];?></td>
        <td><?php echo $row['namausaha'];?></td>
        <td><?php  echo tgl_indo ($row['pendaftaran']);?></td>
        <td><?php echo $row['proses'];?></td>
        <td><?php echo $row['paraf'];?></td>
        <td><?php echo $row['no_ho'];?></td>
        <td><?php echo $row['terbit'];?></td>
        <td>
          <a class="btn btn-success"  href="?module=detail-izin-gangguan-saya&registrasi=<?php echo base64_encode($row['registrasi']);?>')" > <span class="glyphicon glyphicon-list"> </span> Lihat</a>
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
  echo "<a href='?module=izin-gangguan-saya&halaman=".($halaman-1)."' class='btn btn-info'>PREVIOUS </a> &nbsp;  &nbsp;";
}
if($halaman!=$total)
{
  echo "<a href='??module=izin-gangguan-saya&halaman=".($halaman+1)."' class='btn btn-info'>NEXT</a>";
}
?> 

</div>

    
    
  
