<?php
//session_start();
include "../application/model/config.php";
session_start();
if(isset($_POST['login_btn'])){				
  	
  $username	  = $_POST['username'];
  $password   = $_POST['password'];
  $akses	  = $_POST['akses'];
  $stmt=$db->prepare("SELECT * FROM admin WHERE username='$username' && password='$password' && akses='$akses'");
  $stmt->bindParam(':username', $username);
  $stmt->bindParam(':password', $password);
  $stmt->bindParam(':akses', $akses);
  $stmt->execute();
    if($username=="") {
      ?>
			<script type="text/javascript">
				alert("Username Tidak Boleh Kosong")
				window.history.back();
			</script>
		<?php
   }
   else if($password=="") {
      ?>
			<script type="text/javascript">
				alert("Password salah")
				window.history.back();
			</script>
		<?php 
   }
	else if($stmt->rowCount() == 0)
	{
		?>
			<script type="text/javascript">
				alert("Username atau Password salah")
				window.history.back();
			</script>
		<?php
		//$error = "Username or Password is invalid";
	}
	else
	{
	if ($stmt->rowCount() > 0) {
			# code...
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			//$_SESSION['username'] = $row['username'];
			$_SESSION['akses'] = $row['akses'];
			echo"<script>alert('Selamat Datang, kini anda dapat mengajukan permohonan yang anda perlukan');</script>";
			echo "<script>window.location='../admin/?module=home';</script>";
		}else{
			echo"<script>window.history.back();</script>";
		}
	}
}
?>