<?php
include "../application/model/config.php";

$query=$db->prepare("SELECT * FROM admin WHERE akses='superadmin'");
$query->execute();

?>
<h3 class="text-center"><b>Data Admin</b></h3>

    <br>

<div>
  


  <div class="table-responsive" >
     <table class="table table-striped">
<?php
while ($row = $query -> fetch(PDO::FETCH_ASSOC)){
?>
      <tr>
         <tr>
              <td>No KTP</td>
              <td> : </td>
              <td><?php echo $row['noktp'];?></td>
            </tr>
            <tr>
              <td>Nama Lengkap</td>
              <td> : </td>
              <td><?php echo $row['nama'];?></td>
            </tr>
            <tr>
              <td>Alamat Lengkap</td>
              <td> : </td>
              <td><?php echo $row['alamat'];?></td>
            </tr>
            <tr>
              <td>No Hp</td>
              <td> : </td>
              <td><?php echo $row['nohp'];?></td>
            </tr>
            <tr>
              <td>Username</td>
              <td> : </td>
              <td><?php echo $row['username'];?></td>
            </tr>
            <tr>
              <td>Password</td>
              <td> : </td>
              <td>xxxxxxxxx</td>
            </tr>
            <tr>
              <td  align="right">
    <a class="btn btn-info"  href="media.php?module=edit-akun-anda&nik=<?php echo base64_encode($row['nik']);?>')" > <span class="glyphicon glyphicon-list"> </span> Edit</a> </td>
            </tr>
<?php
}
?>      
    </table>

  </div>