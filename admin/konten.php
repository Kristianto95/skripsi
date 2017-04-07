<?php
include "../application/model/config.php";
include "../application/model/model_admin.php";
// Bagian Home
if ($_GET['module']=='home'){
include "module/home.php";
}
// Bagian IMB
elseif ($_GET['module']=='izin-mendirikan-bangunan'){
  include "module/imb/lihat-imb.php";
}
elseif ($_GET['module']=='tambah-izin-mendirikan-bangunan'){
  include "module/imb/tambah-imb.php";
}
elseif ($_GET['module']=='edit-izin-mendirikan-bangunan'){
  include "module/imb/edit-imb.php";
}
 elseif ($_GET['module']=='preview-izin-mendirikan-bangunan') {
   include "module/imb/tampil-imb.php";
}
 elseif ($_GET['module']=='registrasi-izin-mendirikan-bangunan') {
   include "module/imb/cetak-registrasi-imb.php";
 }
 elseif ($_GET['module']=='penerbitan-izin-mendirikan-bangunan') {
   include "module/imb/cetak-imb.php";
 }
//bagian siup
elseif ($_GET['module']=='surat-izin-usaha-perdagangan'){
  include "module/siup/lihat-siup.php";
}
elseif ($_GET['module']=='tambah-surat-izin-usaha-perdagangan'){
  include "module/siup/tambah-siup.php";
}
elseif ($_GET['module']=='edit-surat-izin-usaha-perdagangan'){
  include "module/siup/edit-siup.php";
}
 elseif ($_GET['module']=='preview-surat-izin-usaha-perdagangan') {
   include "module/siup/tampil-siup.php";
}
 elseif ($_GET['module']=='registrasi-surat-izin-usaha-perdagangan') {
   include "module/siup/cetak-registrasi-siup.php";
 }
 elseif ($_GET['module']=='penerbitan-surat-izin-usaha-perdagangan') {
   include "module/siup/cetak-siup.php";
 }
// Bagian TDI
elseif ($_GET['module']=='tanda-daftar-industri'){
  include "module/tdi/lihat-tdi.php";
}
elseif ($_GET['module']=='tambah-tanda-daftar-industri'){
  include "module/tdi/tambah-tdi.php";
}
elseif ($_GET['module']=='edit-tanda-daftar-industri'){
  include "module/tdi/edit-tdi.php";
}
 elseif ($_GET['module']=='preview-tanda-daftar-industri') {
   include "module/tdi/tampil-tdi.php";
}
 elseif ($_GET['module']=='registrasi-tanda-daftar-industri') {
   include "module/tdi/cetak-registrasi-tdi.php";
 }
 elseif ($_GET['module']=='penerbitan-tanda-daftar-industri') {
   include "module/tdi/cetak-tdi.php";
 }
// Bagian IUMK
elseif ($_GET['module']=='izin-usaha-mikro-dan-kecil'){
   include "module/iumk/lihat-iumk.php";
  }
elseif ($_GET['module']=='tambah-izin-usaha-mikro-dan-kecil'){
   include "module/iumk/tambah-iumk.php";
  }
elseif ($_GET['module']=='edit-izin-usaha-mikro-dan-kecil'){
   include "module/iumk/edit-iumk.php";
  }
 elseif ($_GET['module']=='preview-izin-usaha-mikro-dan-kecil') {
   include "module/iumk/tampil-iumk.php";
}
 elseif ($_GET['module']=='registrasi-izin-usaha-mikro-dan-kecil') {
   include "module/iumk/cetak-registrasi-iumk.php";
 }
 elseif ($_GET['module']=='penerbitan-izin-usaha-mikro-dan-kecil') {
   include "module/iumk/cetak-iumk.php";
 }
// Bagian Domisili
elseif ($_GET['module']=='domisili'){
   include "module/domisili/lihat-domisili.php";
  }
elseif ($_GET['module']=='tambah-domisili'){
   include "module/domisili/tambah-domisili.php";
  }
elseif ($_GET['module']=='edit-domisili'){
   include "module/domisili/edit-domisili.php";
  }
 elseif ($_GET['module']=='preview-domisili') {
   include "module/domisili/tampil-domisili.php";
}
 elseif ($_GET['module']=='registrasi-domisili') {
   include "module/domisili/cetak-registrasi-domisili.php";
 }
 elseif ($_GET['module']=='penerbitan-domisili') {
   include "module/domisili/cetak-domisili.php";
 }
// Bagian HO
elseif ($_GET['module']=='izin-gangguan'){
   include "module/ho/lihat-ho.php";
 }
 elseif ($_GET['module']=='tambah-izin-gangguan') {
   include "module/ho/tambah-ho.php";
 }
 elseif ($_GET['module']=='edit-izin-gangguan') {
   include "module/ho/edit-ho.php";
 }
 elseif ($_GET['module']=='preview-izin-gangguan') {
   include "module/ho/tampil-ho.php";
 }
 elseif ($_GET['module']=='registrasi-izin-gangguan') {
   include "module/ho/cetak-registrasi-ho.php";
 }
 elseif ($_GET['module']=='penerbitan-izin-gangguan') {
   include "module/ho/cetak-ho.php";
 }
// Bagian Dispensasi
elseif ($_GET['module']=='dispensasi'){
   include "module/dispensasi/lihat-dispensasi.php";
 }
elseif ($_GET['module']=='edit-dispensasi'){
   include "module/dispensasi/edit-dispensasi.php";
 }
elseif ($_GET['module']=='tambah-dispensasi'){
   include "module/dispensasi/tambah-dispensasi.php";
 }
 elseif ($_GET['module']=='preview-dispensasi') {
   include "module/dispensasi/tampil-dispensasi.php";
}
 elseif ($_GET['module']=='registrasi-dispensasi') {
   include "module/dispensasi/cetak-registrasi-dispensasi.php";
 }
 elseif ($_GET['module']=='penerbitan-dispensasi') {
   include "module/dispensasi/cetak-dispensasi.php";
 }

elseif ($_GET['module']=='data-admin'){
include "module/admin/lihat-admin.php";
}
elseif ($_GET['module']=='tambah-admin'){
include "module/admin/tambah-admin.php";
}
elseif ($_GET['module']=='edit-admin'){
include "module/admin/edit-admin.php";
}
elseif ($_GET['module']=='detail-data-admin'){
include "module/admin/tampil-admin.php";
}
elseif ($_GET['module']=='dasar-hukum'){
include "module/dh/dasar-hukum.php";
}
elseif ($_GET['module']=='tambah-dasar-hukum'){
include "module/dh/tambah-hukum.php";
}
elseif ($_GET['module']=='edit-dasar-hukum'){
include "module/dh/edit-hukum.php";
}
elseif ($_GET['module']=='faq'){
include "module/faq/faq.php";
}
elseif ($_GET['module']=='tambah-faq'){
include "module/faq/tambah-faq.php";
}
elseif ($_GET['module']=='edit-faq'){
include "module/faq/edit-faq.php";
}
elseif ($_GET['module']=='persyaratan'){
include "module/persyaratan/persyaratan.php";
}
elseif ($_GET['module']=='tambah-persyaratan'){
include "module/persyaratan/tambah-persyaratan.php";
}
elseif ($_GET['module']=='edit-persyaratan'){
include "module/persyaratan/edit-persyaratan.php";
}
elseif ($_GET['module']=='penanda-tangan'){
include "module/penanda/penanda-tangan.php";
}
elseif ($_GET['module']=='tambah-penanda-tangan'){
include "module/penanda/tambah-penanda-tangan.php";
}
elseif ($_GET['module']=='edit-penanda-tangan'){
include "module/penanda/edit-penanda-tangan.php";
}
elseif ($_GET['module']=='regulasi'){
include "module/regulasi/regulasi.php";
}
elseif ($_GET['module']=='tambah-regulasi'){
include "module/regulasi/tambah-regulasi.php";
}
elseif ($_GET['module']=='edit-regulasi'){
include "module/regulasi/edit-regulasi.php";
}
elseif ($_GET['module']=='data-pemohon'){
include "module/pemohon/pemohon.php";
}
elseif ($_GET['module']=='tambah-pemohon'){
include "module/pemohon/tambah-pemohon.php";
}
elseif ($_GET['module']=='edit-pemohon'){
include "module/pemohon/edit-pemohon.php";
}
elseif ($_GET['module']=='detail-data-pemohon'){
include "module/pemohon/tampil-pemohon.php";
}
elseif ($_GET['module']=='akun-anda'){
include "module/superadmin/lihat-admin.php";
}
elseif ($_GET['module']=='edit-akun-anda'){
include "module/superadmin/edit-admin.php";
}
elseif ($_GET['module']=='detail-data-anda'){
include "module/superadmin/tampil-admin.php";
}
// Apabila modul tidak ditemukan
else{
  echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}


?>