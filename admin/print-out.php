<?php
session_start();
  if(!isset($_SESSION['username'])){ // Halaman ini tidak dapat diakses jika belum login 
    header('Location: login.php'); 
 }
$nama_dokumen='Bukti Pengajuan Perizinan';
define('_MPDF_PATH','../library/mpdf60/');// define digunakan untuk membuat variabel tetap(konstanta)
include(_MPDF_PATH . "mpdf.php");
$mpdf=new mPDF('utf-8', 'A4');
ob_start();//ob= output buffer
 require 'all_fungsi/fungsi_cetak.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Rumah Paten</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="../asset/costum.css">
  <style type="text/css">
    body {
        background: url(../application/gambar/logo.jpg) no-repeat center;
        opacity: 0.2;
        filter: alpha(opacity=50);
        margin: 0px auto;
    }
    .fonttable{
        font-size: 15px;
        line-height: 30px;
    }
    .tanpafonttable{
        line-height: 20px; !important;
    }
</style>
</head>
<body>
       <?php
            include ('konten.php');
        ?>
 </body>
</html>

<?php
$html = ob_get_contents();
ob_end_clean();
$mpdf->WriteHTML($html);
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>