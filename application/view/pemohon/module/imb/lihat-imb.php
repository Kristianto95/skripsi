<?php
ob_start();
  if(!isset($_SESSION['username'])){ // Halaman ini tidak dapat diakses jika belum login
  ?>
  <script type="text/javascript">   
    Window.Location: "../lain/login.php"; 
  </script>
<?php

}
include('model/config.php');

$start=0;
$batas_page=3;

if(isset($_GET['halaman']))
{
$halaman=$_GET['halaman'];
$start=($halaman-1)*$batas_page;
}


$query=$db->prepare('SELECT * FROM ijin_imb ORDER BY id_imb DESC LIMIT :start, :batas_page');
$query->bindValue(":start", $start, PDO::PARAM_INT);
$query->bindValue(":batas_page", $batas_page, PDO::PARAM_INT);
$query->execute();

$stmt = $db->query("select * from ijin_imb");
$rows = $stmt->rowCount();
$total=ceil($rows/$batas_page);
?>
<div class="container" style="padding-top:70px;">
  <h3 class="text-center"><b>IZIN MENDIRIKAN BANGUNAN</b></h3>
   <table>
      <tr>
          <th><a class="btn btn-primary" href="?module=pengajuan-izin-mendirikan-bangunan"><span class="glyphicon glyphicon-plus"></span>Ajukan Permohonan </a></th>
      </tr>
    </table>  
     <br>
     <div class="table-responsive" >
     <table class="table table-striped">
      <tr>
          <th>No</th>
          <th>No Registrasi</th>
          <th>Daftar Ke</th>
          <th>Maksud</th>
          <th>Tanggal_Daftar</th>
          <th>Proses</th>
          <th>Paraf</th>
          <th>No IMB</th>
          <th>Tanggal_Terbit</th>
          <th class="text-center">Aksi</th>
      </tr>
<?php
$no = $start+1;
while ($row = $query -> fetch(PDO::FETCH_ASSOC)){
?>
      <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $row['registrasi'];?></td>
        <td><?php echo $row['daftar_ke'];?></td>
        <td><?php echo $row['maksud'];?></td>
        <td><?php  echo tgl_indo ($row['pendaftaran']);?></td>
        <td><?php echo $row['proses'];?></td>
        <td><?php echo $row['paraf'];?></td>
        <td><?php echo $row['no_imb'];?></td>
        <td><?php echo $row['terbit'];?></td>
        <td>
          <a class="btn btn-success"  href="?module=detail-izin-mendirikan-bangunan-saya&registrasi=<?php echo base64_encode($row['registrasi']);?>')" > <span class="glyphicon glyphicon-list"> </span> Lihat</a>
        </td>        
      </tr>
      <script>
             function konfirmasi(registrasi){
                var jawab = confirm("Yakin Pemohon dengan No Pendaftaran : "+registrasi+" akan dihapus?");
                if(jawab){
                    window.location ="proses/proses.php?registrasi=<?php echo $row['registrasi']; ?>&aksi=hapus_imb"
                    alert("Data Anda Telah Terhapus")
                }
              }
      </script>
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
if($halaman>1)
{
  echo "<a href='?module=izin-mendirikan-bangunan-saya&halaman=".($halaman-1)."' class='btn btn-info'>PREVIOUS </a> &nbsp;  &nbsp;";
}
if($halaman!=$total)
{
  echo "<a href='?module=izin-mendirikan-bangunan-saya&halaman=".($halaman+1)."' class='btn btn-info'>NEXT</a>";
}

 ?>
</div>

 
   
  