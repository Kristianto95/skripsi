<?php
   require 'proses/config.php';
$start=0;
$jml=3;

if(isset($_GET['id']))
{
$id=$_GET['id'];
$start=($id-1)*$jml;
}


$query=$db->prepare('SELECT * FROM admin ORDER BY id DESC LIMIT :start, :jml');
$query->bindValue(":start", $start, PDO::PARAM_INT);
$query->bindValue(":jml", $jml, PDO::PARAM_INT);
$query->execute();
$stmt = $db->query("select * from admin");
$rows = $stmt->rowCount();
$total=ceil($rows/$jml);

?>
<h3 class="text-center"><b>ADMIN</b></h3>
      <table>
        <tr>
            <th><a class="btn btn-success" href="media.php?module=tambah-admin"><span class="glyphicon glyphicon-plus"></span>Tambah Admin</a></th>
        </tr>
      </table>  
      <br>
    <div class="table-responsive" >
     <table class="table table-striped" >
     	<tr>
          <th>No</th>
        	<th>Username</th>
        	<th>NIK</th>
       		<th>Nama</th>
        	<th>Alamat</th>
          <th style="text-align: center;">Aksi</th>
      </tr>
<?php
$no = $start+1;
while ($row = $query -> fetch(PDO::FETCH_ASSOC)){
?>
      <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $row['username'];?></td>
        <td><?php echo $row['nik'];?></td>
        <td><?php echo $row['nama'];?></td>
        <td><?php echo $row['alamat'];?></td>
        <td style="text-align: center;">
            <a class="btn btn-info" href="media.php?module=edit-admin&username=<?php echo base64_encode($row['username']);?>"><span class="glyphicon glyphicon-file"> </span> Edit</a>
            <a class="btn btn-danger"  href="javascript:konfirmasi('<?php echo $row['username'];?>','<?php echo $row['username'];?>')" > <span class="glyphicon glyphicon-remove"> </span> Hapus</a>
          </td>
      </tr>
      <script>
           function konfirmasi(username){
              var jawab = confirm("Yakin Pemohon dengan No Pendaftaran : "+username+" akan dihapus?");
              if(jawab){
                  window.location ="proses/proses.php?username=<?php echo $row['username']; ?>&aksi=hapus_admin"
                  alert("Data Anda Telah Terhapus")
              }
            }
      </script>
<?php
$no++;
}
?>      
		</div>
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
    echo "<a href='?module=uraian&id=1".($id-1)."' class='btn btn-info'>PREVIOUS </a> &nbsp;  &nbsp;";
    }
    if($id!=$total)
    {
    echo "<a href='?module=uraian&id=1".($id+1)."' class='btn btn-info'>NEXT</a>";
    }
 ?>