<?php
require '../../../koneksi/config.php';

  
  $id           = @$_POST['id'];
  $username     = @$_POST['username'];
  $password     = @$_POST['password'];
  $nik          = @$_POST['nik'];
  $nama         = @$_POST['nama'];
  $alamat       = @$_POST['alamat'];
  $akses        = @$_POST['akses'];
  //validasi Nomer_agenda
  $stmt= $db->prepare('UPDATE admin SET  username=:username, password=:password, nik=:nik, nama=:nama, alamat=:alamat, akses=:akses WHERE id=:id');
  $stmt-> bindValue(":id", $id,PDO::PARAM_INT);
  $stmt-> bindValue(":username", $username,PDO::PARAM_STR);
  $stmt-> bindValue(":password", $password,PDO::PARAM_STR);
  $stmt-> bindValue(":nik", $nik,PDO::PARAM_STR);
  $stmt-> bindValue(":nama", $nama,PDO::PARAM_STR);
  $stmt-> bindValue(":alamat", $alamat,PDO::PARAM_STR);
  $stmt-> bindValue(":akses", $akses,PDO::PARAM_STR);
  $stmt-> execute();
  //cek apakah proses penyimpanan Berhasil
  if($stmt->rowCount() > 0) {//jika penyimpanan berhasil
    ?>
    <script>
    alert("Proses Penyimpanan Berhasil")
    window.location="../../index.php?module=admin&id=1=<?php echo base64_encode($username);?>";
    </script>

    <?php
  }else{ //jika penyimpanan gagal 
    ?>
    <script>
    alert("Data sama Sekali Tidak Di ubah")
  //window.history.back();
    </script>
    <?php
  }
?>


         