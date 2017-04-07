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
                <td>No KTP / NIK</td>
                <td> : </td>
                <td><?php echo $row['noktp'];?></td>
              </tr>
              <tr>
                <td>Nama Anda</td>
                <td> : </td>
                <td><?php echo $row['nama'];?></td>
              </tr>
              <tr>
                <td>Tempat / Tanggal Lahir</td>
                <td> : </td>
                <td><?php echo $row['tempat'];?> / <?php echo $row['tanggal'];?> </td>
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
                <td><?php echo $row['pendaftaran'];?></td>
              </tr>
              <tr>
                <td>No Domisili</td>
                <td> : </td>
                <td><?php echo $row['no_domisili'];?></td>
              </tr>
              <tr>
                <td>Tanggal Penerbitan Ijin</td>
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
    <a class="btn btn-info" href="print-out.php?module=registrasi-domisili&registrasi=<?php echo base64_encode($registrasi); ?>"><b>Cetak Registrasi</b> </a>
    <a class="btn btn-success" href="print-out.php?module=penerbitan-domisili&registrasi=<?php echo base64_encode($registrasi); ?>"><b>Cetak Perizinan</b> </a> 
    <a class="btn btn-warning" href="media.php?module=domisili&id=1" ><b>Kembali</b> </a>
</div>