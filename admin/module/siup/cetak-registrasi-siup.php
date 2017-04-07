  <h3 class="text-center "><img src="../application/gambar/kabupaten.png" width="8%" height="8%"> Bukti Pengajuan SIUP</h3>
     <!-- Indicators -->
<br>
<br>
<div class="container-fluid">
 
  <div class="table-responsive">
  <table>
    <?php
        $registrasi = base64_decode($_GET['registrasi']);
        foreach ($db->tampil_siup($registrasi) as $row) 
        {
    ?>
            <tr>
                <td  style="vertical-align: top;">No Registrasi</td>
                <td style="vertical-align: top; padding-left:20px;">:</td>
                <td style="vertical-align: top; padding-left:20px;"><?php echo $row['registrasi'];?></td>
            </tr>            
            <tr>
                <td  style="vertical-align: top;"> Tanggal Pendaftaran</td>
                <td style="vertical-align: top; padding-left:20px;">:</td>
                <td style="vertical-align: top; padding-left:20px;"><?php echo tgl_indo ($row['pendaftaran']); ?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">No KTP</td>
                <td style="vertical-align: top; padding-left:20px;">:</td>
                <td style="vertical-align: top; padding-left:20px;"><?php echo $row['noktp']; ?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">Nama Lengkap</td>
                <td  style="vertical-align: top; padding-left:20px;">:</td>
                <td style="vertical-align: top; padding-left:20px;"><?php echo $row['namapemohon']; ?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">Alamat Lengkap</td>
                <td style="vertical-align: top; padding-left:20px;">:</td>
                <td style="vertical-align: top; padding-left:20px;"><?php echo $row['alamatpemohon'];?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">No Hp / Telepon</td>
                <td  style="vertical-align: top; padding-left:20px;">:</td>
                <td style="vertical-align: top; padding-left:20px;"><?php echo $row['nohp'];?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">Nama Perusahaan</td>
                <td style="vertical-align: top; padding-left:20px;">:</td>
                <td style="vertical-align: top; padding-left:20px;"><?php echo $row['namaperusahaan']; ?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">Alamat Perusahaan</td>
                <td  style="vertical-align: top; padding-left:20px;">:</td>
                <td style="vertical-align: top; padding-left:20px;"><?php echo $row['alamatperusahaan']; ?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">Jabatan</td>
                <td  style="vertical-align: top; padding-left:20px;">:</td>
                <td style="vertical-align: top; padding-left:20px;"><?php echo $row['jabatan']; ?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">No Telepon Perusahaan</td>
                <td  style="vertical-align: top; padding-left:20px;">:</td>
                <td  style="vertical-align: top;"><?php echo $row['notelp']; ?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">No Faximile</td>
                <td  style="vertical-align: top; padding-left:20px;">:</td>
                <td style="vertical-align: top; padding-left:20px;"><?php echo $row['nofax']; ?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">Modal Dan Kekayaan Perusahaan</td>
                <td  style="vertical-align: top; padding-left:20px;">:</td>
                <td style="vertical-align: top; padding-left:20px;">Rp. <?php echo format_rupiah ($row['modal']); ?>,-</td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">Cara Pemasaran</td>
                <td  style="vertical-align: top; padding-left:20px;">:</td>
                <td style="vertical-align: top; padding-left:20px;"><?php echo $row['carapemasaran']; ?></td>
            </tr>
            <tr>
                <td  style="vertical-align: top;">Barang / Jasa Dagang Perusahaan</td>
                <td  style="vertical-align: top; padding-left:20px;">:</td>
                <td style="vertical-align: top; padding-left:20px;"><?php echo $row['barjas']; ?></td>
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
    <li> Bukti Pendaftaran ini sebagai bukti untuk pengambilan Perijinan di Rumah PATEN Kecamatan Bojong(Bisa dicetak ataupun tunjukan dari smartphone)</li>
    <li>Petugas akan memproses permohonan ijin pada hari dan jam kerja</li>
    <li>Untuk melihat sejauh mana permohonan sudah di proses silahkan cek pada menu Cek Status atau pada <a>http://rumahpaten.kecbojongkabpekalongan.com/cek-status</a> </li>
    
  </ul>
</div>
<hr>
<hr>
</div>
</div>