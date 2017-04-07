
<body >
      <h3 class="text-center "><img src="../application/gambar/kabupaten.png" width="8%" height="8%">Tanda Bukti Pengajuan Dispensasi Nikah</h3>
      <br>
      <br>
      <div class="container-fluid">       
              <div class="table-responsive">
              <p></p>
               <h4>Keterangan Pemohon</h4>
                <table class="table">
                
                <?php
                    $registrasi = base64_decode($_GET['registrasi']);
                    foreach ($db->tampil_dispensasi($registrasi) as $row) 
                    {
                ?>

                    <tr>
                        <td width="280" style="vertical-align: top;">No Registrasi</td>
                        <td style="vertical-align: top;"> :  </td>
                        <td><?php echo $row['registrasi'];?></td>
                      </tr>
                      <tr>
                        <td style="vertical-align: top;">Tanggal Pendaftaran Dispensasi Nikah</td>
                        <td style="vertical-align: top;"> : </td>
                        <td><?php echo tgl_indo ($row['pendaftaran']); ?></td>
                      </tr>
                      <tr>
                        <td style="vertical-align: top;">No KTP / NIK</td>
                        <td style="vertical-align: top;"> : </td>
                        <td><?php echo $row['noktp'];?></td>
                      </tr>
                      <tr>
                        <td style="vertical-align: top;">Nama Pemohon</td>
                        <td style="vertical-align: top;"> : </td>
                        <td><?php echo $row['namapemohon'];?></td>
                      </tr>
                      <tr>
                        <td style="vertical-align: top;">Alamat Pemohon</td>
                        <td style="vertical-align: top;"> : </td>
                        <td><?php echo $row['alamatpemohon'];?></td>
                      </tr>
                      <tr>
                        <td style="vertical-align: top;">No HP / Telepon Pemohon</td>
                        <td style="vertical-align: top;"> : </td>
                        <td><?php echo $row['nohp'];?></td>
                      </tr>
                    </table>
                    <h4>Data Mempelai Wanita</h4>
                    <Table>
                        <tr>
                        <td style="vertical-align: top;">Nama Mempelai Wanita</td>
                        <td style="vertical-align: top;"> : </td>
                        <td><?php echo $row['namawanita'];?></td>
                      </tr>
                      <tr>
                        <td style="vertical-align: top;">Tempat, Tanggal Lahir Mempelai Wanita &nbsp;&nbsp;&nbsp;&nbsp;.</td>
                        <td style="vertical-align: top;"> : &nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td><?php echo $row['tempatwanita'];?>, <?php echo tgl_indo ($row['tanggalwanita']); ?> </td>
                      </tr>
                      <tr>
                        <td style="vertical-align: top;">Usia Mempelai Wanita</td>
                        <td style="vertical-align: top;"> : </td>
                        <td><?php echo $row['usiawanita'];?></td>
                      </tr>
                      <tr>
                        <td style="vertical-align: top;">Pekerjaan Wanita</td>
                        <td style="vertical-align: top;"> : </td>
                        <td><?php echo $row['pekerjaanwanita'];?></td>
                      </tr>          
                      <tr>
                        <td style="vertical-align: top;">Status Mempelai Wanita</td>
                        <td> : </td>
                        <td><?php echo $row['statuswanita'];?></td>
                      </tr>
                      <tr>
                        <td style="vertical-align: top;">Alamat Mempelai Wanita</td>
                        <td style="vertical-align: top;"> : </td>
                        <td><?php echo $row['alamatwanita'];?></td>
                      </tr>
                </Table>
                <br>
                <h4>Data Mempelai Pria</h4>
                <table>  
                      <tr>
                        <td style="vertical-align: top;">Nama Mempelai Pria</td>
                        <td style="vertical-align: top;"> : </td>
                        <td><?php echo $row['namapria'];?></td>
                      </tr>
                      <tr>
                        <td style="vertical-align: top;">Tempat, Tanggal Lahir Mempelai Pria &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td style="vertical-align: top;"> : &nbsp;&nbsp;&nbsp;&nbsp; </td>
                        <td><?php echo $row['tempatpria'];?>, <?php echo tgl_indo ($row['tanggalpria']); ?> </td>
                      </tr>
                      <tr>
                        <td style="vertical-align: top;">Usia Mempelai Pria</td>
                        <td style="vertical-align: top;"> : </td>
                        <td><?php echo $row['usiapria'];?></td>
                      </tr>
                      <tr>
                        <td style="vertical-align: top;">Pekerjaan Pria</td>
                        <td style="vertical-align: top;"> : </td>
                        <td><?php echo $row['pekerjaanpria'];?></td>
                      </tr>          
                      <tr>
                        <td style="vertical-align: top;">Status Mempelai Pria</td>
                        <td style="vertical-align: top;"> : </td>
                        <td><?php echo $row['statuspria'];?></td>
                      </tr>
                      <tr>
                        <td style="vertical-align: top;">Alamat Mempelai Pria</td>
                        <td style="vertical-align: top;"> : </td>
                        <td><?php echo $row['alamatpria'];?></td>
                      </tr>
                    </table>
                    <br>
                    <h4>Keterangan Akad</h4>
                    <table>
                      <tr>
                        <td style="vertical-align: top;">Tanggal Akad Nikah</td>
                        <td style="vertical-align: top;"> : </td>
                        <td><?php echo tgl_indo ($row['tanggalakad']); ?></td>
                      </tr>
                      <tr>
                        <td width="280" style="vertical-align: top;">Tempat Akad Nikah</td>
                        <td style="vertical-align: top;"> : &nbsp;&nbsp;</td>
                        <td><?php echo $row['tempatakad'];?></td>
                      </tr>
                      <tr>
                        <td>Alasan</td>
                        <td style="vertical-align: top;"> : </td>
                        <td><?php echo $row['alasan'];?></td>
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
            </div>
      </div>