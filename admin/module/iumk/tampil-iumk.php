<h3 class="text-center">IJIN USAHA MIKRO DAN KECIL</h3>
<br>
<div class="container-fluid">
    <div class="table-responsive container">
        <table class="table table-striped  ">
          <?php
            $registrasi = base64_decode($_GET['registrasi']);
            foreach ($db->tampil_iumk($registrasi) as $row) 
            {
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
              <td><?php echo $row['namapemohon'];?></td>
            </tr>
            <tr>
              <td>Alamat Lengkap</td>
              <td> : </td>
              <td><?php echo $row['alamatpemohon'];?></td>
            </tr>
            <tr>
              <td>No Telepon / Hp</td>
              <td> : </td>
              <td><?php echo $row['nohp'];?></td>
            </tr>
            <tr>
              <td>Nama Usaha</td>
              <td> : </td>
              <td><?php echo $row['namausaha'];?></td>
            </tr>
            <tr>
              <td>Jenis Usaha</td>
              <td> : </td>
              <td><?php echo $row['jenisusaha'];?></td>
            </tr>
            <tr>
              <td>Bentuk Usaha</td>
              <td> : </td>
              <td><?php echo $row['bentukusaha'];?></td>
            </tr>
            <tr>
              <td>Sarana Usaha</td>
              <td> : </td>
              <td><?php echo $row['saranausaha'];?></td>
            </tr>
            <tr>
              <td>Alamat Usaha</td>
              <td> : </td>
              <td><?php echo $row['alamatusaha'];?></td>
            </tr>
            <tr>
              <td>No Telepon Usaha</td>
              <td> : </td>
              <td><?php echo $row['notelp'];?></td>
            </tr>
            <tr>
              <td>Modal Usaha</td>
              <td> : </td>
              <td><?php echo $row['modal'];?></td>
            </tr>
            <tr>
              <td>NPWP</td>
              <td> : </td>
              <td><?php echo $row['npwp'];?></td>
            </tr>
            <tr>
              <td>Tanggal Pendaftaran</td>
              <td> : </td>
              <td><?php echo $row['pendaftaran'];?></td>
            </tr>
            <tr>
              <td>No_IUMK</td>
              <td> : </td>
              <td><?php echo $row['no_iumk'];?></td>
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
    <a class="btn btn-info texthitam" href="print-out.php?module=registrasi-izin-usaha-mikro-dan-kecil&registrasi=<?php echo base64_encode($registrasi); ?>"><b>Cetak Registrasi</b> </a>
    <a class="btn btn-success texthitam" href="print-out.php?module=penerbitan-izin-usaha-mikro-dan-kecil&registrasi=<?php echo base64_encode($registrasi); ?>"><b>Cetak Perizinan</b> </a> 
    <a class="btn btn-warning texthitam" href="media.php?module=izin-usaha-mikro-dan-kecil&id=1" ><b>Kembali</b> </a>
</div>