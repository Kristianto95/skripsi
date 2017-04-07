  <h3 class="text-center "><img src="../application/gambar/kabupaten.png" width="8%" height="8%"> Bukti Pengajuan SIUP</h3>
     <!-- Indicators -->
<br>
<br>
<div class="container-fluid">
 
  <div class="table-responsive">
  <table >
    <?php
        $registrasi = base64_decode($_GET['registrasi']);
        foreach ($db->tampil_iumk($registrasi) as $row) 
        {
    ?>
             <tr>
                <td style="vertical-align: top;">No Registrasi</td>
                <td style="vertical-align: top;  padding-left:20px;">:</td>
                <td style="padding-left:20px;"><?php echo $row['registrasi'];?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Tanggal Pendaftaran</td>
                <td style="vertical-align: top;  padding-left:20px;">:</td>
                <td style="padding-left:20px;"> <?php echo tgl_indo ($row['pendaftaran']); ?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">No KTP</td>
                <td style="vertical-align: top;  padding-left:20px;">:</td>
                <td style="padding-left:20px;"><?php echo $row['noktp']; ?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Nama Lengkap</td>
                <td style="vertical-align: top;  padding-left:20px;">:</td>
                <td style="padding-left:20px;"><?php echo $row['namapemohon']; ?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Alamat Lengkap</td>
                <td style="vertical-align: top;  padding-left:20px;">:</td>
                <td style="padding-left:20px;"><?php echo $row['alamatpemohon'];?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">No Hp / Telepon</td>
                <td style="vertical-align: top;  padding-left:20px;">:</td>
                <td style="padding-left:20px;"><?php echo $row['nohp'];?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Jenis Usaha</td>
                <td style="vertical-align: top;  padding-left:20px;">:</td>
                <td style="padding-left:20px;"><?php echo $row['jenisusaha']; ?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Bentuk Usaha</td>
                <td style="vertical-align: top;  padding-left:20px;">:</td>
                <td style="padding-left:20px;"><?php echo $row['bentukusaha']; ?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Sarana Usaha</td>
                <td style="vertical-align: top;  padding-left:20px;">:</td>
                <td style="padding-left:20px;"><?php echo $row['saranausaha']; ?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Alamat usaha</td>
                <td style="vertical-align: top;  padding-left:20px;">:</td>
                <td style="padding-left:20px;"><?php echo $row['alamatusaha']; ?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">No Telepon Usaha</td>
                <td style="vertical-align: top;  padding-left:20px;">:</td>
                <td style="padding-left:20px;"><?php echo $row['notelp']; ?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Modal Usaha</td>
                <td style="vertical-align: top; padding-left:20px;">:</td>
                <td style="padding-left:20px;">Rp. <?php echo format_rupiah ($row['modal']); ?>,-</td>
            </tr>
            <tr>
                <td style="vertical-align: top;">NPWP</td>
                <td style="vertical-align: top; padding-left:20px;">:</td>
                <td style="padding-left:20px;"><?php echo $row['npwp']; ?></td>
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