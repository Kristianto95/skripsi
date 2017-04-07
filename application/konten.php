<?php
if ($_GET['module']=='home'){
  include ('view/umum/home.php');
}
//Perijinan Ijing Gangguan
elseif ($_GET['module']=='izin-gangguan'){
  include ('view/umum/perizinan/ho.php');
}
elseif ($_GET['module']=='izin-mendirikan-bangunan'){
  include ('view/umum/perizinan/imb.php');
}
elseif ($_GET['module']=='izin-usaha-mikro-dan-kecil'){
  include ('view/umum/perizinan/iumk.php');
}
elseif ($_GET['module']=='surat-izin-usaha-perdagangan'){
  include ('view/umum/perizinan/siup.php');
}
elseif ($_GET['module']=='tanda-daftar-industri'){
  include ('view/umum/perizinan/tdi.php');
}
elseif ($_GET['module']=='tanda-daftar-perusahaan'){
  include ('view/umum/perizinan/tdp.php');
}
elseif ($_GET['module']=='dispensasi-nikah'){
  include ('view/umum/nperizinan/dispensasi.php');
}
elseif ($_GET['module']=='domisili'){
  include ('view/umum/nperizinan/domisili.php');
}
elseif ($_GET['module']=='rekomendasi-ktp'){
  include ('view/umum/nperizinan/rekomendasi-ktp.php');
}
elseif ($_GET['module']=='rekomendasi-kk'){
  include ('view/umum/nperizinan/rekomendasi-kk.php');
}
elseif ($_GET['module']=='rekomendasi-skck'){
  include ('view/umum/nperizinan/rekomendasi-skck.php');
}
elseif ($_GET['module']=='surat-keterangan-pindah'){
  include ('view/umum/nperizinan/surat-keterangan-pindah.php');
}
elseif ($_GET['module']=='surat-keterangan-tanah-dan-ahli-waris'){
  include ('view/umum/nperizinan/surat-keterangan-tanah-dan-ahli-waris.php');
}
elseif ($_GET['module']=='pengajuan-proposal'){
  include ('view/umum/nperizinan/pengajuan-proposal.php');
}
elseif ($_GET['module']=='penanganan-pengaduan') {
  include('view/umum/nperizinan/penanganan-pengaduan.php');
}
elseif ($_GET['module']=='rekomendasi-sktm') {
  include('view/umum/nperizinan/permohonan-sktm.php');
}
elseif ($_GET['module']=='legalisasi-surat-surat') {
  include('view/umum/nperizinan/legalisasi-surat-surat.php');
}
elseif ($_GET['module']=='cek-status') {
  include ('view/umum/lain/cek-status.php');
}
elseif ($_GET['module']=='regulasi') {
  include ('view/umum/lain/regulasi.php');
}
elseif ($_GET['module']=='daftar-akun') {
  include ('view/umum/lain/daftar.php');
}
elseif ($_GET['module']=='faq') {
  include ('view/umum/lain/faq.php');
}
elseif ($_GET['module']=='izin-gangguan-saya') {
  include ('view/pemohon/module/ho/lihat-ho.php');
}
elseif ($_GET['module']=='izin-mendirikan-bangunan-saya') {
  include ('view/pemohon/module/imb/lihat-imb.php');
}
elseif ($_GET['module']=='izin-usaha-mikro-dan-kecil-saya') {
  include ('view/pemohon/module/iumk/lihat-iumk.php');
}
elseif ($_GET['module']=='surat-izin-usaha-perdagangan-saya') {
  include ('view/pemohon/module/siup/lihat-siup.php');
}
elseif ($_GET['module']=='tanda-daftar-industri-saya') {
  include ('view/pemohon/module/tdi/lihat-tdi.php');
}
elseif ($_GET['module']=='tanda-daftar-perusahaan-saya') {
  include ('view/pemohon/module/tdp/lihat-tdp.php');
}
elseif ($_GET['module']=='dispensasi-nikah-saya') {
  include ('view/pemohon/module/dispensasi/lihat-dispensasi.php');
}
elseif ($_GET['module']=='domisili-saya') {
  include ('view/pemohon/module/domisili/lihat-domisili.php');
}
elseif ($_GET['module']=='pengajuan-izin-gangguan') {
  include ('view/pemohon/module/ho/tambah-ho.php');
}
elseif ($_GET['module']=='pengajuan-izin-mendirikan-bangunan') {
  include ('view/pemohon/module/imb/tambah-imb.php');
}
elseif ($_GET['module']=='pengajuan-izin-usaha-mikro-dan-kecil') {
  include ('view/pemohon/module/iumk/tambah-iumk.php');
}
elseif ($_GET['module']=='pengajuan-surat-izin-usaha-perdagangan') {
  include ('view/pemohon/module/siup/tambah-siup.php');
}
elseif ($_GET['module']=='pengajuan-tanda-daftar-industri') {
  include ('view/pemohon/module/tdi/tambah-tdi.php');
}
elseif ($_GET['module']=='pengajuan-tanda-daftar-perusahaan') {
  include ('view/pemohon/module/tdp/form-tdp/tambah-tdp.php');
}
elseif ($_GET['module']=='pengajuan-dispensasi-nikah') {
  include ('view/pemohon/module/dispensasi/tambah-dispensasi.php');
}
elseif ($_GET['module']=='pengajuan-domisili') {
  include ('view/pemohon/module/domisili/tambah-domisili.php');
}
elseif ($_GET['module']=='detail-izin-gangguan-saya') {
  include ('view/pemohon/module/ho/tampil-ho.php');
}
elseif ($_GET['module']=='detail-izin-mendirikan-bangunan-saya') {
  include ('view/pemohon/module/imb/tampil-imb.php');
}
elseif ($_GET['module']=='detail-izin-usaha-mikro-dan-kecil-saya') {
  include ('view/pemohon/module/iumk/tampil-iumk.php');
}
elseif ($_GET['module']=='detail-surat-izin-usaha-perdagangan-saya') {
  include ('view/pemohon/module/siup/tampil-siup.php');
}
elseif ($_GET['module']=='detail-tanda-daftar-industri-saya') {
  include ('view/pemohon/module/tdi/tampil-tdi.php');
}
elseif ($_GET['module']=='detail-tanda-daftar-perusahaan-saya') {
  include ('view/pemohon/module/tdp/tampil-tdp.php');
}
elseif ($_GET['module']=='detail-dispensasi-nikah-saya') {
  include ('view/pemohon/module/dispensasi/tampil-dispensasi.php');
}
elseif ($_GET['module']=='detail-domisili-saya') {
  include ('view/pemohon/module/domisili/tampil-domisili.php');
}
elseif ($_GET['module']=='cetak-registrasi-izin-gangguan-saya') {
  include ('view/pemohon/module/ho/cetak-registrasi-ho.php');
}
elseif ($_GET['module']=='cetak-registrasi-izin-mendirikan-bangunan-saya') {
  include ('view/pemohon/module/imb/cetak-registrasi-imb.php');
}
elseif ($_GET['module']=='cetak-registrasi-izin-usaha-mikro-dan-kecil-saya') {
  include ('view/pemohon/module/iumk/cetak-registrasi-iumk.php');
}
elseif ($_GET['module']=='cetak-registrasi-surat-izin-usaha-perdagangan-saya') {
  include ('view/pemohon/module/siup/cetak-registrasi-siup.php');
}
elseif ($_GET['module']=='cetak-registrasi-tanda-daftar-industri-saya') {
  include ('view/pemohon/module/tdi/cetak-registrasi-tdi.php');
}
elseif ($_GET['module']=='cetak-registrasi-tanda-daftar-perusahaan-saya') {
  include ('view/pemohon/module/tdp/cetak-registrasi-tdp.php');
}
elseif ($_GET['module']=='cetak-registrasi-dispensasi-nikah-saya') {
  include ('view/pemohon/module/dispensasi/cetak-registrasi-dispensasi.php');
}
elseif ($_GET['module']=='cetak-registrasi-domisili-saya') {
  include ('view/pemohon/module/domisili/cetak-registrasi-domisili.php');
}
elseif ($_GET['module']=='login') {
  include ('view/pemohon/module/lain/login.php');
}
elseif ($_GET['module']=='selamat-datang') {
  include ('view/pemohon/module/lain/welcome.php');
}
else{
  echo '404 Error <br> ';
}
?>