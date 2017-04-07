<h3 class="text-center">DETAIL DATA ADMIN</h3>
<br>
<br>
<div class="container">
  <div class="table ">
        <table class="table table-striped  ">
          <?php
                 $nik =base64_decode( $_GET['nik']);
                foreach ($db->tampil_admin($nik) as $row){
              ?>
           <tbody>
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
          </tbody>
           <?php
            }
           ?>
        </table>
  </div>
</div>
<br>
<br>

<div class="form-footer" align="center">
    <a class="btn btn-warning texthitam" href="media.php?module=data-admin&id=1" ><b>Kembali</b> </a>
</div>