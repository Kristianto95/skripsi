    <?php
        $registrasi = base64_decode($_GET['registrasi']);
        foreach ($db->tampil_ho($registrasi) as $row) 
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
IJIN GANGGUAN
 NOMOR   : <?php echo $row['no_ho'];?>   
  Perihal : <?php echo $row['perihal'];?>    
</pre>              
<pre style=" background-color: none; border:none;" >
    Dengan ini,
    sebagai bukti ijin gangguan dari Bupati Pekalongan lewat Camat Bojong Kabupaten Pekalongan untuk mendapatkan Izin Gangguan (HO) sebagaimana diatur dalam Peraturan Daerah Nomor 3 Tahun 2014 tentang Izin Gangguan. 
    Ijin Gangguan ini diberikan kepada:
</pre>
 <table>
            <tr>
                <td width="20"></td>
                <td width="30"></td>
                <td width="200" style="vertical-align: top;">Nama </td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['nama']; ?></td>
            </tr>
            <tr>
                <td width="20"></td>
                <td width="30"></td>
                <td width="200" style="vertical-align: top;">Alamat</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['alamat']; ?></td>
            </tr>
            <tr>
                <td width="20"></td>
                <td width="30"></td>
                <td width="200" style="vertical-align: top;">Pekerjaan</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['pekerjaan']; ?></td>
            </tr>
            <tr>
                <td style="color: white;">s</td>
            </tr>
            <tr>
                <td width="20"></td>
                <td width="30"></td>
                <td width="200" style="vertical-align: top;">Nama Usaha</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['namausaha']; ?></td>
            </tr>
            <tr>
                <td width="20"></td>
                <td width="30"></td>
                <td width="200" style="vertical-align: top;">Jenis Usaha</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['jenisusaha']; ?></td>
            </tr>
            <tr>
                <td width="20"></td>
                <td width="30"></td>
                <td width="200" style="vertical-align: top;">Alamat Usaha</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['alamatusaha']; ?></td>
            </tr>
            <tr>
                <td style="color: white;">s</td>
            </tr>
            <tr>
                <td width="20"></td>
                <td width="30"></td>
                <td width="200" style="vertical-align: top;">Luas Tempat Usaha</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['luas']; ?> m<sup>2</sup> </td>
            </tr>
            <tr>
                <td width="20"></td>
                <td width="30"></td>
                <td width="200" style="vertical-align: top;">Besar Modal Usaha</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td> Rp. <?php echo format_rupiah ($row['modal']); ?>,-</td>
            </tr>
            <tr>
                <td width="20"></td>
                <td width="30"></td>
                <td width="200" style="vertical-align: top;">Jumlah Tenaga Kerja</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td> <?php echo $row['karyawan']; ?> Orang</td>
            </tr>
    </table>
<pre style=" background-color: none; border:none;">

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
