<?php
include('model/config.php');
$start=0;
$jml=3;

if(isset($_GET['halaman']))
{
$halaman=$_GET['halaman'];
$start=($halaman-1)*$jml;
}

$query=$db->prepare('SELECT * FROM ijin_siup ORDER BY id_siup DESC LIMIT :start, :jml');
$query->bindValue(":start", $start, PDO::PARAM_INT);
$query->bindValue(":jml", $jml, PDO::PARAM_INT);
$query->execute();
$stmt = $db->query("select * from ijin_siup");
$rows = $stmt->rowCount();
$total=ceil($rows/$jml);

?>
<div class="container" style="padding-top:70px;">
  <h3 class="text-center"><b>SURAT IZIN USAHA PERDAGANGAN</b></h3>
        <table>
            <tr>
                <th><a class="btn btn-primary" href="?module=pengajuan-surat-izin-usaha-perdagangan"><span class="glyphicon glyphicon-plus"></span>Ajukan Permohonan</a></th>
            </tr>
        </table>  
        <br>
      <div class="table-responsive" >
         <table class="table table-striped" >
          <tr >
              <th>No</th>
              <th>No Registrasi</th>
              <th>Daftar Ke</th>
              <th>Nama Perusahaan</th>
              <th>Tanggal_Daftar</th>      
              <th>Proses</th>
              <th>Paraf</th>
              <th>No SIUP</th>
              <th>Tanggal_Terbit</th>
              <th>Masa Berlaku</th>
              <th class="text-center"> Aksi</th>
          </tr>
  <?php
  $no = $start+1;
  while ($row = $query -> fetch(PDO::FETCH_ASSOC)){
  ?>
        <tr>
          <td><?php echo $no++;?></td>
          <td><?php echo $row['registrasi'];?></td>
          <td><?php echo $row['daftar_ke'];?></td>
          <td><?php echo $row['namaperusahaan'];?></td>
          <td><?php echo tgl_indo ($row['pendaftaran']);?></td>
          <td><?php echo $row['proses'];?></td>
          <td><?php echo $row['paraf'];?></td>
          <td><?php echo $row['no_siup'];?></td>
          <td><?php echo $row['terbit'];?></td>
          <td><?php echo $row['masber'];?></td>
          <td>
            <a class="btn btn-success"  href="?module=detail-surat-izin-usaha-perdagangan-saya&registrasi=<?php echo base64_encode($row['registrasi']);?>')" > <span class="glyphicon glyphicon-list"> </span> Lihat</a>
           </td>
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
      if($halaman>1)
      {
      echo "<a href='?module=surat-izin-usaha-perdagangan&halaman=".($halaman-1)."' class='btn btn-info'>PREVIOUS </a> &nbsp;  &nbsp;";
      }
      if($halaman!=$total)
      {
      echo "<a href='?module=surat-izin-usaha-perdagangan&halaman=".($halaman+1)."' class='btn btn-info'>NEXT</a>";
      }
   ?> 
</div>