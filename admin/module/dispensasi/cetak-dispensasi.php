    <?php
        $registrasi = base64_decode($_GET['registrasi']);
        foreach ($db->tampil_dispensasi($registrasi) as $row) 
        {
    ?>
<table align="center">
    <tr rowspan="2"> 
        <td rowspan="4">
            <img src="../application/gambar/kabupaten.png" width="10%" height="10%">
        </td>
    </tr>
    <tr>
        <td class="text-center ">
            <p class="text-center p1">Pemerintah Kabupaten Pekalongan</p>
        </td>
    </tr>
    <tr>
        <td class="text-center" >
            <p class="text-center p2">Kecamatan Bojong</p>
        </td>
    </tr>
    <tr>
        <td class="text-center">
            <p class="text-center p3"> Telepon./Faksimile : (0285) 4483063, e-mail : bojong.kecamatan@yahoo.co.id</p>
        </td>
    </tr>
    </table>       

<hr class="garis">
 <pre style=" background-color: none; border:none;" align="center"  >
Surat Dispensasi
NOMOR : <?php echo $row['no_dispensasi']; ?>
</pre>
<pre style=" background-color: none; border:none;">
Dasar Peraturan Menteri Agama Republik Indonesia Nomor 8 Tahun 1975 pada pasal 22 Ayat 2 Bahwa untuk perkawinan kurang 10 ( sepuluh ) hari diperlukan adanya dispensasi dari Camat atas nama Bupati Kepala Daerah.
Yang bertanda tangan di bawah ini Camat Bojong atas Nama Bupati Pekalongan berdasarkan Surat Permohonan Dispensasi dari Kepala Desa <?php echo $row['kades']; ?> tanggal<?php echo tgl_indo ($row['tgldes']); ?>, Nomor : <?php echo $row['nodes']; ?> dengan ini memberikan Dispensasi Kepada : 
</pre>    
<pre style=" background-color: none; border:none;">Yang bertanda tangan dibawah ini menerangkan bahwa penduduk :</pre>
<table>
            <tr>
                <td>Calon Pengantin Wanita :</td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top; padding-left: 20px;">Nama </td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['namawanita']; ?></td>
                <td width="20"></td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top; padding-left: 20px;">Tempat / Tanggal Lahir</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['tempatwanita']; ?>, <?php echo tgl_indo ($row['tanggalwanita']); ?></td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top; padding-left: 20px;">Pekerjaan</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['pekerjaanwanita']; ?></td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top; padding-left: 20px;">Status</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['statuswanita']; ?></td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top; padding-left: 20px;">Alamat</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['alamatwanita']; ?></td>
            </tr>
            <tr>
                <td>Calon Mempelai Pria :</td>
            <tr>
                <td width="200" style="vertical-align: top; padding-left: 20px;">Nama </td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['namapria']; ?></td>
                <td width="20"></td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top; padding-left: 20px;">Tempat / Tanggal Lahir</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['tempatpria']; ?>, <?php echo tgl_indo ($row['tanggalpria']); ?></td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top; padding-left: 20px;">Pekerjaan</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['pekerjaanpria']; ?></td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top; padding-left: 20px;">Status</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['statuspria']; ?></td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top; padding-left: 20px;">Alamat</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['alamatpria']; ?></td>
            </tr>
    </table>

<pre style=" background-color: none; border:none;">
Untuk melaksanakan akad nikah besok pada tanggal : <?php echo tgl_indo ($row['tangalakad']); ?>. Bertempat di <?php echo $row['tempatakad'];?> Adapaun pelaksanaan perkawinan kurang dari 10 ( sepuluh ) hari dengan alasan :
<?php echo $row['alasan'];?> 
Demikian surat dispensasi ini dibuat dengan sebenarnya mengingat sumpah jabatan, kemudian untuk dapat dipergunakan seperlunya.


                                                        Ditetapkan di Bojong
                                                      pada tanggal <?php echo tgl_indo ($row['terbit']); ?>

                                                       a.n BUPATI PEKALONGAN
                                                           CAMAT BOJONG
                                                      



                                                       Drs.RUKMAN HIDAYAT AP
                                                              Pembina 
                                                       NIP 196901181989031007
    </pre>   
                <?php
                }
            ?>
