<h3 class="text-center">DISPENSAI NIKAH</h3>
<br>
<br>
<div class="container-fluid">
    <div class="table-responsive container-fluid">
        <table class="table table-striped  ">
          <?php
            $registrasi = base64_decode($_GET['registrasi']);
            foreach ($db->tampil_dispensasi($registrasi) as $row) 
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
              <td>Dispensasi dari Desa :</td>
              <td> : </td>
              <td><?php echo $row['kades'];?></td>
            </tr>
            <tr>
              <td>Tanggal Keluar Dispensasi dari Desa :</td>
              <td> : </td>
              <td><?php echo $row['tgldes'];?></td>
            </tr>
            <tr>
              <td>No Dispensasi Dari Desa:</td>
              <td> : </td>
              <td><?php echo $row['nodes'];?></td>
            </tr>
            <tr>
              <td>Nama Mempelai Wanita</td>
              <td> : </td>
              <td><?php echo $row['namawanita'];?></td>
            </tr>
            <tr>
              <td>Tempat, Tanggal Lahir Mempelai Wanita</td>
              <td> : </td>
              <td><?php echo $row['tempatwanita'];?>, <?php echo $row['tanggalwanita'];?> </td>
            </tr>
            <tr>
              <td>Usia Mempelai Wanita</td>
              <td> : </td>
              <td><?php echo $row['usiawanita'];?></td>
            </tr>
            <tr>
              <td>Pekerjaan Wanita</td>
              <td> : </td>
              <td><?php echo $row['pekerjaanwanita'];?></td>
            </tr>          
            <tr>
              <td>Status Mempelai Wanita</td>
              <td> : </td>
              <td><?php echo $row['statuswanita'];?></td>
            </tr>
            <tr>
              <td>Alamat Mempelai Wanita</td>
              <td> : </td>
              <td><?php echo $row['alamatwanita'];?></td>
            </tr>
            <tr>
              <td>Nama Mempelai Pria</td>
              <td> : </td>
              <td><?php echo $row['namapria'];?></td>
            </tr>
            <tr>
              <td>Tempat, Tanggal Lahir Mempelai Pria</td>
              <td> : </td>
              <td><?php echo $row['tempatpria'];?>, <?php echo $row['tanggalpria'];?> </td>
            </tr>
            <tr>
              <td>Usia Mempelai Pria</td>
              <td> : </td>
              <td><?php echo $row['usiapria'];?></td>
            </tr>
            <tr>
              <td>Pekerjaan Pria</td>
              <td> : </td>
              <td><?php echo $row['pekerjaanpria'];?></td>
            </tr>          
            <tr>
              <td>Status Mempelai Pria</td>
              <td> : </td>
              <td><?php echo $row['statuspria'];?></td>
            </tr>
            <tr>
              <td>Alamat Mempelai Pria</td>
              <td> : </td>
              <td><?php echo $row['alamatpria'];?></td>
            </tr>
            <tr>
              <td>Tanggal Akad Nikah</td>
              <td> : </td>
              <td><?php echo $row['tanggalakad'];?></td>
            </tr>
            <tr>
              <td>Tempat Akad Nikah</td>
              <td> : </td>
              <td><?php echo $row['tempatakad'];?></td>
            </tr>
            <tr>
              <td>Alasan</td>
              <td> : </td>
              <td><?php echo $row['alasan'];?></td>
            </tr>
            <tr>
              <td>Tanggal Pendaftaran</td>
              <td> : </td>
              <td><?php echo $row['pendaftaran'];?></td>
            </tr>
            <tr>
              <td>No Dispensasi</td>
              <td> : </td>
              <td><?php echo $row['no_dispensasi'];?></td>
            </tr>
            <tr>
              <td>Tanggal Penerbitan IJin</td>
              <td> : </td>
              <td><?php echo $row['terbit'];?></td>
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
    <a class="btn btn-info" href="print-out.php?module=registrasi-dispensasi&registrasi=<?php echo base64_encode($registrasi); ?>"><b>Cetak Registrasi</b> </a>
    <a class="btn btn-success" href="print-out.php?module=penerbitan-dispensasi&registrasi=<?php echo base64_encode($registrasi); ?>"><b>Cetak Perizinan</b> </a> 
    <a class="btn btn-warning" href="media.php?module=dispensasi&id=1" ><b>Kembali</b> </a>
</div>