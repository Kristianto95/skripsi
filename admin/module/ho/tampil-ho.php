<h3 class="text-center">IZIN GANGGUAN</h3>
<br>
<br>
<div class="container-fluid">
  <div class="table-responsive container-fluid">
      <table class="table table-striped  ">
        <?php
           $registrasi =base64_decode( $_GET['registrasi']);
          foreach ($db->tampil_ho($registrasi) as $row){
        ?>
         <tbody>
          <tr>
            <td>No Registrasi</td>
            <td> : </td>
            <td><?php echo $row['registrasi'];?></td>
          </tr>
          <tr>
            <td> Perihal </td>
            <td> : </td>
            <td><?php echo $row['perihal'];?></td>
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
            <td>Pekerjaan</td>
            <td> : </td>
            <td><?php echo $row['pekerjaan'];?></td>
          </tr>
          <tr>
          <tr>
            <td>No Telepon / Hp</td>
            <td> : </td>
            <td><?php echo $row['nohp'];?></td>
          </tr>
          <tr>
            <td>Nama Usaha </td>
            <td> : </td>
            <td><?php echo $row['namausaha'];?></td>
          </tr>
          <tr>
            <td>Jenis Usaha</td>
            <td> : </td>
            <td><?php echo $row['jenisusaha'];?></td>
          </tr>
          <tr>
            <td>Alamat Usaha</td>
            <td> : </td>
            <td><?php echo $row['alamatusaha'];?></td>
          </tr>
          <tr>
            <td>Luas Tanah Usaha</td>
            <td> : </td>
            <td><?php echo $row['luas'];?></td>
          </tr>
          <tr>
            <td>Besar Modal Usaha</td>
            <td> : </td>
            <td><?php echo $row['modal'];?></td>
          </tr>
          <tr>
            <td>Jumlah Karyawan</td>
            <td> : </td>
            <td><?php echo $row['karyawan'];?></td>
          </tr>
          <tr>
            <td>Tanggal Pendaftaran</td>
            <td> : </td>
            <td><?php echo $row['pendaftaran'];?></td>
          </tr>
          <tr>
            <td>No Izin Gangguan</td>
            <td> : </td>
            <td><?php echo $row['no_ho'];?></td>
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
   <a class="btn btn-info texthitam" href="print-out.php?module=registrasi-izin-gangguan&registrasi=<?php echo base64_encode($registrasi);?>"><b>Cetak Registrasi</b> </a>
   <a class="btn btn-success texthitam" href="print-out.php?module=penerbitan-izin-gangguan&registrasi=<?php echo base64_encode($registrasi);?>"><b>Cetak Perijinan</b> </a> 
   <a class="btn btn-warning texthitam" href="media.php?module=izin-gangguan&id=1" ><b>Kembali</b> </a>
</div>