<?php
  if(!isset($_SESSION['akses'])){ // Halaman ini tidak dapat diakses jika belum login 
    header('Location: login.php'); 
 }
?>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-3x"></i> Perizinan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="media.php?module=izin-gangguan&id=1">HO</a></li>
                             <li><a href="media.php?module=izin-mendirikan-bangunan&id=1">IMB</a></li>
                            <li  ><a href="media.php?module=izin-usaha-mikro-dan-kecil&id=1">IUMK</a></li>
                            <li ><a href="media.php?module=surat-izin-usaha-perdagangan&id=1">SIUP</a> </li>
                            
                            <li  ><a href="media.php?module=tanda-daftar-industri&id=1">TDI</a> </li> 
                            <li ><a href="media.php?module=tanda-daftar-perusahaan">TDP</a> </li>         
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit fa-3x"></i>Non Perizinan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li  ><a href="media.php?module=domisili&id=1">Domisili</a> </li>
                            <li  ><a href="media.php?module=dispensasi&id=1">Dispensasi Nikah</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit fa-3x"></i> Lain - Lain<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <?php  
                               if ($_SESSION['akses'] == 'superadmin'){
                                    ?>
                                    <li>
                                <a href="media.php?module=dasar-hukum&id=1">Dasar Hukum</a>
                            </li>
                            <li>
                                <a href="media.php?module=persyaratan&id=1">Persyaratan</a>
                            </li>
                            <li>
                                <a href="media.php?module=penanda-tangan&id=1">Penanda Tangan</a>
                            </li>
                            <li>
                                <a href="media.php?module=faq&id=1">FAQ</a>
                            </li><!-- 
                            <li>
                                <a href="media.php?module=regulasi&id=1">Regulasi</a>
                            </li> -->
                            <li>
                                <a href="media.php?module=data-admin&id=1">Manajemen Data Admin</a>
                            </li>
                            <li>
                                <a href="media.php?module=data-pemohon&id=1">Manajemen Data Pemohon</a>
                            </li>
                            <li>
                                <a href="media.php?module=akun-anda&id=1">Manajemen Akun Anda</a>
                            </li>
                            <?php
                               }else
                                {
                                ?>
                            
                            <li>
                                <a href="media.php?module=data-pemohon&id=1">Data Pemohon</a>
                            </li>
                            <li>
                                <a href="media.php?module=akun-anda&id=1">Manajemen Akun Anda</a>
                            </li>
                            <?php
                               }
                             ?>
                     
                        </ul>
                    </li>                    
                </ul>
            </div>
        </nav>
    </div> <!-- Batas Wrapper -->
</body>