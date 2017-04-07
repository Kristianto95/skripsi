<?php
session_start();
  if(!isset($_SESSION['akses'])){ // Halaman ini tidak dapat diakses jika belum login 
    header('Location: login.php'); 
 }
?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Admin Website Kecamatan</title>
	<!-- BOOTSTRAP STYLES-->
      <link rel="stylesheet" href="../asset/css/bootstrap.min.css">  
     <!-- FONTAWESOME STYLES--><!-- 
    <link href="../asset/css/font-awesome.css" rel="stylesheet" type="text/css" > -->
        <!-- CUSTOM STYLES-->
    <link href="../asset/css/custom.css" rel="stylesheet" type="text/css" >
   
</head>
<body>
    <div id="wrapper">
        <?php
            include ('include/header.php');
            include ('include/nav-right.php');   
        include('../library/fungsi_cetak.php');

        ?>
        <div id="page-wrapper" >
                      <?php
            include ('konten.php');
        ?>
                    </div>
                 <!-- /. ROW  -->
        </div>
    </div>
    <?php
        include ('include/footer.php');
    ?>
    <!-- JQUERY SCRIPTS -->
    <script src="../asset/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../asset/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../asset/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../asset/js/custom.js"></script>
</body>
</html>