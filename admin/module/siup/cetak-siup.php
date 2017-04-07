    <?php
        $registrasi = base64_decode($_GET['registrasi']);
        foreach ($db->tampil_siup($registrasi) as $row) 
        {
    ?>
<body>
<table align="center">
    <tr rowspan="2" > 
        <td rowspan="4" style="text-decoration: overline;">
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
            <p class="text-center p3"> Telepon. : (0285) 4483063 , e-mail : bojong.kecamatan@yahoo.co.id</p>
        </td>
    </tr>
    </table>
        


<hr class="garis">
 <pre style=" background-color: none; border:none;" align="center"  >
SURAT IJIN USAHA PERDAGANGAN
NOMOR : <?php echo $row['no_siup']; ?>

</pre> 
<table class="fonttable">    

            <tr >
                <td width="200" style="vertical-align: top;">NAMA PERUSAHAAN </td>
                <td  width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['namaperusahaan']; ?></td>
            </tr>
            <tr >
                <td width="200" style="vertical-align: top;">NAMA PENANGGUNG JAWAB DAN JABATAN</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td  width="400" style="vertical-align: top;"><?php echo $row['namapemohon']; ?> Sebagai <?php echo $row['jabatan']; ?></td>
                <td></td>
            </tr>    
            <tr >
                <td width="200" style="vertical-align: top;">ALAMAT PERUSAHAAN </td>
                <td width="20" style="vertical-align: top;">:</td>
                <td style="vertical-align: top;"><?php echo $row['alamatperusahaan']; ?></td>
                <td></td>
            </tr>        
            <tr >
                <td width="200" style="vertical-align: top;">NOMOR TELEPON</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td width="100" style="vertical-align: top;"><?php echo $row['notelp']; ?></td>&nbsp;
                <td style="vertical-align: top;">FAX</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td style="vertical-align: top;"><?php echo $row['nofax']; ?></td>
                <td></td>
            </tr>  
            <tr >
                <td class="tanpafonttable" width="200" style="vertical-align: top;">MODAL DAN KEKAYAAN PERUSAHAAN (TIDAK  TERMASUK TANAH DAN BANGUNAN)</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td style="vertical-align: top;">Rp. <?php echo format_rupiah ($row['modal']); ?>,-</td>
                <td></td>
            </tr>       
            <tr >
                <td width="200" style="vertical-align: top;">KELEMBAGAAN </td>
                <td width="20" style="vertical-align: top;">:</td>
                <td style="vertical-align: top;"><?php echo $row['carapemasaran']; ?></td>
                <td></td>
            </tr>   
            <tr >
                <td width="200" style="vertical-align: top;">KEGIATAN USAHA (KBLI) </td>
                <td width="20" style="vertical-align: top;">:</td>
                <td style="vertical-align: top;"><?php echo $row['kbli']; ?></td>
                <td></td>
            </tr>    
            <tr >
                <td width="200" style="vertical-align: top;">BARANG/JASA DAGANGAN UTAMA</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td style="vertical-align: top;"><?php echo $row['barjas']; ?></td>
                <td></td>
            </tr>          
    </table>
<pre style=" background-color: none; border:none;">
  IZIN INI BERLAKU UNTUK MELAKUKAN KEGIATAN USAHA PERDAGANGAN DI SELURUH WILAYAH REPUBLIK INDONESIA, SELAMA PERUSAHAAN MASIH MENJALANKAN USAHANYA, DAN PERUSAHAAN WAJIB MENDAFTAR ULANG SIUP PADA TANGGAL :   <?php echo tgl_indo ($row['masber']); ?>
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
