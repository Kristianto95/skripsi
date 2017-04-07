    <?php
        $registrasi = base64_decode($_GET['registrasi']);
        foreach ($db->tampil_imb($registrasi) as $row) 
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
KUTIPAN
KEPUTUSAN BUPATI PEKALONGAN
NOMOR : <?php echo $row['no_imb']; ?>

TENTANG
IZIN MENDIRIKAN BANGUNAN
RUMAH TINGGAL ATAS NAMA <?php echo $row['nama']; ?>

BUPATI PEKALONGAN,
Membaca   : dst;
Menimbang : dst;
Mengingat : dst;
MEMUTUSKAN :
</pre>    <table class="fonttable2">
            <tr>
                <td width="20" style="vertical-align: top;">Menetapkan</td>
            </tr>
            <tr>
                <td width="20" style="vertical-align: top;">KESATU</td>
                <td width="30" style="vertical-align: top;">:</td>
                <td width="200">Memberikan Izin Kepada</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td width="20"></td>
                <td width="30"></td>
                <td width="200" style="vertical-align: top;">a. Nama</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['nama']; ?></td>
            </tr>
            <tr>
                <td width="20"></td>
                <td width="30"></td>
                <td width="200" style="vertical-align: top;">b. Alamat</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['alamat']; ?></td>
            </tr>
            <tr>
                <td width="20"></td>
                <td width="30"></td>
                <td width="200" style="vertical-align: top;">c. Maksud Pemohon</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['maksud']; ?></td>
            </tr>
            <tr>
                <td width="20"></td>
                <td width="30"></td>
                <td width="200" style="vertical-align: top;">d. Penggunaan Bangunan</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['penggunaan']; ?></td>
            </tr>
            <tr>
                <td width="20"></td>
                <td width="30"></td>
                <td width="200" style="vertical-align: top;">e. Lokasi Bangunan</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['lokasi']; ?></td>
            </tr>
            <tr>
                <td width="20"></td>
                <td width="30"></td>
                <td width="200" style="vertical-align: top;">f. Luas Tanah</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['luastanah']; ?> m<sup>2</sup></td>
            </tr>
            <tr>
                <td width="20"></td>
                <td width="30"></td>
                <td width="200" style="vertical-align: top;">g. Status Tanah</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['status']; ?></td>
            </tr>
            <tr>
                <td width="20"></td>
                <td width="30"></td>
                <td width="200" style="vertical-align: top;">h. Luas Bangunan</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['luasbangunan']; ?> m<sup>2</sup></td>
            </tr>
    </table>
<pre style=" background-color: none; border:none;">
KEDUA    :  Izin sebagaimana dimaksud dalam Diktum KESATU diberikan dengan ketentuan 
            sebagai berikut: 
            a.  Pembangunan harus berpedoman dan sesuai dengan ketentuan Peraturan 
                Daerah Kabupaten Pekalongan Nomor 1 Tahun 2013 tentang Bangunan 
                Gedung; dan
            b.  Teknis pembangunan tidak boleh menyimpang dari ketentuan dalam 
                dokumen teknis sebagaimana tertuang dalam lampiran yang merupakan 
                bagian tak terpisahkan dari Keputusan ini.
KETIGA   :  Keputusan ini mulai berlaku sejak tanggal ditetapkan. 

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

</body>
