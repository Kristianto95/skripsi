<?php
   include('../../library/fungsi_cetak.php');
   include('..//model/model_pemohon.php');
$nama_dokumen='Bukti Pengajuan Dispensasi (Dispensasi)';
define('_MPDF_PATH','../../library/mpdf60/');// define digunakan untuk membuat variabel tetap(konstanta)
include(_MPDF_PATH . "mpdf.php");
$mpdf=new mPDF('utf-8', 'A4');
ob_start();//ob= output buffer
?>


<!DOCTYPE html>
<html>
<head>
  <title>Rumah Paten</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../asset/costum.css">
</head>
<body >
       <?php
            include ('../konten.php');
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