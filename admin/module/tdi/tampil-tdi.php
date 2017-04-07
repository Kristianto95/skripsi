<h3 class="text-center">TANDA DAFTAR INDUSTRI</h3>
<br>
<br>
<div class="container-fluid"> 
    <div class="table-responsive container-fluid">
          <table class="table table-striped  ">
            <?php
              $registrasi = base64_decode($_GET['registrasi']);
              foreach ($db->tampil_tdi($registrasi) as $row) 
              {      
            ?>
             <tbody>
              <tr>
                <td>No Registrasi</td>
                <td> : </td>
                <td><?php echo $row['registrasi'];?></td>
              </tr>
              <tr>
                <td>No KTP</td>
                <td> : </td>
                <td><?php echo $row['noktp'];?></td>
              </tr>
              <tr>
                <td>Nama Lengkap</td>
                <td> : </td>
                <td><?php echo $row['nama'];?></td>
              </tr>
              <tr>
                <td>Alamat Lengkap</td>
                <td> : </td>
                <td><?php echo $row['alamat'];?></td>
              </tr>
              <tr>
                <td>No Telepon / Hp </td>
                <td> : </td>
                <td><?php echo $row['nohp'];?></td>
              </tr>
              <tr>
                <td>Nama Perusahaan </td>
                <td> : </td>
                <td><?php echo $row['namaperusahaan'];?></td>
              </tr>
              <tr>
                <td>Alamat Perusahaan</td>
                <td> : </td>
                <td><?php echo $row['lokasi'];?></td>
              </tr>
              <tr>
                <td>No Telepon Perusahaan </td>
                <td> : </td>
                <td><?php echo $row['notelp'];?></td>
              </tr>
              <tr>
                <td>No Faximile</td>
                <td> : </td>
                <td><?php echo $row['nofax'];?></td>
              </tr>
              <tr>
                <td>NPWP </td>
                <td> : </td>
                <td><?php echo $row['npwp'];?></td>
              </tr>
              <tr>
                <td>Lokasi Pabrik</td>
                <td> : </td>
                <td><?php echo $row['lokasi'];?> Desa <?php echo $row['desa'];?>, Kecamatan <?php echo $row['kecamatan'];?>, </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>Kabupaten <?php echo $row['kabupaten'];?>, <?php echo $row['provinsi'];?></td>
              </tr>
              <tr>
                <td>Kepemilikan</td>
                <td> : </td>
                <td><?php echo $row['kepemilikan'];?></td>
              </tr>
              <tr>
                <td>Luas Bangunan</td>
                <td> : </td>
                <td><?php echo $row['luasbangunan'];?> /</td>
              </tr>
              <tr>
                <td>luas Tanah</td>
                <td> : </td>
                <td><?php echo $row['luastanah'];?></td>
              </tr>
              <tr>
                <td>Mesin / Peralatan Utama</td>
                <td> : </td>
                <td><?php echo $row['mesinutama'];?></td>
              </tr>
              <tr>
                <td>Mesin / Peralatan Pembantu</td>
                <td> : </td>
                <td><?php echo $row['mesinpembantu'];?></td>
              </tr>
              <tr>
                <td>Tenaga Penggerak</td>
                <td> : </td>
                <td><?php echo $row['tenaga'];?></td>
              </tr>
              <tr>
                <td>KBLI</td>
                <td> : </td>
                <td><?php echo $row['kbli'];?></td>
              </tr>
              <tr>
                <td>Komoditi</td>
                <td> : </td>
                <td><?php echo $row['komoditi'];?></td>
              </tr>
              <tr>
                <td>Kapasitas Produksi Per Tahun</td>
                <td> : </td>
                <td><?php echo $row['kapasitas'];?></td>
              </tr>
              <tr>
                <td>Kebutuhan Bahan Baku</td>
                <td> : </td>
                <td><?php echo $row['kebutuhan'];?></td>
              </tr>
              <tr>
                <td>Jumlah Tenaga Kerja</td>
                <td> : </td>
                <td><?php echo $row['jumlah'];?> Orang</td>
              </tr>
              <tr>
                <td>Jumlah Tenaga Kerja Laki-Laki</td>
                <td> : </td>
                <td><?php echo $row['laki'];?>  Orang</td>
              </tr>
              <tr>
                <td>Jumlah Tenaga Kerja Wanita</td>
                <td> : </td>
                <td><?php echo $row['wanita'];?> Orang</td>
              </tr>
              <tr>
                <td>Nilai Investati Perusahaan</td>
                <td> : </td>
                <td><?php echo $row['nilai'];?></td>
              </tr>
              <tr>
                <td>Merk Dagang</td>
                <td> : </td>
                <td><?php echo $row['merk'];?></td>
              </tr>
              <tr>
                <td>No Merk / Lisensi</td>
                <td> : </td>
                <td><?php echo $row['nomerk'];?></td>
              </tr>
              <tr>
                <td>Pendaftaran pada Tanggal</td>
                <td> : </td>
                <td><?php echo $row['pendaftaran'];?></td>
              </tr>
            </tbody>
             <?php
              }
             ?>
          </table>
    </div>
</div>
<br>
<br>
<div class="form-footer" align="center">
      <a class="btn btn-info texthitam" href="print-out.php?module=registrasi-tanda-daftar-industri&registrasi=<?php echo base64_encode($registrasi); ?>"><b>Cetak Registrasi</b> </a>
      <a class="btn btn-success texthitam" href="print-out.php?module=penerbitan-tanda-daftar-industri&registrasi=<?php echo base64_encode($registrasi); ?>"><b>Cetak Perizinan</b> </a> 
      <a class="btn btn-warning texthitam" href="media.php?module=tanda-daftar-industri&id=1" ><b>Kembali</b> </a>
</div>