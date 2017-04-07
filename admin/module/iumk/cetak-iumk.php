    <?php
        $registrasi = base64_decode($_GET['registrasi']);
        foreach ($db->tampil_iumk($registrasi) as $row) 
        {
    ?>

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
SURAT IZIN USAHA MICRO DAN KECIL
NOMOR : <?php echo $row['no_iumk']; ?>

</pre> 
<pre style=" background-color: none; border:none;" align="Justify">Berdasarkan Peraturan Presiden Nomor 98 Tahun 2014 tentang Perizinan Untuk Usaha Mikro dan Kecil ( Lembar Negara Republik Indonesia Tahun 2014 Nomor 222); Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 83 Tahun 2014 tentang pedoman Pemberian Izin Usaha Mikro dan Kecil, bersama ini menyatakan dan memberikan izin kepada :</pre>
<table class="fonttable">    

            <tr >
                <td class="over" width="200" style="vertical-align: top; padding-left: 10px;">NAMA </td>
                <td  width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['namapemohon']; ?></td>
            </tr>
            <tr >
                <td width="200" style="vertical-align: top; padding-left: 10px;">NO KTP</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td style="vertical-align: top;"><?php echo $row['noktp']; ?></td>
                <td></td>
            </tr> 
            <tr >
                <td width="200" style="vertical-align: top; padding-left: 10px;">ALAMAT</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td style="vertical-align: top;"><?php echo $row['alamatpemohon']; ?></td>
                <td></td>
            </tr>    
</table>
<pre style=" background-color: none; border:none;" align="Justify">
    Untuk Mendirikan Usaha Mikro Dan Kecil yang mencakup perizinan dasar berupa : Menempati Lokasi / Domisili, melakukan kegiatan usaha baik produksi maupun penjualan barang / jasa, dengan identitas; 
</pre>
<table class="fonttable">  
            <tr >
                <td class="tanpafonttable" width="200" style="vertical-align: top; padding-left: 10px;">NAMA PERUSAHAAN</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td  width="500" style="vertical-align: top;"><?php echo $row['namausaha']; ?></td>
                <td></td>
            </tr>       
            <tr >
                <td width="200" style="vertical-align: top; padding-left: 10px;">BENTUK PERUSAHAAN </td>
                <td width="20" style="vertical-align: top;">:</td>
                <td style="vertical-align: top;"><?php echo $row['bentukusaha']; ?></td>
                <td></td>
            </tr>   
            <tr >
                <td width="200" style="vertical-align: top; padding-left: 10px;">NPWP</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td style="vertical-align: top;"><?php echo $row['npwp']; ?></td>
                <td></td>
            </tr>          
            <tr >
                <td width="200" style="vertical-align: top; padding-left: 10px;">KEGIATAN USAHA </td>
                <td width="20" style="vertical-align: top;">:</td>
                <td style="vertical-align: top;"><?php echo $row['jenisusaha']; ?></td>
                <td></td>
            </tr>    
            <tr >
                <td width="200" style="vertical-align: top; padding-left: 10px;">SARANA USAHA</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td style="vertical-align: top;"><?php echo $row['saranausaha']; ?></td>
                <td></td>
            </tr>          
            <tr >
                <td width="200" style="vertical-align: top; padding-left: 10px;">ALAMAT USAHA</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td style="vertical-align: top;"><?php echo $row['alamatusaha']; ?></td>
                <td></td>
            </tr>  

            <tr >
                <td width="200" style="vertical-align: top; padding-left: 10px;">NOMOR TELEPON</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td width="100" style="vertical-align: top;"><?php echo $row['notelp']; ?></td>&nbsp;
                <td></td>
            </tr>          
            <tr >
                <td width="200" style="vertical-align: top; padding-left: 10px;">MODAL USAHA</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td style="vertical-align: top;">Rp. <?php echo format_rupiah ($row['modal']); ?>,-</td>
                <td></td>
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
