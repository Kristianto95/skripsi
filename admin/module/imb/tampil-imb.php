<h3 class="text-center">IZIN MENDIRIKAN BANGUNAN</h3>
<br>
<br>
<div class="container">
  <div class="table-responsive container-fluid">
        <table class="table table-striped  ">
          <?php
                 $registrasi =base64_decode( $_GET['registrasi']);
                foreach ($db->tampil_imb($registrasi) as $row){
              ?>
           <tbody>
            <tr>
              <td>No Registrasi</td>
              <td> : </td>
              <td><?php echo $row['registrasi'];?></td>
            </tr>
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
              <td>Maksud Pengajuan IMB</td>
              <td> : </td>
              <td><?php echo $row['maksud'];?></td>
            </tr>
            <tr>
              <td>Kegunaan Bangunan</td>
              <td> : </td>
              <td><?php echo $row['penggunaan'];?></td>
            </tr>
            <tr>
              <td>Lokasi Bangunan</td>
              <td> : </td>
              <td><?php echo $row['lokasi'];?></td>
            </tr>
            <tr>
              <td>No Telepon / Hp </td>
              <td> : </td>
              <td><?php echo $row['nohp'];?></td>
            </tr>
            <tr>
              <td>Luas Tanah</td>
              <td> : </td>
              <td><?php echo $row['luastanah'];?></td>
            </tr>
            <tr>
              <td>Luas Bangunan </td>
              <td> : </td>
              <td><?php echo $row['luasbangunan'];?></td>
            </tr>
            <tr>
              <td>Status Tanah</td>
              <td> : </td>
              <td><?php echo $row['status'];?></td>
            </tr>
            <tr>
              <td>Tanggal Pendaftaran</td>
              <td> : </td>
              <td><?php echo $row['pendaftaran'];?></td>
            </tr>
            <tr>
              <td>No IMB</td>
              <td> : </td>
              <td><?php echo $row['no_imb'];?></td>
            </tr>
            <tr>
              <td>Tanggal Terbit</td>
              <td> : </td>
              <td><?php echo $row['terbit'];?></td>
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
    <a class="btn btn-info texthitam" href="print-out.php?module=registrasi-izin-mendirikan-bangunan&registrasi=<?php echo base64_encode($registrasi); ?>"><b>Cetak Registrasi</b> </a>
    <a class="btn btn-success texthitam" href="print-out.php?module=penerbitan-izin-mendirikan-bangunan&registrasi=<?php echo base64_encode($registrasi); ?>"><b>Cetak Perizinan</b> </a> 
    <a class="btn btn-warning texthitam" href="media.php?module=izin-mendirikan-bangunan&id=1" ><b>Kembali</b> </a>
</div>