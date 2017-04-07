  <h3 class="text-center "><img src="../application/gambar/kabupaten.png" width="8%" height="8%">Tanda Bukti Pengajuan TDI</h3>
     <!-- Indicators -->
<br>
<br>
<div class="container-fluid">
 
  <div class="table-responsive">
  <table>
    <?php
        $registrasi = base64_decode($_GET['registrasi']);
        foreach ($db->tampil_tdi($registrasi) as $row) 
        {
    ?>
    <tr>
        <td style="vertical-align: top;">No Registrasi</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['registrasi'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Pendaftaran pada Tanggal</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo tgl_indo ($row['pendaftaran']); ?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">No KTP / NIK</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['noktp'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Nama Anda</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['nama'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Alamat Anda</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['alamat'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">No HP / Telepon Anda</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['nohp'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Nama Perusahaan </td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['namaperusahaan'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Alamat Perusahaan</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['lokasi'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">No Telepon Perusahaan </td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['notelp'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">No Faximile</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['nofax'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">NPWP </td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['npwp'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">NIPIK</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['nipik'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Lokasi Pabrik</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['lokasi'];?> Desa <?php echo $row['desa'];?>, Kecamatan <?php echo $row['kecamatan'];?>, </td>
      </tr>
      <tr>
        <td ></td>
        <td></td>
        <td>Kabupaten <?php echo $row['kabupaten'];?>, <?php echo $row['provinsi'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Kepemilikan</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['kepemilikan'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Luas Bangunan</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['luasbangunan'];?> m<sup>2</sup></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">luas Tanah</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['luastanah'];?> m<sup>2</sup></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Mesin / Peralatan Utama</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['mesinutama'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Mesin / Peralatan Pembantu</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['mesinpembantu'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Tenaga Penggerak</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['tenaga'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Jenis Industri</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['kbli'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Jenis Produk</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['komoditi'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Kapasitas Produksi Per Tahun</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['kapasitas'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Kebutuhan Bahan Baku</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['kebutuhan'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Jumlah Tenaga Kerja</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['jumlah'];?> Orang</td>
      </tr>
      <tr>
        <td style="vertical-align: top;"> Jumlah Tenaga Kerja Laki-Laki</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['laki'];?>  Orang</td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Jumlah Tenaga Kerja Wanita</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['wanita'];?> Orang</td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Nilai Investati Perusahaan</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo format_rupiah ($row['nilai']); ?>,-</td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Merk Dagang</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['merk'];?></td>
      </tr>
      <tr>
        <td style="vertical-align: top;">No Merk / Lisensi</td>
        <td style="vertical-align: top; padding-left:20px;"> : </td>
        <td style="vertical-align: top; padding-left:20px;"><?php echo $row['nomerk'];?></td>
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