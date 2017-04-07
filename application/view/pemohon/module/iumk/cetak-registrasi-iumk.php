
  <h3 class="text-center "><img src="../gambar/kabupaten.png" width="8%" height="8%">Tanda Bukti Pengajuan SIUP</h3>
     <!-- Indicators -->
<br>
<br>
<div class="container-fluid">
 
  <div class="table-responsive">
  <table class="table">
    <?php
        $registrasi = base64_decode($_GET['registrasi']);
        foreach ($db->tampil_iumk($registrasi) as $row) 
        {
    ?>
             <tr>
                <td style="vertical-align: top;">No Registrasi</td>
                <td style="vertical-align: top;">:</td>
                <td><?php echo $row['registrasi'];?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Tanggal Pendaftaran</td>
                <td style="vertical-align: top;">:</td>
                <td> <?php echo tgl_indo ($row['pendaftaran']); ?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">No KTP</td>
                <td style="vertical-align: top;">:</td>
                <td><?php echo $row['noktp']; ?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Nama Lengkap Anda</td>
                <td style="vertical-align: top;">:</td>
                <td><?php echo $row['namapemohon']; ?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Alamat Lengkap Anda</td>
                <td style="vertical-align: top;">:</td>
                <td><?php echo $row['alamatpemohon'];?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">No Hp / Telepon Anda</td>
                <td style="vertical-align: top;">:</td>
                <td><?php echo $row['nohp'];?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Jenis Usaha</td>
                <td style="vertical-align: top;">:</td>
                <td><?php echo $row['jenisusaha']; ?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Bentuk Usaha</td>
                <td style="vertical-align: top;">:</td>
                <td><?php echo $row['bentukusaha']; ?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Sarana Usaha</td>
                <td style="vertical-align: top;">:</td>
                <td><?php echo $row['saranausaha']; ?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Alamat usaha</td>
                <td style="vertical-align: top;">:</td>
                <td><?php echo $row['alamatusaha']; ?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">No Telepon Usaha</td>
                <td style="vertical-align: top;">:</td>
                <td><?php echo $row['notelp']; ?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Modal Usaha</td>
                <td>:</td>
                <td>Rp. <?php echo format_rupiah ($row['modal']); ?>,-</td>
            </tr>
            <tr>
                <td style="vertical-align: top;">NPWP</td>
                <td style="vertical-align: top;">:</td>
                <td style="vertical-align: top;"><?php echo $row['npwp']; ?></td>
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