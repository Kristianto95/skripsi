
  <h3 class="text-center "><img src="../gambar/kabupaten.png" width="8%" height="8%">Tanda Bukti Pengajuan SIUP</h3>
     <!-- Indicators -->
<br>
<br>
<div class="container-fluid">
 
  <div class="table-responsive">
  <table class="table">
    <?php
        $registrasi = base64_decode($_GET['registrasi']);
        foreach ($db->tampil_siup($registrasi) as $row) 
        {
    ?>
            <tr>
                <td  style="vertical-align: top;">No Registrasi</td>
                <td  style="vertical-align: top;">:</td>
                <td><?php echo $row['registrasi'];?></td>
            </tr>            
            <tr>
                <td  style="vertical-align: top;"> Tanggal Pendaftaran</td>
                <td  style="vertical-align: top;">:</td>
                <td><?php echo tgl_indo ($row['pendaftaran']); ?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">No KTP</td>
                <td  style="vertical-align: top;">:</td>
                <td><?php echo $row['noktp']; ?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">Nama Lengkap</td>
                <td  style="vertical-align: top;">:</td>
                <td><?php echo $row['namapemohon']; ?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">Alamat Lengkap </td>
                <td  style="vertical-align: top;">:</td>
                <td><?php echo $row['alamatpemohon'];?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">No Telepon / Hp</td>
                <td  style="vertical-align: top;">:</td>
                <td><?php echo $row['nohp'];?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">Nama Perusahaan</td>
                <td  style="vertical-align: top;">:</td>
                <td><?php echo $row['namaperusahaan']; ?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">Alamat Perusahaan</td>
                <td  style="vertical-align: top;">:</td>
                <td><?php echo $row['alamatperusahaan']; ?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">Jabatan Pemilik</td>
                <td  style="vertical-align: top;">:</td>
                <td><?php echo $row['jabatan']; ?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">No Telepon Perusahaan</td>
                <td  style="vertical-align: top;">:</td>
                <td  style="vertical-align: top;"><?php echo $row['notelp']; ?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">No Faximile</td>
                <td  style="vertical-align: top;">:</td>
                <td><?php echo $row['nofax']; ?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">Modal Dan Kekayaan Perusahaan</td>
                <td  style="vertical-align: top;">:</td>
                <td>Rp. <?php echo format_rupiah ($row['modal']); ?>,-</td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">Cara Pemasaran</td>
                <td  style="vertical-align: top;">:</td>
                <td><?php echo $row['carapemasaran']; ?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">Barang / Jasa Dagang Perusahaan</td>
                <td  style="vertical-align: top;">:</td>
                <td ><?php echo $row['barjas']; ?></td>
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