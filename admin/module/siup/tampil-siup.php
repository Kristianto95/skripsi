<h3 class="text-center">SURAT IZIN USAHA PERDAGANGAN</h3>
<br>
<br>
<div class="container-fluid">
    <div class="table-responsive container-fluid">
        <table class="table table-striped">
          <?php
            $registrasi = base64_decode($_GET['registrasi']);
            foreach ($db->tampil_siup($registrasi) as $row) 
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
              <td>No Telepon / Hp </td>
              <td> : </td>
              <td><?php echo $row['nohp'];?></td>
            </tr>
            <tr>
              <td>Nama Perusahaan</td>
              <td> : </td>
              <td><?php echo $row['namaperusahaan'];?></td>
            </tr>
            <tr>
              <td>Alamat Perusahaan</td>
              <td> : </td>
              <td><?php echo $row['alamatperusahaan'];?></td>
            </tr>
             <tr>
              <td>Jabatan</td>
              <td> : </td>
              <td><?php echo $row['jabatan'];?></td>
            </tr>
            <tr>
              <td>No Telpon Perusahaan </td>
              <td> : </td>
              <td><?php echo $row['notelp'];?></td>
            </tr>
            <tr>
              <td>No Faximile Perusahaan</td>
              <td> : </td>
              <td><?php echo $row['nofax'];?></td>
            </tr>
            <tr>
              <td>Modal Dan Kekayaan Perusahaan </td>
              <td> : </td>
              <td><?php echo $row['modal'];?></td>
            </tr>
            <tr>
              <td>Kelembagaan</td>
              <td> : </td>
              <td><?php echo $row['carapemasaran'];?></td>
            </tr>
            <tr>
              <td>KBLI</td>
              <td> : </td>
              <td><?php echo $row['kbli'];?></td>
            </tr>
            <tr>
              <td>Barang / Jasa Dagang Utama Perusahaan</td>
              <td> : </td>
              <td><?php echo $row['barjas'];?></td>
            </tr>
            <tr>
              <td>Tanggal Pendaftaran</td>
              <td> : </td>
              <td><?php echo $row['pendaftaran'];?></td>
            </tr>
            <tr>
              <td>No SIUP</td>
              <td> : </td>
              <td><?php echo $row['no_siup'];?></td>
            </tr>
            <tr>
              <td>Tanggal Terbit</td>
              <td> : </td>
              <td><?php echo $row['terbit'];?></td>
            </tr>
            <tr>
              <td>Masa Berlaku</td>
              <td> : </td>
              <td><?php echo $row['masber'];?></td>
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
    <a class="btn btn-info texthitam" href="print-out.php?module=registrasi-surat-izin-usaha-perdagangan&registrasi=<?php echo base64_encode($registrasi); ?>"><b>Cetak Registrasi</b> </a>
    <a class="btn btn-success texthitam" href="print-out.php?module=penerbitan-surat-izin-usaha-perdagangan&registrasi=<?php echo base64_encode($registrasi); ?>"><b>Cetak Perizinan</b> </a> 
    <a class="btn btn-warning texthitam" href="media.php?module=surat-izin-usaha-perdagangan&id=1" ><b>Kembali</b> </a>
</div>