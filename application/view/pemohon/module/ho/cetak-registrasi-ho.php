
    <h3 class="text-center "><img src="../gambar/kabupaten.png" width="8%" height="8%">Tanda Bukti Pengajuan Ijin Gangguan</h3>
     <!-- Indicators -->
    <br>
    <br>
  <div class="container-fluid">
      <div class="table-responsive">
          <table class="table">
            <?php
                $registrasi = base64_decode($_GET['registrasi']);
                foreach ($db->tampil_ho($registrasi) as $row) 
                {
            ?>
           <tr>
                <td style="vertical-align: top;">No Registrasi</td>
                <td style="vertical-align: top;"> : </td>
                <td><?php echo $row['registrasi'];?></td>
              </tr>
              <tr>
                <td style="vertical-align: top;">Tanggal Pendaftaran</td>
                <td style="vertical-align: top;"> : </td>
                <td><?php echo tgl_indo ($row['pendaftaran']); ?></td>
              </tr>      
              <tr>
                <td style="vertical-align: top;"> Perihal </td>
                <td style="vertical-align: top;"> : </td>
                <td><?php echo $row['perihal'];?></td>
              </tr>
              <tr>
                <td style="vertical-align: top;">No KTP </td>
                <td style="vertical-align: top;"> : </td>
                <td><?php echo $row['noktp'];?></td>
              </tr>
              <tr>
                <td style="vertical-align: top;">Nama Lengkap</td>
                <td style="vertical-align: top;"> : </td>
                <td><?php echo $row['nama'];?></td>
              </tr>
              
              <tr>
                <td style="vertical-align: top;">Nama Usaha </td>
                <td style="vertical-align: top;"> : </td>
                <td><?php echo $row['namausaha'];?></td>
              </tr>
              <tr>
                <td style="vertical-align: top;">Jenis Usaha</td>
                <td style="vertical-align: top;"> : </td>
                <td><?php echo $row['jenisusaha'];?></td>
              </tr>
              <tr>
                <td style="vertical-align: top;">Alamat Usaha</td>
                <td style="vertical-align: top;"> : </td>
                <td><?php echo $row['alamatusaha'];?></td>
              </tr>
              <tr>
                <td style="vertical-align: top;">Luas Tanah Usaha</td>
                <td style="vertical-align: top;"> : </td>
                <td><?php echo $row['luas'];?> m<sup>2</sup></td>
              </tr>
              <tr>
                <td style="vertical-align: top;">Besar Modal Usaha</td>
                <td style="vertical-align: top;"> : </td>
                <td>Rp. <?php echo tgl_indo ($row['modal']); ?>,-</td>
              </tr>
              <tr>
                <td style="vertical-align: top;">Jumlah Karyawan</td>
                <td style="vertical-align: top;"> : </td>
                <td><?php echo $row['karyawan'];?> orang</td>
              </tr>
         
                    <?php
                        }
                    ?>
        </table>
    <hr>
        <div>
        <h4>CATATAN PENTING:</h4>
            <ul>
            <li>Pastikan data yang dikirim sudah sesuai dan benar</li>
            <li>Tanda Bukti Pendaftaran ini sebagai bukti untuk pengambilan Perijinan di Rumah PATEN Kecamatan Bojong(Bisa dicetak ataupun tunjukan dari smartphone anda)</li>
            <li>Petugas akan memproses permohonan ijin anda pada hari dan jam kerja</li>
            <li>Untuk melihat sejauh mana permohonan anda sudah di proses silahkan cek pada menu Cek Status atau pada <a>http://rumahpaten.kecbojongkabpekalongan.com/cek-status</a> </li>
            
          </ul>
        </div>
        <hr>
        <hr>
    </div>
  </div>
</body>

