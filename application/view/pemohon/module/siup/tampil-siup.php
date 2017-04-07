<div class="container" style="padding-top:70px;">
<h3 class="text-center">SURAT IZIN USAHA PERDAGANGAN</h3>
<br>
<br>
<div class="container-fluid">
    <div class="table-responsive container-fluid">
        <table class="table table-striped">
          <?php
            $registrasi = base64_decode($_GET['registrasi']);
            foreach ($db->tampil_siup($registrasi) as $row) 
            {
          ?>
           <tbody>
            <tr>
              <td>No Registrasi</td>
              <td> : </td>
              <td><?php echo $row['registrasi'];?></td>
            </tr>   
            <tr>
              <td>Pengajuan Untuk</td>
              <td> : </td>
              <td><?php echo $row['pengajuan'];?></td>
            </tr>  
            <tr>
              <td>Pendaftaran Ke</td>
              <td> : </td>
              <td><?php echo $row['daftar_ke'];?></td>
            </tr>                  
            <tr>
              <td>Nama Perusahaan</td>
              <td> : </td>
              <td><?php echo $row['namaperusahaan'];?></td>
            </tr>
            <tr>
              <td>Jenis Perusahaan</td>
              <td> : </td>
              <td><?php echo $row['jenis'];?></td>
            </tr>
            <tr>
              <td>Jabatan Pemilik</td>
              <td> : </td>
              <td><?php echo $row['jabatan'];?></td>
            </tr>
            <tr>
              <td>NPWP Perusahaan</td>
              <td> : </td>
              <td><?php echo $row['npwp'];?></td>
            </tr>            
            <tr>
              <td>Alamat Perusahaan</td>
              <td> : </td>
              <td><?php echo $row['alamatperusahaan'];?></td>
            </tr>
            <tr>
              <td>Provinsi</td>
              <td> : </td>
              <td><?php echo $row['provinsi'];?></td>
            </tr>
            <tr>
              <td>Kabupaten / Kota</td>
              <td> : </td>
              <td><?php echo $row['kota'];?></td>
            </tr>
            <tr>
              <td>Kecamatan</td>
              <td> : </td>
              <td><?php echo $row['kecamatan'];?></td>
            </tr>
            <tr>
              <td>Kelurahan / Desa</td>
              <td> : </td>
              <td><?php echo $row['desa'];?></td>
            </tr>
            <tr>
              <td>No Telpon Perusahaan </td>
              <td> : </td>
              <td><?php echo $row['notelp'];?></td>
            </tr>
            <tr>
              <td>No Faximile Perusahaan</td>
              <td> : </td>
              <td><?php echo $row['nofax'];?></td>
            </tr>
            <tr>
              <td>Kodepos </td>
              <td> : </td>
              <td><?php echo $row['pos'];?></td>
            </tr>
            <tr>
              <td>Status Penanaman Modal</td>
              <td> : </td>
              <td><?php echo $row['penanamanmodal'];?></td>
            </tr>
            <tr>
              <td>Nomor Akta Pendirian</td>
              <td> : </td>
              <td><?php echo $row['nopendirian'];?></td>
            </tr>
            <tr>
              <td>Tanggal Akta Pendrian</td>
              <td> : </td>
              <td><?php echo tgl_indo ($row['tglpendirian']);?></td>
            </tr>
            <tr>
              <td>Nomor Akta Perubahan</td>
              <td> : </td>
              <td><?php echo $row['noperubahan'];?></td>
            </tr>
            <tr>
              <td>Tanggal Akta Perubahan</td>
              <td> : </td>
              <td><?php echo tgl_indo ($row['tglperubahan']);?></td>
            </tr>
            <tr>
              <td>Modal Dan Kekayaan Perusahaan </td>
              <td> : </td>
              <td>Rp. <?php echo format_rupiah($row['modal']);?>,-</td>
            </tr>
            <tr>
              <td>Total Nilai Saham </td>
              <td> : </td>
              <td>Rp. <?php echo format_rupiah($row['saham']);?>,-</td>
            </tr>
            <tr>
              <td>Komposisi Kepemilikan Saham Nasional</td>
              <td> : </td>
              <td> <?php echo $row['sahamnasional'];?> %</td>
            </tr>
            <tr>
              <td>Komposisi Kepemilikan Saham Asing</td>
              <td> : </td>
              <td> <?php echo $row['sahamasing'];?> %</td>
            </tr>
            <tr>
              <td>Cara Pemasaran</td>
              <td> : </td>
              <td><?php echo $row['carapemasaran'];?></td>
            </tr>
            <tr>
              <td>KBLI</td>
              <td> : </td>
              <td><?php echo $row['kbli'];?></td>
            </tr>
            <tr>
              <td>Barang / Jasa Dagang Utama Perusahaan</td>
              <td> : </td>
              <td><?php echo $row['barjas'];?></td>
            </tr>
            <tr>
              <td>Tanggal Pendaftaran</td>
              <td> : </td>
              <td><?php echo tgl_indo ($row['pendaftaran']);?></td>
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
    <a class="btn btn-info texthitam" href="view/?module=cetak-registrasi-surat-izin-usaha-perdagangan-saya&registrasi=<?php echo base64_encode($registrasi); ?>"><b>Cetak Registrasi</b> </a>
</div>
</div>