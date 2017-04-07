
        <h3 class="text-center "><img src="../gambar/kabupaten.png" width="8%" height="8%">Tanda Bukti Pengajuan IMB</h3>
        <br>
        <br>
        <div class="container-fluid">
              <div class="table-responsive">
              <p></p>
                  <table class="table">
                    <?php
                        $registrasi = base64_decode($_GET['registrasi']);
                        foreach ($db->tampil_imb($registrasi) as $row) 
                        {
                    ?>
                             <tr>
                                <td style="vertical-align: top;">No Registrasi</td>
                                <td style="vertical-align: top;">:</td>
                                <td><?php echo $row['registrasi'];?></td>
                            </tr>            
                            <tr>
                                <td style="vertical-align: top;">Tanggal Pendaftaran</td>
                                <td style="vertical-align: top;">:</td>
                                <td> <?php echo tgl_indo ($row['pendaftaran']); ?></td>
                            </tr>            
                            <tr>
                                <td style="vertical-align: top;">No KTP</td>
                                <td style="vertical-align: top;">:</td>
                                <td><?php echo $row['noktp']; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">Nama Lengkap</td>
                                <td style="vertical-align: top;">:</td>
                                <td><?php echo $row['nama']; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">Maksud Permohonan IMB</td>
                                <td style="vertical-align: top;">:</td>
                                <td><?php echo $row['maksud'];?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">Penggunaan Bangunan</td>
                                <td style="vertical-align: top;">:</td>
                                <td><?php echo $row['penggunaan']; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">Alamat Lokasi Bangunan</td>
                                <td style="vertical-align: top;">:</td>
                                <td><?php echo $row['lokasi']; ?></td>
                            </tr>
                             <tr>
                                <td style="vertical-align: top;">Luas Tanah</td>
                                <td style="vertical-align: top;">:</td>
                                <td><?php echo $row['luastanah']; ?> m<sup>2</sup></td>
                            </tr>
                             <tr>
                                <td style="vertical-align: top;">Luas Bangunan</td>
                                <td style="vertical-align: top;">:</td>
                                <td><?php echo $row['luasbangunan']; ?> m<sup>2</sup></td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">Status Tanah</td>
                                <td style="vertical-align: top;">:</td>
                                <td><?php echo $row['status']; ?></td>
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