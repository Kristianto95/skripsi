<div class="container" style="padding-top:70px;">
<h3 class="text-center">DOMISILI</h3>
<br>
<div class="container-fluid"> 
    <div class="table-responsive container">
          <table class="table table-striped  ">
            <?php
              $registrasi = base64_decode($_GET['registrasi']);
              foreach ($db->tampil_domisili($registrasi) as $row) 
              {
            ?>
             <tbody>
              <tr>
                <td>No Registrasi</td>
                <td> : </td>
                <td><?php echo $row['registrasi'];?></td>
              </tr>
              <tr>
                <td>Nama Lengkap</td>
                <td> : </td>
                <td><?php echo $row['nama'];?></td>
              </tr>
              <tr>
                <td>Tempat / Tanggal Lahir</td>
                <td> : </td>
                <td><?php echo $row['tempat'];?> / <?php echo tgl_indo ($row['tanggal']);?> </td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td> : </td>
                <td><?php echo $row['jekel'];?></td>
              </tr>
              <tr>
                <td>Alamat Anda</td>
                <td> : </td>
                <td><?php echo $row['alamat'];?>, Desa <?php echo $row['desa'];?>, Kecamatan <?php echo $row['kecamatan'];?>, Kabupaten <?php echo $row['kabupaten'];?>, <?php echo $row['provinsi'];?></td>
              </tr>
              <tr>
                <td>Agama</td>
                <td> : </td>
                <td><?php echo $row['agama'];?></td>
              </tr>
              <tr>
                <td>Pekerjaan</td>
                <td> : </td>
                <td><?php echo $row['pekerjaan'];?></td>
              </tr>
              <tr>
                <td>Status Pernikahan</td>
                <td> : </td>
                <td><?php echo $row['status'];?></td>
              </tr>
              <tr>
                <td>Kewarganegaraan</td>
                <td> : </td>
                <td><?php echo $row['kewarganegaraan'];?></td>
              </tr>
              <tr>
                <td>No Hp / Telepon</td>
                <td> : </td>
                <td><?php echo $row['nohp'];?></td>
              </tr>
              <tr>
                <td>Tanggal Pendaftaran</td>
                <td> : </td>
                <td><?php echo tgl_indo ($row['pendaftaran']);?></td>
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
    <a class="btn btn-info texthitam" href="view/?module=cetak-registrasi-domisili-saya&registrasi=<?php echo base64_encode($registrasi); ?>"><b>Cetak Registrasi</b> </a>
</div>
</div>