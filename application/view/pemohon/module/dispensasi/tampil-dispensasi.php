<div class="container" style="padding-top:70px;">
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
              <td>Nama Mempelai Wanita</td>
              <td> : </td>
              <td><?php echo $row['namawanita'];?></td>
            </tr>
            <tr>
              <td>Tempat, Tanggal Lahir Mempelai Wanita</td>
              <td> : </td>
              <td><?php echo $row['tempatwanita'];?>, <?php echo tgl_indo ($row['tanggalwanita']);?> </td>
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
              <td><?php echo $row['tempatpria'];?>, <?php echo tgl_indo ($row['tanggalpria']);?> </td>
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
              <td><?php echo tgl_indo ($row['tanggalakad']);?></td>
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
              <td><?php echo tgl_indo ($row  ['pendaftaran']);?></td>
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
    <a class="btn btn-info texthitam" href="view/?module=cetak-registrasi-dispensasi-nikah-saya&registrasi=<?php echo base64_encode($registrasi); ?>"><b>Cetak Registrasi</b> </a>
</div>
</div>