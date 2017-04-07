<div class="container" style="padding-top:70px;">
<h3 class="text-center">IZIN USAHA MIKRO DAN KECIL</h3>
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
              <td>pendaftaran Ke</td>
              <td> : </td>
              <td><?php echo $row['daftar_ke'];?></td>
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
              <td>Rp. <?php echo format_rupiah ($row['modal']);?>,-</td>
            </tr>
            <tr>
              <td>NPWP</td>
              <td> : </td>
              <td><?php echo $row['npwp'];?></td>
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
    <a class="btn btn-info texthitam" href="view/?module=cetak-registrasi-izin-usaha-mikro-dan-kecil-saya&registrasi=<?php echo base64_encode($registrasi); ?>"><b>Cetak Registrasi</b> </a>
</div>
</div>