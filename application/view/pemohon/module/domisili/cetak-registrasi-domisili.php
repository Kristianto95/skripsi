
      <h3 class="text-center "><img src="../gambar/kabupaten.png" width="8%" height="8%">Tanda Bukti Pengajuan Domisili</h3>
      <br>
      <br>
      <div class="container-fluid">       
            <div class="table-responsive">
                <table class="table">
                  <?php
                      $registrasi = base64_decode($_GET['registrasi']);
                      foreach ($db->tampil_domisili($registrasi) as $row) 
                      {
                  ?>
                     <tr>
                      <td style="vertical-align: top;">No Registrasi</td>
                      <td style="vertical-align: top;"> : </td>
                      <td><?php echo $row['registrasi'];?></td>
                    </tr>      
                    <tr>
                      <td style="vertical-align: top;"> Tanggal Pendaftaran</td>
                      <td style="vertical-align: top;"> : </td>
                      <td><?php echo tgl_indo ($row['pendaftaran']); ?></td>
                    </tr>
                    <tr>
                      <td style="vertical-align: top;">No KTP / NIK</td>
                      <td style="vertical-align: top;"> : </td>
                      <td><?php echo $row['noktp'];?></td>
                    </tr>
                    <tr>
                      <td style="vertical-align: top;">Nama Anda</td>
                      <td style="vertical-align: top;"> : </td>
                      <td><?php echo $row['nama'];?></td>
                    </tr>
                    <tr>
                      <td style="vertical-align: top;">Tempat / Tanggal Lahir</td>
                      <td style="vertical-align: top;"> : </td>
                      <td><?php echo $row['tempat'];?> / <?php echo tgl_indo ($row['tanggal']); ?></td>
                    </tr>
                    <tr>
                      <td style="vertical-align: top;">Jenis Kelamin</td>
                      <td style="vertical-align: top;"> : </td>
                      <td><?php echo $row['jekel'];?></td>
                    </tr>
                    <tr>
                      <td style="vertical-align: top;">Alamat Anda</td>
                      <td style="vertical-align: top;"> : </td>
                      <td><?php echo $row['alamat'];?>, Desa <?php echo $row['desa'];?>, Kecamatan <?php echo $row['kecamatan'];?>, Kabupaten <?php echo $row['kabupaten'];?>, <?php echo $row['provinsi'];?></td>
                    </tr>
                    <tr>
                      <td style="vertical-align: top;">Agama</td>
                      <td style="vertical-align: top;"> : </td>
                      <td><?php echo $row['agama'];?></td>
                    </tr>
                    <tr>
                      <td style="vertical-align: top;">Pekerjaan</td>
                      <td style="vertical-align: top;"> : </td>
                      <td><?php echo $row['pekerjaan'];?></td>
                    </tr>
                    <tr>
                      <td style="vertical-align: top;"> Status Pernikahan</td>
                      <td style="vertical-align: top;"> : </td>
                      <td><?php echo $row['status'];?></td>
                    </tr>
                    <tr>
                      <td style="vertical-align: top;">Kewarganegaraan</td>
                      <td style="vertical-align: top;"> : </td>
                      <td><?php echo $row['kewarganegaraan'];?></td>
                    </tr>
                    <tr>
                      <td style="vertical-align: top;">No Hp / Telepon</td>
                      <td style="vertical-align: top;"> : </td>
                      <td><?php echo $row['nohp'];?></td>
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
