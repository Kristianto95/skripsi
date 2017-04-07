    <?php
        $registrasi = base64_decode($_GET['registrasi']);
        foreach ($db->tampil_tdi($registrasi) as $row) 
        {
    ?>
<table align="center">
    <tr rowspan="2"> 
        <td rowspan="4">
            <img src="../gambar/kabupaten.png" width="10%" height="10%">
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
TANDA DAFTAR INDUSTRI
NOMOR : <?php echo $row['no_tdi']; ?>
</pre> 

<table class="fonttable2">     
             <tr >
                <td style="padding-left: 25px;" colspan ="4">A. &nbsp; KETERANGAN PEMOHON / PEMOHON</td>
            </tr>
            <tr >
                <td style="padding-left: 48px;">1.</td>
                <td width="200" style="vertical-align: top; padding-left: 10px;">a. Nama Peerusahaan</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['namaperusahaan']; ?></td>
            </tr>
            <tr >
                <td style="padding-left: 48px;"></td>
                <td width="200" style="vertical-align: top; padding-left: 10px;">b. Alamat Perusahaan</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['alamatperusahaan']; ?></td>
            </tr>            
            <tr >
                <td style="padding-left: 48px;"></td>
                <td width="200" style="vertical-align: top; padding-left: 10px;">c. No Telepon Perusahaan</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['notelp']; ?></td>
            </tr>
            <tr >
                <td style="padding-left: 48px;">2</td>
                <td width="350" style="vertical-align: top; padding-left: 10px;">Nomor Pokok Wajib Pajak</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['npwp']; ?></td>
            </tr>
            <tr >
                <td style="padding-left: 48px;">3</td>
                <td width="350" style="vertical-align: top; padding-left: 10px;">Nomor Induk Pendaftaran Industri Kecil (NIPIK)</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['nipik']; ?></td>
            </tr>
            <tr >
                <td style="padding-left: 48px;">4</td>
                <td width="200" style="vertical-align: top; padding-left: 10px;">a. Nama Pemilik</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['nama']; ?></td>
            </tr>
            <tr >
                <td style="padding-left: 48px;"></td>
                <td width="200" style="vertical-align: top; padding-left: 10px;">b. Alamat Pemilik </td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['alamat']; ?></td>
            </tr>
            <tr >
                <td style="padding-left: 48px;">5</td>
                <td width="200" style="vertical-align: top; padding-left: 10px;">Jenis Industri (KBLI)</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['kbli']; ?></td>
            </tr>
            <tr >
                <td style="padding-left: 48px;">6</td>
                <td width="200" style="vertical-align: top; padding-left: 10px;">Komoditi Industri</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['komoditi']; ?></td>
            </tr>
            <tr >
                <td style="padding-left: 48px;">7</td>
                <td width="200" style="vertical-align: top; padding-left: 10px;">Lokasi Pabrik</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['lokasi']; ?></td>
            </tr>
            <tr >
                <td style="padding-left: 48px;"></td>
                <td width="200" style="vertical-align: top; padding-left: 10px;">a. Desa</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['desa']; ?></td>
            </tr>
            <tr >
                <td style="padding-left: 48px;"></td>
                <td width="200" style="vertical-align: top; padding-left: 10px;">b. Kecamatan</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['kecamatan']; ?></td>
            </tr>
            <tr >
                <td style="padding-left: 48px;"></td>
                <td width="200" style="vertical-align: top; padding-left: 10px;">c. Kabupaten</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['kabupaten']; ?></td>
            </tr>
            <tr >
                <td style="padding-left: 48px;"></td>
                <td width="200" style="vertical-align: top; padding-left: 10px;">d. Provinsi</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['provinsi']; ?></td>
            </tr>
             <tr >
                <td style="padding-left: 48px;">8</td>
                <td width="200" style="vertical-align: top; padding-left: 10px;">Mesin Dan Peralatan Produksi</td>
                <td width="20" style="vertical-align: top;"></td>
                <td></td>
            </tr>
            <tr >
                <td style="padding-left: 48px;"></td>
                <td width="200" style="vertical-align: top; padding-left: 10px;">a. Mesin / Peralatan Utama</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['mesinutama']; ?></td>
            </tr>
            <tr >
                <td style="padding-left: 48px;"></td>
                <td width="200" style="vertical-align: top; padding-left: 10px;">b. Mesin / Peralatan Pembantu</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['mesinpembantu']; ?></td>
            </tr>
            <tr >
                <td style="padding-left: 48px;"></td>
                <td width="200" style="vertical-align: top; padding-left: 10px;">c. Tenaga Penggerak</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['tenaga']; ?></td>
            </tr>
            <tr >
                <td style="padding-left: 48px;">9</td>
                <td width="200" style="vertical-align: top; padding-left: 10px;">Nilai Investasi tidak termasuk tanah dan bangunan</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td>Rp. <?php echo format_rupiah ($row['nilai']); ?>,-</td>
            </tr>
            <tr >
                <td style="padding-left: 48px;">10</td>
                <td width="200" style="vertical-align: top; padding-left: 10px;">Kapasitas Produksi Terpasang Per Tahun</td>
                <td width="20" style="vertical-align: top;">:</td>
                <td><?php echo $row['kapasitas']; ?> potong</td>
            </tr>  
            <tr >
                <td style="color:white;">2.</td>
            </tr> 
            <tr >
                <td style="padding-left: 25px;" colspan ="4">B. &nbsp; KETERANGAN LAIN </td>
            </tr>  
            <tr >
                <td style="padding-left: 48px;" colspan ="4">1. &nbsp; Rusak sesuai dengan bukti Tanda Daftar Industri telah dimiliki.</td>
            </tr>    
            <tr >
                <td style="padding-left: 48px;" colspan ="4">2. &nbsp; Hilang berdasarkan keterangan dari Kepolisian Nomor : -</td>
            </tr>          
    </table>
<pre style=" background-color: none; border:none; font-size: 12px;">
        Pemegang Tanda Daftar Industri ini agar menyampaikan informasi industri
    dengan mengisi Formulir Model Pdf.III-IK pada setiap tahun paling lambat tanggal 
    31 Januari tahun berikutnya.
        Tanda Daftar Industri ini berlaku sebagai Izin Usaha Industri.

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