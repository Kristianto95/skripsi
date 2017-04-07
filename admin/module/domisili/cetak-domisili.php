    <?php
       $registrasi = base64_decode($_GET['registrasi']);
       foreach ($db->tampil_domisili($registrasi) as $row) 
       {
    ?>
<body>
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
Surat Keterangan
NOMOR : <?php echo $row['no_domisili']; ?>
</pre>    
<pre style=" background-color: none; border:none;">Yang bertanda tangan dibawah ini menerangkan bahwa penduduk :</pre>
<table>
            <tr>
                <td width="200" style="vertical-align: top;">Nama </td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['nama']; ?></td>
                <td width="20"></td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top;">NIK</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><b><?php echo $row['noktp']; ?></b></td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top;">Tempat / Tanggal Lahir</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['tempat']; ?>, <?php echo tgl_indo ($row['tanggal']); ?></td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top;">Jenis Kelamin</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['jekel']; ?></td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top;">Alamat</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['alamat']; ?></td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top; padding-left: 20px;">RT / RW</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['rt']; ?> / <?php echo $row['rw']; ?></td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top; padding-left: 20px;">Kelurahan / Desa</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['desa']; ?></td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top; padding-left: 20px;">Kecamatan</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['kecamatan']; ?></td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top; padding-left: 20px;">Kabupaten</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['kabupaten']; ?></td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top; padding-left: 20px;">Provinsi</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['provinsi']; ?></td>
            </tr>
             <tr>
                <td width="200" style="vertical-align: top;">Agama</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['agama']; ?></td>
            </tr>
             <tr>
                <td width="200" style="vertical-align: top;">Status Perkawinan</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['status']; ?></td>
            </tr>
             <tr>
                <td width="200" style="vertical-align: top;">Pekerjaan</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['pekerjaan']; ?></td>
            </tr>
             <tr>
                <td width="200" style="vertical-align: top;">Kewarganegaraan</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['kewarganegaraan']; ?></td>
            </tr>
            <tr>
                <td width="20" style="vertical-align: top;">Luas Bangunan</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['luasbangunan']; ?> m<sup>2</sup></td>
            </tr>
    </table>
<pre style=" background-color: none; border:none;">
Telah melaksanakan perekaman Kartu Tanda Penduduk Elektronik (KTP-el).
Berdasarkan Surat Edaran Menteri Dalam Negeri Nomor 471.13/5184/SJ Tanggal 13-12-2012 dan Surat Keterangan ini sebagai pengganti KTP.
    Demikian surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya


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
