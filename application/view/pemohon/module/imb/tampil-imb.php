<div class="container" style="padding-top:70px;">
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
              <td>Pendaftaran Ke</td>
              <td> : </td>
              <td><?php echo $row['daftar_ke'];?></td>
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
              <td><?php  echo tgl_indo ($row['pendaftaran']);?></td>
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
    <a class="btn btn-info texthitam" href="view/?module=cetak-registrasi-izin-mendirikan-bangunan-saya&registrasi=<?php echo base64_encode($registrasi); ?>"><b>Cetak Registrasi</b> </a>
</div>
</div>